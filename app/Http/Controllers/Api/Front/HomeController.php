<?php

namespace App\Http\Controllers\Api\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Product;
use App\Traits\ResponseJson;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SectionResource;
class HomeController extends Controller
{
    //
    use ResponseJson;

    public function search_site(Request $request)
    {
        $products = Product::where('name_en', 'LIKE', '%' . $request->keyword . '%')->orWhere('name_ar', 'LIKE', '%' . $request->keyword . '%')->get();

        $sections = Section::where('name_en', 'LIKE', '%' . $request->keyword . '%')->orWhere('name_ar', 'LIKE', '%' . $request->keyword . '%')->get();

        $result = [];

        if (count($products) && count($sections)) {
            $result = array_merge(ProductResource::collection($products), SectionResource::collection($sections));
        } else {
            if (count($products)) {
                $result = ProductResource::collection($products);
            } else if (count($sections)) {
                $result = SectionResource::collection($sections);
            }
        }
        return $this->jsonResponse($result, 'data', 200, 'Search Result');
    }
    public function filter(Request $request)
    {
        $query = Product::where('id', '>', 0);

        if (isset($request->store_id)) {
            $query->where('vendor_id', $request->store_id);
        }

        if (isset($request->section_id)) {
            $query->where('section_id', $request->section_id);
        }



        $result = $query->get();



        return response()->json(['products' => ProductResource::collection($result)], 200);
        // return $this->jsonResponse($result, 'data', 200, 'Search Result');


    }
}