<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CountryController extends Controller
{
    public function largest()
    {

        $query = "
            SELECT *
            FROM `country`
            WHERE 1
            ORDER BY `SurfaceArea` DESC
            LIMIT 10
        ";
        $countries = DB::select($query);
        $countries_view = view('countries/largest', [
            'countries' => $countries
        ]);
        return $countries_view;
    }
}
