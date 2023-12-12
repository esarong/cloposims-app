<?php

namespace App\Http\Controllers;

use App\Http\Resources\InventoryUnitCollection;
use App\Http\Resources\InventoryUnitResource;
use App\Models\InventoryUnit;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class InventoryUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return new InventoryUnitCollection(InventoryUnit::all());

        return response()->json(new InventoryUnitCollection(InventoryUnit::all()),
    status:Response::HTTP_OK);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(InventoryUnit $inventoryUnit)
    {
        return new InventoryUnitResource($inventoryUnit);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InventoryUnit $inventoryUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryUnit $inventoryUnit)
    {
        $inventoryUnit->delete();

        return response()->json(data:null, status:Response::HTTP_NO_CONTENT);
    }
}
