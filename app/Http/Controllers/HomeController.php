<?php

namespace App\Http\Controllers;

use App\Modeluser;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        // $this->middleware(function($request,  $next){
        //     $model = new \App\Modeluser;
        //     if($model->role == 1){
        //         return $next($request);
        //     }else{
        //         abort(403);
        //     }
        // });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $model = \Auth::user()->role;
        $products = DB::table('tbproduct')->get();

        if ($model == '1') {
            return view('home1', ['products' => $products ]);
        }else if($model == '2'){
            return view('home2');
        }else {
            abort(403);
        }
    }
    
    public function addproduct()
    {
        $model = \Auth::user()->role;
        if($model == '1'){
            return view('addproduct');
        }else {
            abort(404);
        }
    }
    public function profile()
    {
        return view('profile');
    }
    public function product()
    {
        return view('product');
    }

    public function detailproduct(Request $request)
    {
        $products = DB::table('tbproduct')->where( 'id', $request->id)->get();
        return view('detailproduct', compact('products'));
    }
}