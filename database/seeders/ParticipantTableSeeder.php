<?php

namespace Database\Seeders;

use App\Models\Participant;
use Illuminate\Database\Seeder;

class ParticipantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Participant;
        $user::updateOrCreate([
            'number'      => '806938199783702',
            'name'      => 'Rido Saputra',
            'doorprize'     => '1',
            'email'     => 'example@gmail.com',
            'url'     => 'http://127.0.0.1:8000/absent/329401931735696',
        ]);
        $user::updateOrCreate([
            'number'      => '627263517282637',
            'name'      => 'Ivan Gunawan',
            'doorprize'     => '2',
            'email'     => 'example@gmail.com',
            'url'     => 'http://127.0.0.1:8000/absent/329401931735696',
        ]);
        $user::updateOrCreate([
            'number'      => '888912384712932',
            'name'      => 'Satria Girinanda',
            'doorprize'     => '3',
            'email'     => 'example@gmail.com',
            'url'     => 'http://127.0.0.1:8000/absent/329401931735696',
        ]);
        $user::updateOrCreate([
            'number'      => '771123761536562',
            'name'      => 'Yola Khanza',
            'doorprize'     => '4',
            'email'     => 'example@gmail.com',
            'url'     => 'http://127.0.0.1:8000/absent/329401931735696',
        ]);
        $user::updateOrCreate([
            'number'      => '662277333612365',
            'name'      => 'Feby Puspitasari',
            'doorprize'     => '5',
            'email'     => 'example@gmail.com',
            'url'     => 'http://127.0.0.1:8000/absent/329401931735696',
        ]);
        $user::updateOrCreate([
            'number'      => '726351627381726',
            'name'      => 'Jarwo Jombang',
            'doorprize'     => '6',
            'email'     => 'example@gmail.com',
            'url'     => 'http://127.0.0.1:8000/absent/329401931735696',
        ]);
        $user::updateOrCreate([
            'number'      => '2736172637126354',
            'name'      => 'Harmika Julia',
            'doorprize'     => null,
            'email'     => 'example@gmail.com',
            'url'     => 'http://127.0.0.1:8000/absent/329401931735696',
        ]);
        $user::updateOrCreate([
            'number'      => '6235352617263544',
            'name'      => 'Rio Prayoga',
            'doorprize'     => null,
            'email'     => 'example@gmail.com',
            'url'     => 'http://127.0.0.1:8000/absent/329401931735696',
        ]);
        $user::updateOrCreate([
            'number'      => '930837363728392',
            'name'      => 'Indri Putri',
            'doorprize'     => null,
            'email'     => 'example@gmail.com',
            'url'     => 'http://127.0.0.1:8000/absent/329401931735696',
        ]);
        $user::updateOrCreate([
            'number'      => '7261728737616255',
            'name'      => 'Maria Sn',
            'doorprize'     => null,
            'email'     => 'example@gmail.com',
            'url'     => 'http://127.0.0.1:8000/absent/329401931735696',
        ]);
        $user::updateOrCreate([
            'number'      => '882736178298765',
            'name'      => 'Bowo Gunawan',
            'doorprize'     => null,
            'email'     => 'example@gmail.com',
            'url'     => 'http://127.0.0.1:8000/absent/329401931735696',
        ]);
        $user::updateOrCreate([
            'number'      => '772635162762636',
            'name'      => 'Kristina Putri',
            'doorprize'     => null,
            'email'     => 'example@gmail.com',
            'url'     => 'http://127.0.0.1:8000/absent/329401931735696',
        ]);
        $user::updateOrCreate([
            'number'      => '887726544345667',
            'name'      => 'Setya Novitasari',
            'doorprize'     => null,
            'email'     => 'example@gmail.com',
            'url'     => 'http://127.0.0.1:8000/absent/329401931735696',
        ]);
        $user::updateOrCreate([
            'number'      => '099982019287622',
            'name'      => 'Rahmah Khairina',
            'doorprize'     => null,
            'email'     => 'example@gmail.com',
            'url'     => 'http://127.0.0.1:8000/absent/329401931735696',
        ]);
        $user::updateOrCreate([
            'number'      => '772635162536278',
            'name'      => 'M Siddiq',
            'doorprize'     => null,
            'email'     => 'example@gmail.com',
            'url'     => 'http://127.0.0.1:8000/absent/329401931735696',
        ]);
        $user::updateOrCreate([
            'number'      => '928382819283828',
            'name'      => 'Frinanda Ajitama',
            'doorprize'     => null,
            'email'     => 'example@gmail.com',
            'url'     => 'http://127.0.0.1:8000/absent/329401931735696',
        ]);
        $user::updateOrCreate([
            'number'      => '7712377237771233',
            'name'      => 'Olivia Elisa',
            'doorprize'     => null,
            'email'     => 'example@gmail.com',
            'url'     => 'http://127.0.0.1:8000/absent/329401931735696',
        ]);
    }
}
