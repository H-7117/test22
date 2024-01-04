<?php

namespace App\Http\Controllers\Fursa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fursa\Depertment;
use App\Models\Fursa\Company;


class DepertmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $depertments = Depertment::all();
        return view('depertment.index',compact('depertments'));
    }
    // <h1>{{ $company->name }}</h1>

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $Company = Company::all();
        return view('depertment.create',compact('Company'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        depertment::create(
            [
                'Name' => $request->Name,
                'Description' => $request->Description,
                'companies_id'=> $request->companies_id
            ]
        );
 
    return redirect()->route('depertment.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $depertment = depertment::findOrFail($id);
        return view('depertment.view',compact('depertment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $depertment = depertment::findOrFail($id);
        return view('depertment.edit',compact('depertment'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $depertment = depertment::findOrFail($id);
        $depertment->update(
            [
                'Name' => $request->Name,
                'Description' => $request->Description
            ]
        );
        return redirect()->route('depertment.index');
    }

    /**
     * Remove the specified resource from storage.
     */

     public function delete(string $id){
        $depertment = depertment::find($id);
        return view('depertment.delete', compact('depertment'));

     }
    public function destroy(string $id)
    {
        //
        $depertment = depertment::findOrFail($id);
        $depertment->delete();
        return redirect()->route('depertment.index');
    }
}
