<?php

namespace App\Http\Controllers;

use App\Areas;
use App\Cities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BranchesController extends Controller
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
    $resturantCategories=DB::table('resturants_categories_vendor')->where('vendor_id',Auth::guard('vendor')->id())
        ->get();
        $categoriesarr = [];
        for ($i = 0; $i < count($resturantCategories); $i++) {
      array_push($categoriesarr, $resturantCategories[$i]->resturants_categories_id);
        }
    $resturantCategories=\App\ResturantsCategories::whereIn('id',$categoriesarr)->get();

        $resturantOptions=DB::table('resturants_types_vendor')->where('vendor_id',Auth::guard('vendor')->id())
            ->get();
        $optionsarr = [];
        for ($i = 0; $i < count($resturantOptions); $i++) {
            array_push($optionsarr, $resturantOptions[$i]->resturanturan_options_id);
        }
        $resturantOptions=\App\ResturantsOptions::whereIn('id',$optionsarr)->get();
$cities=Cities::where('status',0)->get();
$areas=Areas::where('status',0)->get();

        return view('branches.create',compact('resturantCategories','resturantOptions','cities','areas'));
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
}
