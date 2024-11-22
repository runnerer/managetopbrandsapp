<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Brand;

class TopListController extends Controller
{
    public function index(Request $request)
    {
        $countryCode = $request->header('CF-IPCountry', 'default');

        if ($countryCode === 'default') {
            $brands = Brand::all();

            return view('toplist_brands', compact('brands'));
        }

        $brands = Brand::where('country', $countryCode)->get();

        return view('toplist_brands', compact('brands'));
    }
}
