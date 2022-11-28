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
    public function getLocation($d_codigo)
    {
        //
        $location = Zipcode::where('d_codigo', $d_codigo)->get();

        return $location;
    }

   
}
