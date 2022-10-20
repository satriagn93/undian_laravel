<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Participant;
use Illuminate\Support\Facades\DB;

class ParticipantController extends Controller
{
    public function index()
    {
        $dataparticipant = DB::table('participants as prt')
            ->select('prt.number', 'prt.name',  'prt.email',  'prt.url', 'prt.created_at', 'prt.updated_at')
            ->orderBy('prt.id', 'DESC')
            ->get();
        return view('participant.index', compact('dataparticipant'));
    }

    public function store(Request $request)
    {
        $numberrand = rand(10, 1000000000000000);
        $url = "http://127.0.0.1:8000/absent/" . +$numberrand;
        $saveabsent = new Participant;
        $saveabsent->number = $numberrand;
        $saveabsent->name = $request->name;
        $saveabsent->email = $request->email;
        $saveabsent->url = $url;
        $saveabsent->save();
        return redirect('/participant');
    }
}
