<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Mechanic;

class UserController extends Controller
{
    public function index()
    {
        dd("ss");
        // return view('welcome');
        // $data = [];

        // if($data)
        // {

        // }
        // $data[] = "prem";
        // $data[][]["name"] = "prem";

        // dd($data);

        $data = Mechanic::first();
        dd($data);

        

        // dd($data->carss[0]['pivot']->);

        /*most important query
        $data = Mechanic::with(['cars'=>function($query){
            $query->where('name','prem');
        }])->get();

        foreach ($data as $key => $single) {
            dd($single->cars);
        }
        */

        $data = Mechanic::with('carss')->first();

        // foreach ($data->carss as $key => $single) {
        //     // # code...
        //     // dd($single->pivot);
        // }

        // exit;
        // foreach ($data as $key => $single) {
        //     dd($single->carss);
        // }

        // $subitem_id = 1;

        // $shared = Mechanic::with('cars')->whereHas('cars', function($query) {
        //     $query->where("name","ddd");
        // $query->select('name');
    // })
    // ->get();
                // $shared = Mechanic::with(['cars',function($query){
                //         $query->select('id');
                //     }])->get();
                //     // ]);
                
    }

    public function storedata(Request $request)
    {
        return redirect()->back();
    }
    
}
