<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class ProductController extends Controller
{

    /*public function __construct()
    {
        this->middleware('guest', 'auth');
    }*/



    public function index()
    {
        $products = Product::paginate(10);
        return view('products.product', ['products'=>$products]);
    }

    public function add()
    {
        if( Auth::check() )
        {
            return view('products.add');
        }else
        {
            return view('auth.login');
        }

    }

    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('guest','auth');
    }*/

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255|unique:product',
            'protein' => 'required|max:255|numeric',
            'carbs' => 'required|max:255|numeric',
            'fat' => 'required|max:255|numeric',
            'calories' => 'required|max:255|numeric',
            'rate' => 'max:255|numeric',
        ]);
    }*/







    protected function postCreate(Request $request)
    {
        $this ->validate($request,[
            'name' => 'required|max:120|unique:products',
            'protein' => 'required|numeric|max:99999',
            'carbs' => 'required|numeric|max:99999',
            'fat' => 'required|numeric|max:99999',
            'calories' => 'required|numeric|max:99999',
        ]);
        $name = $request['name'];
        $protein = $request['protein'];
        $carbs = $request['carbs'];
        $fat = $request['fat'];
        $calories = $request['calories'];

        $product = new Product();
        $product -> name = $name;
        $product -> protein = $protein;
        $product -> carbs = $carbs;
        $product -> fat = $fat;
        $product -> calories = $calories;

        $product->save();

        return redirect()->back();


    }







}
