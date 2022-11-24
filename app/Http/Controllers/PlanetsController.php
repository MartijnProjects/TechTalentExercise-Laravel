<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Planets;

class PlanetsController extends Controller
{
    public function planets()
    {
        $response = Http::get('https://swapi.py4e.com/api/planets/');
        $jsonData = $response->json();

        dd($jsonData);
    }
}
