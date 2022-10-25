<?php

namespace App\Imports;

use App\Models\Participant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ParticipantsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Participant([
            "number" => $row['number'],
            "name" => $row['name'],
            "email" => $row['email'],
            "company" => $row['company'],
            "doorprize" => $row['doorprize'],
            "url" => 12345
        ]);
    }
}
