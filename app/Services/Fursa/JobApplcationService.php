<?php 
namespace App\Services\Fursa;

use Illuminate\Http\Request;
use App\Models\Fursa\JobApplcation;

class JobApplcationService{

    public function store(Request $request){
        $jobApplcation = JobApplcation::create([
            'jobs_id'=>$request->jobId ?? null,
            'name'=>isset($request->name) ? true :false,
            'phone'=>isset($request->phone) ? true :false,
            'personalEmail'=>isset($request->personalEmail)? true :false,
            'links'=>isset($request->links) ? true :false,
            'cv'=>isset($request->cv)? true :false
        ]);

    }

    public function update(){
        
    }
}