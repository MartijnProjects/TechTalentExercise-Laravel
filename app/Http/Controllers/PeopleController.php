<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\People;

class PeopleController extends Controller
{
    public function people()
    {
//        $response = Http::get('https://swapi.dev/api/people/');
        $response = Http::get('https://swapi.py4e.com/api/people/');
        $jsonData = $response->json();

        dd($jsonData);
    }
}
