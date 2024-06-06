<?php

namespace App\Http\Controllers;

use App\Models\blood_group;
use App\Models\donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index()
    {
        return view('Donor');
    }
    public function create(Request $request)
    {
        $fill = new blood_group();
        $fill->create($request);
    }
}
