<?php

namespace App\Http\Controllers\Admin;
use App\DataTables\StateDataTable;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(StateDataTable $state)
    {
        return $state->render('admin.state.index',['title'=>'State Control']);
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
        $state=State::findOrFail($id);
        return view ('admin.state.edit',compact('state'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $state=State::findOrFail($id)->update([
            'name'=>$request->name,
        ]);
        return redirect('states');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,$id)
    {
        State::destroy($request->id);
        return redirect('states');
    }


    public function changeStatus(string $id,Request $request)
    {

        $state = State::findOrFail($id);
        $state->update([
            'status' => $request->input('status'),
        ]);

        $cities = City::where('state_id', $state->id)->get(['id','status']);
        foreach ($cities as $key => $value) {
            $value->update([
                'status' => $request->input('status'),
            ]);

        }

        return redirect('states');

    }























}
