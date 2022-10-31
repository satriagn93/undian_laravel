<?php

namespace App\Http\Controllers;

use App\Imports\ParticipantsImport;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Participant;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Doorprize;

class ParticipantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $dataparticipant = DB::table('participants as prt')
            ->select('prt.number', 'prt.name',  'prt.email',  'prt.company',  'prt.url', 'prt.created_at', 'prt.updated_at')
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
        Alert::success('Success', 'Data berhasil disimpan');
        return redirect('/participant');
    }

    public function uploadParticipants(Request $request)
    {
        Participant::truncate();
        Doorprize::truncate();
        Excel::import(new ParticipantsImport, $request->file);

        Alert::success('Success', 'Data berhasil disimpan');
        return redirect('/participant');
    }

    public function getparticipant()
    {
        $data = DB::table('participants')
            ->select('participants.number')
            ->orderBy('participants.id', 'DESC')
            ->get();
        $number = [];
        foreach ($data as $value) {
            $number[] .= $value->number;
        };
        return response()->json($number);
    }

    public function nameparticipant()
    {
        $data = DB::table('participants')
            ->select('participants.name')
            ->orderBy('participants.id', 'DESC')
            ->get();
        $name = [];
        foreach ($data as $value) {
            $name[] .= $value->name;
        };
        return response()->json($name);
    }
}
