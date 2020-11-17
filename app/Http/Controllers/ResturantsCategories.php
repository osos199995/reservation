<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ResturantsCategories extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resturantsCategories=\App\ResturantsCategories::paginate(10);
        return view('resturantcategories.index',compact('resturantsCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('resturantcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\ResturantsCategories::create([

            'name'=>$request->name,
            'name_ar'=>$request->name_ar,
        ]);
        return redirect()->back();
    }


    public function changeStatus(Request $request,$id){

        $resturatCategories= \App\ResturantsCategories::find($id);
        $resturatCategories->update([
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
    public function edit($id)
    {
        $resturantcategory = \App\ResturantsCategories::find($id);

        return view('resturantcategories.edit', compact('resturantcategory'));
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
            $resturantcategory = DB::table('resturants_categories')->where('id', $id)->first();
            foreach ($resturantcategory as $resturantcategor) {
                DB::table('resturants_categories')
                    ->where('id', $id)
                    ->update(['name' => $request->name]);
            }
        } elseif (Session::get('locale') == 'ar') {
            $resturantcategory = DB::table('resturants_categories')->where('id', $id)->first();
            foreach ($resturantcategory as $resturantcategor) {
                DB::table('resturants_categories')
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
