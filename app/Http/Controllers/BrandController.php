<?php

namespace App\Http\Controllers;

use App\Models\CarBrand;
use Illuminate\Http\Request;
use App\Http\Resources\CarBrandResource;
use App\Http\Resources\CarModelResource;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        $brands = CarBrand::all();

        return CarBrandResource::collection($brands);
    }

    public function show($id)
    {
        $brand = CarBrand::findOrFail($id);

        return CarModelResource::collection($brand->models()->with(['versions', 'engines'])->get());
    }
}
