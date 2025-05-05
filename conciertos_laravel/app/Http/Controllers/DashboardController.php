<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\Concierto;
use App\Models\Espacio;
use App\Models\Manager;

class DashboardController extends Controller
{
    public function index()
    {
        $grupos = Grupo::all();
        $conciertos = Concierto::all();
        $espacios = Espacio::all();
        $managers = Manager::all();

        return view('dashboard', compact('grupos', 'conciertos', 'espacios', 'managers'));
    }
}
