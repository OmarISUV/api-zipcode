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

        
    
        return $location;
    }

   
}
