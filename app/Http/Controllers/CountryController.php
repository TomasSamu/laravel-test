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

    public function detail()
    {
$country_code = 'POL';

        $query = "
        SELECT *
        FROM `country`
        WHERE `Code` = ?
        LIMIT 1
        ";
        $czechia = DB::selectOne($query,[$country_code]);
     /*    dd($czechia); */

        $query = "
        SELECT *
        FROM `city`
        WHERE `CountryCode` = ?
        ";
        $cities = DB::select($query, [$country_code]);

        $query = "
        SELECT *
        FROM `countrylanguage`
        WHERE `CountryCode` = ?
        ORDER BY `Percentage` DESC
        ";
        $languages = DB::select($query, [$country_code]);

        $detail_view = view('countries/czechia', [
            'czechia' => $czechia,
            'cities' => $cities,
            'languages' => $languages
        ]);

        return $detail_view;
    }


}
