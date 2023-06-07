<?php

namespace App\Listeners;

use App\Events\ChangeCountryStatus;
use App\Models\State;

class ChangeStateAndCountryStatus
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ChangeCountryStatus $event): void
    {
        $states = State::where('country_id', $event->country->id)->get(['id', 'status']);
        foreach ($states as $key => $value) {
            $value->update([
                'status' => $request->input('status'),
            ]);
        }

        foreach ($states as $key => $value) {
            $cities = City::where('state_id', $value->id)->get(['id', 'status']);
            foreach ($cities as $key => $city) {
                $city->update([
                    'status' => $request->input('status'),
                ]);
            }
        }

    }
}
