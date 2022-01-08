<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function paginatedProduct(){
        try{
            $products = Product::with(['category','product_details']);
            if(request()->has('orderBy')){
                $orderBy = request()->get('orderBy');
                switch ($orderBy) {
                    case 'time-new':
                        $products = $products->orderByDesc('updated_at');
                        break;
                    case 'time-old':
                        $products = $products->orderBy('updated_at');
                        break;
                    case 'price-hight':
                        $products = $products->orderByDesc('price');
                        break;
                    case 'price-low':
                        $products = $products->orderBy('price');
                        break;
                    default:
                        $products = $products->orderByDesc('id');
                        break;
                }
            }
            return response()->json(['success' => true, 'data' => $products->paginate(5)]);
        }catch(Exception $e){
            return response()->json(['success' => false, 'message' => $e->getMessage()],500);
        }
    }

    public function byCategory($categoryId){
        try{
            $products = Product::where('category_id',$categoryId)->with(['category','product_details']);;
            return response()->json(['success' => true, 'data' => $products->paginate(5)]);
        }catch(Exception $e){
            return response()->json(['success' => false, 'message' => $e->getMessage()],500);
        }
    }
}
