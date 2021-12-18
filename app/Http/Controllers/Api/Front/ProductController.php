<?php

namespace App\Http\Controllers\Api\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Traits\ResponseJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class ProductController extends Controller
{
     use ResponseJson;
    public function create(Request $request)
    {
        if (Auth::user()->hasRole('vendor')) {
            $validator = Validator::make($request->all(), [
                'name_ar' => 'required',
                'name_en' => 'required',
                'price' => 'required|numeric',
                'fill_attribute_en' => 'required',
                'fill_attribute_ar' => 'required',
                'category_id' => 'required',
                'vendor_id' => 'required',
                'section_id' => 'required',
                'user_id' => 'required',
                'stock_quantity' => 'required|numeric',
                'discount' => 'nullable|numeric',
                'price_after_discount' => 'nullable|numeric',
                'is_available' => 'required|numeric',
            ]);

            if ($validator->fails()) {
                return $this->jsonResponseWithoutMessage($validator->errors(), 'data', 500);
            }
            Product::create($request->all());
            return $this->jsonResponseWithoutMessage("Craeted Successfully", 'data', 200);
        } else {
             throw new \App\Exceptions\NotAuthorized;
        }
    }
}