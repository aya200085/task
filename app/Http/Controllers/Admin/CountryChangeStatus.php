<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Events\ChangeCountryStatus;
use App\Http\Controllers\Controller;

class CountryChangeStatus extends Controller
{
    public function changeStatus(string $id, Request $request )
    {

        $country = Country::findOrFail($id);
        $country->update([
            'status' => $request->input('status'),
        ]);
        event(new ChangeCountryStatus($country));
        // $states = State::where('country_id', $country->id)->get(['id','status']);
        // foreach ($states as $key => $value) {
        //     $value->update([
        //         'status' => $request->input('status'),
        //     ]);
        // }

        // foreach ($states as $key => $value) {
        //     $cities = City::where('state_id', $value->id)->get(['id','status']);
        //     foreach ($cities as $key => $city) {
        //         $city->update([
        //             'status' => $request->input('status'),
        //         ]);
        //     }
        // }

            // return redirect('countrys');

    }

}

