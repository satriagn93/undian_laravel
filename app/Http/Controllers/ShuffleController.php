<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Doorprize;
use Illuminate\Support\Facades\DB;

class ShuffleController extends Controller
{
    public function index()
    {
        $doorprize1 = Doorprize::where('doorprize', '1')->first();
        $doorprize2 = Doorprize::where('doorprize', '2')->first();
        $doorprize3 = Doorprize::where('doorprize', '3')->first();
        $doorprize4 = Doorprize::where('doorprize', '4')->first();
        $doorprize5 = Doorprize::where('doorprize', '5')->first();
        $doorprize6 = Doorprize::where('doorprize', '6')->first();
        $doorprize7 = Doorprize::where('doorprize', '7')->first();
        $doorprize8 = Doorprize::where('doorprize', '8')->first();
        $doorprize9 = Doorprize::where('doorprize', '9')->first();
        $doorprize10 = Doorprize::where('doorprize', '10')->first();
        $doorprize11 = Doorprize::where('doorprize', '11')->first();
        $doorprize12 = Doorprize::where('doorprize', '12')->first();
        $doorprize13 = Doorprize::where('doorprize', '13')->first();
        $doorprize14 = Doorprize::where('doorprize', '14')->first();
        $doorprize15 = Doorprize::where('doorprize', '15')->first();
        $doorprize16 = Doorprize::where('doorprize', '16')->first();

        return view('shuffle.index', compact(
            'doorprize1',
            'doorprize2',
            'doorprize3',
            'doorprize4',
            'doorprize5',
            'doorprize6',
            'doorprize7',
            'doorprize8',
            'doorprize9',
            'doorprize10',
            'doorprize12',
            'doorprize13',
            'doorprize14',
            'doorprize15',
            'doorprize16'
        ));
    }

    public function store(Request $request)
    {
        $doorprize = new Doorprize;
        $doorprize->number          = $request->number_model;
        $doorprize->name           = $request->name_model;
        $doorprize->doorprize        = '1';
        $doorprize->save();
        return redirect('/shuffle')->with('message', 'Departments updated.');
    }
}
