<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionItemCollection;
use App\Http\Resources\TransactionItemResource;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TransactionItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return new TransactionItemCollection(TransactionItem::all());

        return response()->json(new TransactionItemCollection(TransactionItem::all()),
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
    public function show(TransactionItem $transactionItem)
    {
        return new TransactionItemResource($transactionItem);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TransactionItem $transactionItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransactionItem $transactionItem)
    {
        $transactionItem->delete();

        return response()->json(data:null, status:Response::HTTP_NO_CONTENT);
    }
}
