<?php

namespace App\Http\Controllers;

use App\PivotResturantsCategories;
use App\PivotResturantsOptions;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use function PHPUnit\Framework\throwException;

class ResturantsController extends Controller
{
   public function index(){
       $resturants=Vendor::paginate(10);
       return view('resturants.index',compact('resturants'));
   }
    public function create()
    {
        $resturantcategories=\App\ResturantsCategories::where('status',0)->get();
        $resturanttypes=\App\ResturantsTypes::where('status',0)->get();
        $resturantoptions=\App\ResturantsOptions::where('status',0)->get();
        return view('resturants.create',compact('resturantcategories','resturantoptions','resturanttypes'));
    }


    public function store(Request $request){

        DB::beginTransaction();
        try{
        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $image->move('uploads/logos/', $filename);

            $resturant =Vendor::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'password'=>bcrypt($request->password),
                'logo'=>$filename,
                'resturanttype_id'=>$request->type,
            ]);
            foreach ($request->category as $cat) {
                PivotResturantsCategories::create([

                    'resturant_id' => $resturant->id,
                    'resturant_categories_id' => $cat

                ]);
            };

//$resturantcategories=array_map(function ($item)use($resturant){
//    $item['resturant_categories_id']=$resturant->id;
//    return $item;
//},$resturantcategories);
//DB::table('pivot_resturants_categories')->insert($resturantcategories);

            foreach ($request->option as $option) {
            PivotResturantsOptions::create([
                'resturant_id'=>$resturant->id,
                'resturanturan_options_id'=>$option,
            ]);
                DB::commit();

        }
        }
        }


        catch (\Exception $e){
                DB::rollBack();
                //displaying error
//            dd($e);

            }
        $resturants=Vendor::paginate(10);
        return view('resturants.index',compact('resturants'));
}


    public function show($id)
    {
        $resturant=Vendor::find($id);


        return view('resturants.show',compact('resturant'));
    }


    public function edit($id){
        $resturant=Vendor::find($id);
        $resturantcategories=\App\ResturantsCategories::where('status',0)->get();
        $resturanttypes=\App\ResturantsTypes::where('status',0)->get();
        $resturantoptions=\App\ResturantsOptions::where('status',0)->get();
        return view('resturants.edit',compact('resturant','resturantcategories','resturantoptions','resturanttypes'));
}
}
