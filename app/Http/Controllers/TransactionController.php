<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionCollection;
use App\Http\Resources\TransactionResource;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return new TransactionCollection(Transaction::all());

        return response()->json(new TransactionCollection(Transaction::all()),
    status:Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transaction = Transaction::create($request->only([
            'CustomerName', 'TransactionDate', 'TransactionAmount', 'TransactionType', 'TransactionTaxAmount', 
       ]));
   
       return new TransactionResource($transaction);
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        return new TransactionResource($transaction);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        $transaction->update($request->only([
            'CustomerName', 'TransactionDate', 'TransactionAmount', 'TransactionType', 'TransactionTaxAmount', 
       ]));
       
       return new TransactionResource($transaction);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return response()->json(data:null, status:Response::HTTP_NO_CONTENT);
    }
}
