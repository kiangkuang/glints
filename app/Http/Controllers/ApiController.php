<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Book;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Book::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['title'] = $request->input('title') ? : '';
        $data['description'] = $request->input('description') ? : '';
        $data['author'] = $request->input('author') ? : '';
        $data['bio'] = $request->input('bio') ? : '';
        $data['skill'] = $request->input('skill') ? : '';
        $data['price'] = $request->input('price') ? : '';
        $data['rating'] = $request->input('rating') ? : '';
        $data['image'] = $request->input('image') ? : '';
        $data['url'] = $request->input('url') ? : '';

        return response()->json(Book::create($data));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Book::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->input('title')) $data['title'] = $request->input('title');
        if ($request->input('description')) $data['description'] = $request->input('description');
        if ($request->input('author')) $data['author'] = $request->input('author');
        if ($request->input('bio')) $data['bio'] = $request->input('bio');
        if ($request->input('skill')) $data['skill'] = $request->input('skill');
        if ($request->input('price')) $data['price'] = $request->input('price');
        if ($request->input('rating')) $data['rating'] = $request->input('rating');
        if ($request->input('image')) $data['image'] = $request->input('image');
        if ($request->input('url')) $data['url'] = $request->input('url');

        return response()->json(Book::where('id', $id)->update($data));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json(Book::where('id', $id)->delete());
    }
}
