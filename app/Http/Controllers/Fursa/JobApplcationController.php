<?php

namespace App\Http\Controllers\Fursa;

use App\Http\Controllers\Controller;
use App\Services\Fursa\JobApplcationService;
use Illuminate\Http\Request;

class JobApplcationController extends Controller
{
    public function __construct(private JobApplcationService $jobApplcationService)
    {
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if (!$this->jobApplcationService->store($request)) {
            return redirect()->route('companiesJob.index');
        }
        
        return redirect()->back()->withErrors('لم تتم عمليه الحفظ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
