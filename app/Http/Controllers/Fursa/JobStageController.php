<?php

namespace App\Http\Controllers\Fursa;

use App\Http\Controllers\Controller;
use App\Models\Fursa\job;
use App\Services\Fursa\JobStageService;
use Illuminate\Http\Request;
use App\Models\Fursa\JobStage;

class JobStageController extends Controller
{

    public function __construct(private JobStageService $jobStageService)
    {
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $JobStage = JobStage::all();
        
        
        return view('job.jobStage.index',compact('JobStage'));
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
        if ($jobId = $this->jobStageService->store($request)) {
            return view('job.jobApplication',compact('jobId'));
        }else{
            return redirect()->back()->withErrors('لم تتم عميله تخزين البيانات');
        }
        return $jobId;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
     
        $jobStage = JobStage::findOrFail($id);
        return view('job.jobStage.view',compact('jobStage'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $jobstage= $this->jobStageService->getById($id);
        return view('job.jobStage.update',compact('jobstage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        if (!$this->jobStageService->update($request,$id)) {
            return redirect()->route('stage.index');
        }
        return redirect()->back()->withErrors('لم تتم عمليه التعديل');

    }

    public function delete($id){
        $jobstage= $this->jobStageService->getById($id);
        return view('job.jobStage.delete',compact('jobstage'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        if (!$this->jobStageService->destory($id)) {
            return redirect()->route('stage.index');
            }
            return redirect()->back()->withErrors('لم تتم عمليه الحذف');

    }
}
