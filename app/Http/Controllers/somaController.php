<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class somaController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function soma($num1, $num2)
    {
        $soma = $num1 + $num2;
        logger()->info('Soma feita');

        return ($soma);
    }
    public function sub($num1, $num2)
    {
        $sub = $num1 - $num2;
        logger()->debug('Sub feita', ['num1' => $num1, 'num2' => $num2, 'sub' => $sub]);
        return ($sub);
    }
    public function div($num1, $num2)
    {
        if ($num2 == 0) {
            logger()->error('Divisor zero!');
            return ('Divisor zero!');
        }
        $div = $num1 / $num2;
        logger()->info('Div feita');
        return ($div);
    }
}
