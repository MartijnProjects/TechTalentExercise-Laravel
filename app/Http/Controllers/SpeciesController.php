<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Species;

class SpeciesController extends Controller
{
    public function species()
    {
        $response = Http::get('https://swapi.py4e.com/api/species/');
        $jsonData = $response->json();

        dd($jsonData);
    }
}
