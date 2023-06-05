<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\updateCountry;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use App\DataTables\CountryDataTable;
class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CountryDataTable $country)
    {
        return $country->render('admin.country.index',['title'=>'Country Control']);
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
        $country=Country::findOrFail($id);
        return view ('admin.country.edit',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateCountry $request, string $id)
    {
        $country=Country::findOrFail($id)->update([
                'name'=>$request->name,
            ]);
        return redirect('countrys');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,$id )
    {
        Country::destroy($request->id);
        return redirect('countrys');
    }








}
