<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Trains;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Trains::all();
        return view('guest.index', compact('trains'));
    }
}





 