<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMilestoneRequest;
use App\Http\Requests\UpdateMilestoneRequest;
use App\Models\Milestone;

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
    public function store(StoreMilestoneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Milestone $milestone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMilestoneRequest $request, Milestone $milestone)
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
