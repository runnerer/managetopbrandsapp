<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Brand;
use Illuminate\Http\JsonResponse;

class ManageBrandController extends Controller
{
    /**
     * List all brands.
     */
    public function index(): JsonResponse         
    {
        $brands = Brand::all();

        return response()->json($brands, 200);
    }

    /**
     * Create a new brand.
     */
    public function store(CreateBrandRequest $request): JsonResponse
    {
        $brand = Brand::create($request->validated());

        return response()->json($brand, 201);
    }

    /**
     * Update a brand.
     */
    public function update(UpdateBrandRequest $request, Brand $brand): JsonResponse
    {
        $brand->update($request->validated());

        return response()->json($brand, 200);
    }

    /**
     * Delete a brand.
     */
    public function destroy(Brand $brand): JsonResponse
    {
        $brand->delete();

        return response()->json(['message' => 'Brand deleted successfully'], 200);
    }
}
