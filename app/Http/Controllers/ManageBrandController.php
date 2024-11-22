<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Brand;
use Illuminate\Http\RedirectResponse;

class ManageBrandController extends Controller
{
    /**
     * List all brands.
     */
    public function index()     
    {
        $brands = Brand::all();

        return view('manage_brands', compact('brands'));
    }

    /**
     * Create a new brand.
     */
    public function store(CreateBrandRequest $request)
    {
        Brand::create($request->validated());

        return redirect()->route('brands.index')->with('success', 'Brand added successfully.');
    }

    /**
     * Update a brand.
     */
    public function update(string $brandId, UpdateBrandRequest $request): RedirectResponse
    {
        Brand::find($brandId)->update($request->validated());

        return redirect()->route('brands.index')->with('success', 'Brand updated successfully.');
    }

    /**
     * Delete a brand.
     */
    public function destroy(string $brandId): RedirectResponse
    {
        Brand::destroy($brandId);

        return redirect()->route('brands.index')->with('success', 'Brand deleted successfully.');
    }
}
