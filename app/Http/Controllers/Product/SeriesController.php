<?php

namespace App\Http\Controllers\product;

use App\product\Author;
use App\product\Brand;
use App\product\Category;
use App\product\Series;
use App\product\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Series::with(['brand', 'authors', 'categories', 'tags'])->paginate(15);
        $data = compact('series');

        return view('product.series.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors    = Author::get();
        $brands     = Brand::get();
        $categories = Category::withDepth()->get()->toFlatTree();
        $tags       = Tag::get();

        $data = compact('brands', 'authors', 'categories', 'tags');

        return view('product.series.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // series_id could be modified later
        if (empty($request->series_id)) {
            $now = Carbon::now()->timestamp;
            $d = 1000000;
            $request->series_id = (999 * $d) + ($now % $d);
        }

        $series = Series::updateOrCreate(
            [
                'series_id' => $request->series_id
            ],
            [
                'name'          => $request->name,
                'origin_name'   => $request->origin_name,
                'brand_id'      => $request->brand_id,
                'desc'          => $request->desc,
                'is_adult_only' => $request->is_adult_only,
            ]
        );

        $series->authors()->sync($request->author_ids);
        $series->categories()->sync($request->category_ids);
        $series->tags()->sync($request->tag_ids);

        return redirect()->route('series.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $authors    = Author::get();
        $brands     = Brand::get();
        $categories = Category::withDepth()->get()->toFlatTree();
        $series     = Series::find($id);
        $tags       = Tag::get();

        $data = compact('series', 'brands', 'authors', 'categories', 'tags');

        return view('product.series.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $series = Series::find($id);

        $series->series_id     = $request->series_id;
        $series->name          = $request->name;
        $series->origin_name   = $request->origin_name;
        $series->brand_id      = $request->brand_id;
        $series->desc          = $request->desc;
        $series->is_adult_only = $request->is_adult_only;
        $series->save();

        $series->authors()->sync($request->author_ids);
        $series->categories()->sync($request->category_ids);
        $series->tags()->sync($request->tag_ids);

        return redirect()->route('series.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $series = Series::find($id);
        $series->delete();

        return redirect()->route('series.index');
    }
}
