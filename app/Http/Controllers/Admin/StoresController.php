<?php

namespace App\Http\Controllers\Admin;

use App\StoresModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = StoresModel::all();
        return view('stores.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stores.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new StoresModel;        
        $store->fill($request->all());
        $store->save();
        return redirect('stores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StoresModel  $storesModel
     * @return \Illuminate\Http\Response
     */
    public function show(StoresModel $storesModel)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StoresModel  $storesModel
     * @return \Illuminate\Http\Response
     */
    public function edit(StoresModel $store)
    {  
        return view('stores.form', ['store'=> $store]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StoresModel  $storesModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoresModel $store)
    {   
        $store->fill($request->all());
        $store->save();
        return redirect('stores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StoresModel  $storesModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoresModel $storesModel)
    {
        dd('destroy');
    }
}
