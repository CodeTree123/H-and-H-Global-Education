<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mission;

class WhyUsController extends Controller
{
    public function index()
    {
        $missionss = Mission::all();
        return view('admin.hhAdmin.about.index',compact('missionss')); 
    }


}
