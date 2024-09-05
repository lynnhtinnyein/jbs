<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Milestone;
use Illuminate\Http\Request;

class MilestoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $milestoneId = Milestone::insertGetId([
            "contract_id" => $request->contractId,
            "name" => $request->name,
            "due_date" => now(),
            "price" => $request->price
        ]);

        foreach ($request->tasks as $task) {
            Task::create([
                "milestone_id" => $milestoneId,
                "name" => $task['name']
            ]);
        }

        return Milestone::find($milestoneId);
    }

    /**
     * Display the specified resource.
     */
    public function show(Milestone $milestone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Milestone $milestone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Milestone $milestone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Milestone $milestone)
    {
        //
    }
}
