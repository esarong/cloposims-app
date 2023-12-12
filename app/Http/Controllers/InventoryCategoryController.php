<?php

namespace App\Http\Controllers;

use App\Http\Resources\InventoryCategoryCollection;
use App\Http\Resources\InventoryCategoryResource;
use App\Models\InventoryCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class InventoryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return new InventoryCategoryCollection(InventoryCategory::all());

        return response()->json(new InventoryCategoryCollection(InventoryCategory::all()),
    status:Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inventoryCategory = InventoryCategory::create($request->only([
            'category_name','description'  
        ]));
    
        return new InventoryCategoryResource($inventoryCategory);
    }

    /**
     * Display the specified resource.
     */
    public function show(InventoryCategory $inventoryCategory)
    {
        return new InventoryCategoryResource($inventoryCategory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InventoryCategory $inventoryCategory)
    {
        $inventoryCategory->update($request->only([
            'category_name','description' 
        ]));
      
      return new InventoryCategoryResource($inventoryCategory);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryCategory $inventoryCategory)
    {
        $inventoryCategory->delete();

        return response()->json(data:null, status:Response::HTTP_NO_CONTENT);
    }
}
