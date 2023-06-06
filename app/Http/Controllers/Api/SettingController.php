<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\ApiResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\SettingRepositoryInterface;

class SettingController extends Controller
{
    use ApiResponseTrait;

    public function allCountries(SettingRepositoryInterface $SettingRepositoryInterface)
    {
        $countries = $SettingRepositoryInterface->allCountries();

        return $this->apiResponse($countries, 'Get data Successfully', 200);

    }

    public function allStates(SettingRepositoryInterface $SettingRepositoryInterface)
    {
        $states = $SettingRepositoryInterface->allStates();

        return $this->apiResponse($states, 'Get data Successfully', 200);

    }



    public function allCities(SettingRepositoryInterface $SettingRepositoryInterface)
    {
        $cities = $SettingRepositoryInterface->allCities();

        return $this->apiResponse($cities, 'Get data Successfully', 200);

    }



















}
