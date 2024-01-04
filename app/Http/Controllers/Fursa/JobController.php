<?php

namespace App\Http\Controllers\Fursa;

use App\Http\Controllers\Controller;
use App\Models\Fursa\Depertment;
use Illuminate\Http\Request;
use App\Models\Fursa\job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jobs = job::all();
        return view('job.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $jobs = job::all();
        $depertment = Depertment::all();
        return view('job.add',compact('jobs','depertment'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        job::create(
            [
                'Title' => $request->Title,
                'jobDescription' => $request->jobDescription,
                'jobType'=> $request->jobType,
                'Location'=> $request->Location,
                'depertments_id'=> $request->depertments_id
            ]
        );
 
    return redirect()->route('companiesJob.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $job = job::findOrFail($id);
        return view('job.view',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $jobs = job::findOrFail($id);
        $depertments = Depertment::all();
        return view('job.edit',compact('jobs','depertments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $job = job::findOrFail($id);
        $job->update(
            [
                'Title' => $request->Title,
                'jobDescription' => $request->jobDescription,
                'jobType'=> $request->jobType,
                'Location'=> $request->Location,
                'depertments_id'=> $request->depertments_id
            ]
        );
        return redirect()->route('companiesJob.index');
    }

    public function delete(string $id){
        $job = job::find($id);
        return view('job.delete', compact('job'));

     }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $job = job::findOrFail($id);
        $job->delete();
        return redirect()->route('companiesJob.index');
    }
}
