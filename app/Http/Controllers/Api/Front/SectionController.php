<?php

namespace App\Http\Controllers\Api\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Traits\ResponseJson;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\Models\Section;
class SectionController extends Controller
{
    use ResponseJson;
    public function create(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name_ar' => 'required',
            'name_en' => 'required',
            'vendor_id' => 'required|numeric',
            'section_id' => 'required|numeric',
            'user_id' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return $this->jsonResponseWithoutMessage($validator->errors(), 'data', 500);
        }
        Section::create($request->all());
        return $this->jsonResponseWithoutMessage("Section Craeted Successfully", 'data', 200);
    }
}