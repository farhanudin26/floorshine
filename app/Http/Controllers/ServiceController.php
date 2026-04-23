<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function marble()
    {
        return view('services.marble');
    }

    public function granite()
    {
        return view('services.granite');
    }

    public function homogeneous()
    {
        return view('services.homogeneous');
    }

    public function parquet()
    {
        return view('services.parquet');
    }

    public function limestone()
    {
        return view('services.limestone');
    }

    public function outdoor()
    {
        return view('services.outdoor');
    }

    public function porcelain()
    {
        return view('services.porcelain');
    }

    public function terrazzo()
    {
        return view('services.terrazzo');
    }
}
