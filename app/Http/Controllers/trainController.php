<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\train;
use Carbon\Carbon;


class trainController extends Controller
{
    public function index() {
        $currentTime = Carbon::now();
        $datecurrent = $currentTime->toDateString();
        $trains = train::where('data', '>', $datecurrent)->get();
        return view('home', compact('trains'));
    }
}
