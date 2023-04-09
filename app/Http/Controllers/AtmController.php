<?php

namespace App\Http\Controllers;

use App\Models\Atm;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AtmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user, Request $request)
    {

        return view('atm.create', [
            'user' => $user,
        ]);
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
     * @param  \App\Models\Atm  $atm
     * @return \Illuminate\Http\Response
     */
    public function show(Atm $atm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atm  $atm
     * @return \Illuminate\Http\Response
     */
    public function edit(Atm $atm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atm  $atm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atm $atm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atm  $atm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atm $atm)
    {
        //
    }
}
