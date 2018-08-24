<?php

namespace App\Http\Controllers\Product;

use App\product\Series;
use App\Product\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::with(['series'])->paginate(15);
        $data = compact('books');

        return view('product.books.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book   = Book::with(['series'])->find($id);
        $series = Series::get();

        $data = compact('book', 'series');

        return view('product.books.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);

        $book->series_id      = $request->series_id;
        $book->book_id        = $request->book_id;
        $book->name           = $request->name;
        $book->origin_name    = $request->origin_name;
        $book->desc           = $request->desc;
        $book->cost_48hr      = $request->cost_48hr;
        $book->cost_limitless = $request->cost_limitless;
        $book->save();

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
