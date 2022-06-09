<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsCon extends BaseCon
{
    const limit= 6;

    public function products(Request $request){

        if($request->has("keyword")) {
            $result = Products::where("name", "like", "%" . $request->get("keyword") . "%")->where('is_active', 1)->paginate(self::limit)->withQueryString();
        } else {
            $result = Products::where('is_active', 1)->paginate(self::limit)->withQueryString();
        }
        $this->data["products"]=$result;
      return view("frontend.pages.products",$this->data);
    }
    public function product($id){

        $product = Products::find($id);

        if(!$product) {
            return redirect()->route('products');
        }

        $this->data['product'] = $product;

        return view("frontend.pages.product",$this->data);
    }

}
