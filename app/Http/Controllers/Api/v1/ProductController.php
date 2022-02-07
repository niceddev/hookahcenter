<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class  ProductController extends Controller
{

    public function index()
    {
        $products = Product::withCategory(
            request()->input('category')
        )->sortBy(
            request()->input('sortBy')
        )->get();

        return ProductResource::collection($products);
    }

    public function index2(){

//        $arr = [9,8,7,6,5,4,3,2,1,321,123,50];
//
//        $arr = $this->sortIt($arr);
//
//        print_r($arr);
//
//        $fac = $this->factorial(9);
//        print_r($fac);
//
//        $arr = [5,1,3];
//        print_r($this->arrSum($arr));
//        dd(collect(Product::all()));
//        $prod = Product::all()
//            ->sortByDesc('price')
//            ->pluck('price');
//        dd($prod);

        $product = Product::all();


        return view('app')->with('product', $product);
    }

//    public function sortIt(&$arr){
//        for ($i = 0; $i < count($arr); $i++){
//            for($j = 0; $j < count($arr); $j++){
//                if($arr[$i] < $arr[$j]){
//                    $tmp = $arr[$j];
//                    $arr[$j] = $arr[$i];
//                    $arr[$i] = $tmp;
//                }
//            }
//        }
//        return $arr;
//    }

//    public function factorial($num){
//
//        if ($num == 1){
//            return $num;
//        }else{
//            return $num * $this->factorial($num-1);
//        }
//
//    }

//    public function arrSum($arr){
//
//        $tmp = null;
//
////        foreach ($arr as $arr_val){
////            $tmp += $arr_val;
////        }
//
////        for($i = 0; $i < count($arr); $i++){
////            $tmp += $arr[$i];
////        }
//
//        if(count($arr) == 1){
//            return $arr[0];
//        }else{
//            $tmp = array_shift($arr) + $this->arrSum($arr);
//        }
//
//        return $tmp;
//
//    }

}
