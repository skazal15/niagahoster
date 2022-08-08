<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Package;

class PackageController extends Controller
{
    public function index(){
        $package = Package::all();
        return view('niaga',['niaga'=>$package]);
    }
}
