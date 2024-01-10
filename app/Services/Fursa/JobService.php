<?php 
namespace App\Services\Fursa;

use Illuminate\Http\Request;
use App\Models\Fursa\job;
class JobService{

    public function store(Request $request){
       $job= job::create(
            [
                'Title' => $request->Title,
                'jobDescription' => $request->jobDescription,
                'jobType'=> $request->jobType,
                'Location'=> $request->Location,
                'depertments_id'=> $request->depertments_id
            ]
        );
        return $job->id;
    }

    
}