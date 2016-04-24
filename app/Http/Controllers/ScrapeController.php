<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use phpQuery;

use App\Book;

class ScrapeController extends Controller
{
    public function index()
    {
        return view('scrape');
    }

    public function process(Request $request)
    {
        $skill = trim($request->input('skill'));

        phpQuery::selectDocument(phpQuery::newDocumentFile('http://www.amazon.com/s/?field-keywords='.$skill));

        $results = explode(' ', str_replace('-', ' ', pq('#s-result-count')->text()));
        $numResults = count($results) > 1 ? $results[1] : 0;

        $titles = [];
        $bookUrls = [];
        $descriptions = [];
        $authors = [];
        $authorUrls = [];
        $bios = [];
        $prices = [];
        $ratings = [];
        $images = [];
        for ($i=0; $i < $numResults; $i++) {
            if (trim(pq('#result_'.$i.' > div > div > div > div.a-fixed-left-grid-col.a-col-right > div.a-row.a-spacing-small > a > h2')->html())) {
                $titles[] = trim(pq('#result_'.$i.' > div > div > div > div.a-fixed-left-grid-col.a-col-right > div.a-row.a-spacing-small > a > h2')->html());
                $bookUrls[] = pq('#result_'.$i.' > div > div > div > div.a-fixed-left-grid-col.a-col-right > div.a-row.a-spacing-small > a')->attr('href');
                $authors[] = trim(substr(pq('#result_'.$i.' > div > div > div > div.a-fixed-left-grid-col.a-col-right > div.a-row.a-spacing-small > div')->text(), 3));
                $authorUrls[] = pq('#result_'.$i.' > div > div > div > div.a-fixed-left-grid-col.a-col-right > div.a-row.a-spacing-small > div > span:nth-child(2) > a')->attr('href') ? 'http://www.amazon.com'.pq('#result_'.$i.' > div > div > div > div.a-fixed-left-grid-col.a-col-right > div.a-row.a-spacing-small > div > span:nth-child(2) > a')->attr('href') : '';
                $prices[] = str_replace('$', '', pq('#result_'.$i.' > div > div > div > div.a-fixed-left-grid-col.a-col-right > div:nth-child(3) > div.a-column.a-span7 > div:nth-child(2) > a > span')->text());
                $ratings[] = explode(' ', pq('#result_'.$i.' > div > div > div > div.a-fixed-left-grid-col.a-col-right > div:nth-child(3) > div.a-column.a-span5.a-span-last > div:nth-child(1) > span > span > a > i > span')->text())[0];
                $images[] = pq('#result_'.$i.' > div > div > div > div.a-fixed-left-grid-col.a-col-left > div > div > a > img')->attr('src');
            }
        }

        foreach ($bookUrls as $bookUrl) {
            if (strlen($bookUrl)) {
                phpQuery::selectDocument(phpQuery::newDocumentFile($bookUrl));
                $descriptions[] = trim(strip_tags(pq('#bookDescription_feature_div > noscript')->text()));
            } else {
                $descriptions[] = '';
            }
        }

        foreach ($authorUrls as $authorUrl) {
            if (strlen($authorUrl)) {
                phpQuery::selectDocument(phpQuery::newDocumentFile($authorUrl));
                $bios[] = trim(pq('#ap-bio > div > div.a-expander-content.a-expander-partial-collapse-content > span')->text());
            } else {
                $bios[] = '';
            }
        }

        for ($i=0; $i < count($titles); $i++) { 
            $book = [
                'title' => $titles[$i],
                'description' => $descriptions[$i],
                'author' => $authors[$i],
                'bio' => $bios[$i],
                'skill' => $skill,
                'url' => $bookUrls[$i],
                'price' => $prices[$i],
                'rating' => $ratings[$i],
                'image' => $images[$i],
            ];

            $exist = Book::where('title', $titles[$i])->where('skill', $skill)->first();
            if (!$exist) {
                Book::create($book);
            } else {
                $exist->update($book);
            }
        }

        if (strlen($skill)) {
            return redirect('book?skill='.$skill);
        } else {
            return redirect('book');
        }
    }
}
