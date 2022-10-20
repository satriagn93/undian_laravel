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

    public function getabsent()
    {
        $dataabsen = DB::table('absents as abs')
            ->select('abs.number')
            ->orderBy('abs.id', 'DESC')
            ->get();
        $response = json_decode($dataabsen, true);
        return response()->json($response);
        // dd($ikan);
    }
}
