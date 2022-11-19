<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
class PagesController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function about()
    {
        $name = 'david';
        $names = ['david1', 'ronaldo', 'anna'];
        return view('about', ['name' => $name, 'names' => $names]);
    }
    //
}
