<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diagnosis;

class DiagnosaController extends Controller
{
    function index() {
        $diagnosis = Diagnosis::all();

        return view('diag.diagnosis', compact('diagnosis'));
    }
}
