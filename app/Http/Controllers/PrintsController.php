<?php

namespace App\Http\Controllers;

use App\Models\Count;
use Illuminate\Http\Request;
use PDF;
use function PHPUnit\Framework\isEmpty;

class PrintsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

       $count= Count::first();
       if (is_null($count)){
           $new = new Count();
           $new->count= $request->count;
           $new->save();
           $num=0;
       }else{
           $num=$count->count ;
           $count->count=$count->count + $request->count;
           $count->save();
       }
        $data = [
            'count' => $request->count,
            'num' => $num
        ];

        $pdf = PDF::loadView('pdf', $data);
        return $pdf->stream('print.pdf' );
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
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
