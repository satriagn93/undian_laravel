<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Doorprize;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ShuffleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        $doorprize17 = Doorprize::where('doorprize', '17')->first();
        $doorprize18 = Doorprize::where('doorprize', '18')->first();
        $doorprize19 = Doorprize::where('doorprize', '19')->first();

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
            'doorprize11',
            'doorprize12',
            'doorprize13',
            'doorprize14',
            'doorprize15',
            'doorprize16',
            'doorprize17',
            'doorprize18',
            'doorprize19'
        ));
    }

    public function store(Request $request)
    {
        $doorprize = new Doorprize;
        $doorprize->number          = $request->number_model;
        $doorprize->name           = $request->name_model;
        $doorprize->doorprize        = $request->doorprize_model;
        $doorprize->email        = $request->email_model;
        $doorprize->company        = $request->company_model;
        $doorprize->save();

        $company = Participant::where('number', $request->number_model)->first();
        $company->delete();

        Alert::success('Success', 'Data Pemenang berhasil disimpan');
        return redirect('/shuffle');
    }

    public function cancel($id)
    {
        $participant = Participant::where('number', $id)->first();
        $participant->delete();
        return response()->json([
            'success' => 'Cancel data'
        ], 200);
    }

    public function participantbyid($id)
    {
        $checkparticipant = Participant::where('doorprize', $id)->first();

        if ($checkparticipant == !null) {
            $participant = Participant::where('doorprize', $id)->first();
        } else {
            $participant = Participant::where('doorprize', null)
                ->inRandomOrder()
                ->limit(1)
                ->first();
        }
        return response()->json([
            'error' => false,
            'detail' => $participant
        ], 200);
    }

    public function alreadywin($id)
    {
        $doorprize = Doorprize::where('doorprize', $id)->first();
        return response()->json([
            'error' => false,
            'detail' => $doorprize
        ], 200);
    }
}
