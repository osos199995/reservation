<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ResturantOptions extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resturantsOptions=\App\ResturantsOptions::paginate(10);
        return view('resturantoptions.index',compact('resturantsOptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resturantoptions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\ResturantsOptions::create([

            'name'=>$request->name,
            'name_ar'=>$request->name_ar,
        ]);
        return redirect()->back();
    }

    public function changeStatus(Request $request,$id){

        $resturantoptions= \App\ResturantsOptions::find($id);
        $resturantoptions->update([
            'status'=>$request->status,
        ]);
        return redirect()->back();
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


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {
        $resturantoption = \App\ResturantsOptions::find($id);

        return view('resturantoptions.edit', compact('resturantoption'));
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
            $resturantoption = DB::table('resturants_options')->where('id', $id)->first();
            foreach ($resturantoption as $resturantoptio) {
                DB::table('resturants_options')
                    ->where('id', $id)
                    ->update(['name' => $request->name]);
            }
        } elseif (Session::get('locale') == 'ar') {
            $resturantoption = DB::table('resturants_options')->where('id', $id)->first();
            foreach ($resturantoption as $resturantoptio) {
                DB::table('resturants_options')
                    ->where('id', $id)
                    ->update(['name_ar' => $request->name_ar]);
            }

        }
        Session::flash('success',  trans('messages.edit_successfully'));

        return redirect()->back();

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
}
