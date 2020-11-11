<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResturantTypes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resturantsTypes=\App\ResturantsTypes::paginate(10);
        return view('resturanttypes.index',compact('resturantsTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('resturanttypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\ResturantsTypes::create([

            'name'=>$request->name,
        ]);
        return redirect()->back();
    }


    public function changeStatus(Request $request,$id){

        $resturatTypes= \App\ResturantsTypes::find($id);
        $resturatTypes->update([
            'status'=>$request->status,
        ]);
        return redirect()->back();
    }
}
