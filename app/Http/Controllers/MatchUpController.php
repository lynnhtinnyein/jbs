<?php

namespace App\Http\Controllers;

use App\Models\MatchUp;
use Illuminate\Http\Request;

class MatchUpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MatchUp::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "service_id" => "required",
            "freelancer_id" => "required",
            "employer_id" => "required",
            "status" => "required"
        ]);

        $matches = MatchUp::where('service_id', $request->service_id)
        ->where('freelancer_id', $request->freelancer_id)
        ->where('employer_id', $request->employer_id)
        ->get();

        if(count($matches) === 0){
            $id = MatchUp::insertGetId([
                "service_id" => $request->service_id,
                "freelancer_id" => $request->freelancer_id,
                "employer_id" => $request->employer_id,
                "status" => $request->status
            ]);

            return MatchUp::find($id);
        }

        return $matches[0];
    }

    /**
     * Display the specified resource.
     */
    public function show(MatchUp $matchUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MatchUp $matchUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MatchUp $matchUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MatchUp $matchUp)
    {
        //
    }
}
