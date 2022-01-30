<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Trading;
use Illuminate\Http\Request;

class TradingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Trading::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|max:171',
            'ltp' => 'required',
            'high' => 'required',
            'low' => 'required',
            'close_price' => 'required',
            'ycp' => 'required',
            'change' => 'required',
            'trade' => 'required',
            'value_mn' => 'required',
            'volume' => 'required'
        ]);

        return Trading::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trading  $trading
     * @return \Illuminate\Http\Response
     */
    public function show(Trading $trading)
    {
        return $trading;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trading  $trading
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trading $trading)
    {
        $request->validate([
            'code' => 'max:171',
        ]);

        $trading->update($request->all());
        return $trading;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trading  $trading
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trading $trading)
    {
        $trading->delete();
        return response()->json(null, 204);
    }
}
