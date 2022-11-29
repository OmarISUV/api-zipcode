<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Zipcode;
use Illuminate\Http\Request;

class ZipcodeController extends Controller
{
    /**
     * Find location by zipcode.
     *
     * @return 
     */
    public function getLocation($zipcode)
    {
        //
        $location = Zipcode::where('zip_code', $zipcode)->with('settlements')->first();

        $settlements = collect([]);

        foreach($location->settlements as $settlement){
            unset($settlement->zip_code);   
            $settlement->settlement_type = (object)[
                "name" => $settlement->settlement_type_name
            ];
            unset($settlement->settlement_type_name); 
        }

        $response = (object)[
            "zip_code" => $location->zip_code,
            "locality" => $location->locality,
            "federal_entity" => [
                "key" => $location->federal_entity_key,
                "name" => $location->federal_entity_name,
                "code" => empty($location->federal_entity_code) ? Null:$location->federal_entity_code,
            ],
            "settlements" => $location->settlements,
            "municipality" => [
                "key" => $location->municipality_key,
                "name" => $location->municipality_name,
            ],
        ];
    
        return $response;
    }

   
}
