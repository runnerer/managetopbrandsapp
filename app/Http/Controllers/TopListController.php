<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Brand;

class TopListController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $countryCode = $request->header('CF-IPCountry', 'default');

        if ($countryCode === 'default') {
            $brands = Brand::all();

            return response()->json($brands, 200);
        }

        $brands = Brand::where('country', $countryCode)->get();

        return response()->json($brands, 200);
    }
}
