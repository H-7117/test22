<?php

namespace App\Http\Controllers\Fursa;

use App\Http\Controllers\Controller;
use App\Services\Fursa\JobApplcationService;
use Illuminate\Http\Request;
use App\Models\Fursa\JobApplcation;

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
        $jobApplcation =JobApplcation::all();
        return view('job.jobApplication.index',compact('jobApplcation'));
        
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
        $jobApplcation =JobApplcation::findOrFail($id);
        return view('job.jobApplication.view',compact('jobApplcation'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $jobApplcation = $this->jobApplcationService->getById($id);
        return view('job.jobApplication.update',compact('jobApplcation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        if (!$this->jobApplcationService->update($request,$id)) {
            return redirect()->route('jobApplication.index');
        }
        return redirect()->back()->withErrors('لم تتم عمليه التعديل');
    }

        public function delete($id){
            $jobApplcation = $this->jobApplcationService->getById($id);
            return view('job.jobApplication.delete',compact('jobApplcation'));
        }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        if (!$this->jobApplcationService->destory($id)) {
            return redirect()->route('jobApplication.index');
            }
            return redirect()->back()->withErrors('لم تتم عمليه الحذف');
    }
}
