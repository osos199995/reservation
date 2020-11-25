<?php

namespace App\Http\Controllers;

use App\Areas;
use App\Branch;
use App\Cities;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::paginate(10);
        return view('branches.index', compact('branches'));
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

        DB::beginTransaction();
        try {
                $branch = Branch::create([
                    'name_en' => $request->name_en,
                    'name_ar' => $request->name_ar,
                    'long' => $request->long,
                    'latt' => $request->latt,
                    'city_id' => $request->city,
                    'area_id' => $request->area,
                    'longitude' => $request->long,
                    'lattiude' => $request->latt,
                    'piece_en' => $request->piece_en,
                    'piece_ar' => $request->piece_ar,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'vendor_id' => Auth::guard('vendor')->id(),
                    'branch_type_id' => Auth::guard('vendor')->user()->resturanttype_id,

                    'password' => bcrypt($request->password),

                ]);
                foreach ($request->category as $cat) {
                    DB::table('resturants_categories_branch')->insert([

                        'branch_id' => $branch->id,
                        'resturants_categories_id' => $cat

                    ]);
                };

                foreach ($request->option as $option) {
                    DB::table('resturants_options_branch')->insert([
                        'branch_id' => $branch->id,
                        'resturants_options_id' => $option,
                    ]);
                    DB::commit();

                }

        } catch (\Exception $e) {
            DB::rollBack();
            //displaying error
            dd($e);

        }
        $branches = Branch::paginate(10);
        return view('branches.index', compact('branches'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $branch = Branch::find($id);

        return view('branches.show', compact('branch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $branch=Branch::find($id);
     $resturant=Vendor::where('id',Auth::guard('vendor')->id())->first();
    $cities=Cities::all();
    $areas=Areas::all();

        return view('branches.edit', compact('branch','resturant','cities','areas'));

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
        $branch=Branch::find($id);
        if (Session::get('locale') == 'en'){

$branch->update([
        'name_en'=>$request->name_en,
        'piece_en'=>$request->piece_en,
        'longitude'=>$request->long,
        'lattiude'=>$request->latt,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'city_id'=>$request->city,
        'area_id'=>$request->area,
]);
        }else{
            $branch->update([
                'name_ar'=>$request->name_ar,
                'piece_ar'=>$request->piece_ar,
                'longitude'=>$request->long,
                'lattiude'=>$request->latt,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'city_id'=>$request->city,
                'area_id'=>$request->area,
            ]);
        }
        if (isset($request->category)) {
            $tests= DB::table('resturants_categories_branch')->where('branch_id',$id)->delete();
            foreach ($request->category as $category){
                DB::table('resturants_categories_branch')->where('branch_id',$id)->insert([
                    'branch_id' => $id,
                    'resturants_categories_id' => $category
                ]);
            }

        }

        if (isset($request->option)) {
            $tests= DB::table('resturants_options_branch')->where('branch_id',$id)->delete();
            foreach ($request->category as $category){
                DB::table('resturants_options_branch')->where('branch_id',$id)->insert([
                    'branch_id' => $id,
                    'resturants_options_id' => $category
                ]);
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
