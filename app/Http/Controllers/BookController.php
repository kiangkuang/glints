<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Http\Requests;

use App\Book;

class BookController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->input('skill')) {
    		$skill = Str::title($request->input('skill'));
    	} else {
    		$skill = null;
    	}
    	
    	if ($skill == null) {
    		$skill = 'All';
    		$books = Book::groupBy('title')->orderBy('title', 'ASC')->get();
    	} else {
    		$books = Book::where('skill', $skill)->groupBy('title')->orderBy('title', 'ASC')->get();
    	}

        foreach ($books as $i => $book) {
            if (Book::where('title', $book->title)->count() < 2){
                unset($books[$i]);
            }
        }

    	$data['skill'] = $skill;
    	$data['books'] = $books;

        return view('book', $data);
    }
}
