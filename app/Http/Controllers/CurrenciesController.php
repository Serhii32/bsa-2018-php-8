<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;
use App\Http\Requests\CurrencyRequest;

class CurrenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $currencies = Currency::all();

        return view('currencies', ['currencies' => $currencies]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('currency-create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CurrencyRequest $request)
    {
        
        $currency = new Currency();
        $currency->title = $request->title;
        $currency->short_name = $request->short_name;
        $currency->logo_url = $request->logo_url;
        $currency->price = $request->price;
        $currency->save();
        return redirect()->route('currencies.index')->with('status', 'Currency added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        
        $currency = Currency::where('id', $id)->first();

        return view('currency-show', ['currency' => $currency]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        
        $currency = Currency::where('id', $id)->first();

        return view('currency-edit', ['currency' => $currency]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CurrencyRequest $request, int $id)
    {
        
        $currency = Currency::where('id', $id)->first();
        $currency->title = $request->title;
        $currency->short_name = $request->short_name;
        $currency->logo_url = $request->logo_url;
        $currency->price = $request->price;
        $currency->save();

        return redirect()->route('currencies.show', ['id' => $currency->id])->with('status', 'Currency updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        
        $currency = Currency::where('id', $id)->first();
        $currency->delete();
        return redirect()->route('currencies.index')->with('status','Currency deleted');

    }
}
