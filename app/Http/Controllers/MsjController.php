<?php

namespace App\Http\Controllers;

use App\Msj;
use Illuminate\Http\Request;

class MsjController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Msj::all();
        
        return view('msj', compact('contacts'));
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
        $msj = Msj::create($request->all());
        //dd($msj);
        event(new \App\Events\mensaje($msj));
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Msj  $msj
     * @return \Illuminate\Http\Response
     */
    public function show(Msj $msj)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Msj  $msj
     * @return \Illuminate\Http\Response
     */
    public function edit(Msj $msj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Msj  $msj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Msj $msj)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Msj  $msj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Msj $msj)
    {
        //
    }
}
