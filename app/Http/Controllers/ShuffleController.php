<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use Illuminate\Support\Facades\DB;

class ShuffleController extends Controller
{
    public function index()
    {
        return view('shuffle.index');
    }
}
