<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Absent;
use Illuminate\Support\Facades\DB;

class AbsentController extends Controller
{
    public function store(Request $request, $number)
    {
        $saveabsent = new Absent;
        $saveabsent->number = $number;
        $saveabsent->priority = '0';
        $saveabsent->save();
    }
}
