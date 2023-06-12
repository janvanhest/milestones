<?php

namespace App\Http\Controllers;

use App\Models\Milestone;
use App\Models\MilestoneType;
use Illuminate\Http\Request;

class MilestonesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return not implemented error
        return response()->json([
            'message' => 'Not implemented',
        ], 501);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return not implemented error
        return response()->json([
            'message' => 'Not implemented',
        ], 501);
    }

    /**
     * Display the specified resource.
     */
    public function show(milestones $milestones)
    {
        // return not implemented error
        return response()->json([
            'message' => 'Not implemented',
        ], 501);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, milestones $milestones)
    {
        // return not implemented error
        return response()->json([
            'message' => 'Not implemented',
        ], 501);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(milestones $milestones)
    {
        // return not implemented error
        return response()->json([
            'message' => 'Not implemented',
        ], 501);
    }
}
