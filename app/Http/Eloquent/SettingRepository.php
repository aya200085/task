<?php

namespace App\Http\Eloquent;

use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Http\Resources\CityResource;
use App\Http\Resources\StateResource;
use App\Http\Resources\CountryResource;
use App\Http\Interfaces\SettingRepositoryInterface;


class SettingRepository implements SettingRepositoryInterface{




public function allCountries() {
    $countries = Country::paginate(10);
    return [
        'data' => CountryResource::collection($countries),
        'pagination' => [
            'total' => $countries->total(),
            'count' => $countries->count(),
            'per_page' => $countries->perPage(),
            'current_page' => $countries->currentPage(),
            'total_pages' => $countries->lastPage()
        ]
    ];
}

public function allStates(){
$states = State::paginate(10);
return [
        'data' => StateResource::collection($states),
        'pagination' => [
            'total' => $states->total(),
            'count' => $states->count(),
            'per_page' => $states->perPage(),
            'current_page' => $states->currentPage(),
            'total_pages' => $states->lastPage()
        ]
        ];
}


public function allCities(){
$city = City::paginate(10);
return [
        'data' => CityResource::collection($city),
        'pagination' => [
            'total' => $city->total(),
            'count' => $city->count(),
            'per_page' => $city->perPage(),
            'current_page' => $city->currentPage(),
            'total_pages' => $city->lastPage()
        ]
        ];





}




}







