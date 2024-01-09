<?php
namespace App\Services\Fursa;

use Illuminate\Http\Request;
use App\Models\Fursa\JobStage;
class JobStageService{
    public function store(Request $request){
        $jobStage = JobStage::create([
            'jobs_id'=>$request->jobId,
            'name'=>$request->name,
            'round'=>$request->round
        ]);
        return $request->jobId;
    }
}