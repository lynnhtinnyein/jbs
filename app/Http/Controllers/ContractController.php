<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $results = new Contract();

        if (isset($request->matchId)) {
            $results = $results->where('match_id', $request->matchId);
        }

        //execute
        $results = $results->get();

        return $results;
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     "serviceId" => "required",
        //     "price" => "required",
        //     "createdBy" => "required",
        //     "isFreelancerConfirmed" => "required",
        //     "isEmployerConfirmed" => "required",
        //     "deliverable" => "required"
        // ]);

        $contractId = Contract::insertGetId([
            "match_id" => $request->matchId,
            "price" => $request->price,
            "is_freelancer_confirmed" => $request->isFreelancerConfirmed,
            "is_employer_confirmed" => $request->isEmployerConfirmed,
            "deliverable" => $request->deliverable,
            "created_by" => $request->createdBy
        ]);

        return Contract::find($contractId);
    }

    /**
     * Display the specified resource.
     */
    public function show(Contract $contract)
    {
        return $contract;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contract $contract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contract $contract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contract $contract)
    {
        //
    }
}
