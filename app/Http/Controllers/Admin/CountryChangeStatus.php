<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
class CountryChangeStatus extends Controller
{
    public function changeStatus(string $id)
    {

        $country = Country::findOrFail($id);
        $country->update([
            'status' => 1,
        ]);

        $states = State::where('country_id', $country->id)->get(['id','status']);
        foreach ($states as $key => $value) {
            $value->update([
                'status' => 1,
            ]);
        }

        foreach ($states as $key => $value) {
            $cities = City::where('state_id', $value->id)->get(['id','status']);
            foreach ($cities as $key => $city) {
                $city->update([
                    'status' => 1,
                ]);
            }
        }

            return redirect('countrys');

    }

}

