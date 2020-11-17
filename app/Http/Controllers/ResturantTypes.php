<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
            'name_ar'=>$request->name_ar,
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



    public function edit($id)
    {
        $resturanttype = \App\ResturantsTypes::find($id);

        return view('resturanttypes.edit', compact('resturanttype'));
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


        if (Session::get('locale') == 'en') {
            $resturanttype = DB::table('resturants_types')->where('id', $id)->first();
            foreach ($resturanttype as $resturanttyp) {
                DB::table('resturants_types')
                    ->where('id', $id)
                    ->update(['name' => $request->name]);
            }
        } elseif (Session::get('locale') == 'ar') {
            $resturanttype = DB::table('resturants_types')->where('id', $id)->first();
            foreach ($resturanttype as $resturanttyp) {
                DB::table('resturants_types')
                    ->where('id', $id)
                    ->update(['name_ar' => $request->name_ar]);
            }

        }
        Session::flash('success',  trans('messages.edit_successfully'));

        return redirect()->back();

    }
}
