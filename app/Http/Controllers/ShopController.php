<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShope;
use App\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop');
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
    public function store(StoreShope $request)
    {
        // $request->validate([
        //     'title'=> 'required|between:8,50|regex:/^[ا-یa-zA-Z0-9\-۰−۹ي−،., ]+$/u',
        //     'description'=> 'required|max:2000|regex:/^[ا-یa-zA-Z0-9\-۰−۹ي−،., ]+$/u',
        //     'price'=> 'required|numeric|min:10',
        //     'image'=> 'required|mimes:png,jpg,jpeg|between:50,5000'
        // ]);

        Shop::create($request->all());

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $filenameImage = time().rand(10,99).'.'.$request->image->extension();
            $request->image->move(public_path('uploads'),$filenameImage);
        }

        return redirect()->route('shop.index')->with('success',['پست با موفقیت ثبت شد','success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
    }
}
