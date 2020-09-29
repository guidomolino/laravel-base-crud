<?php

namespace App\Http\Controllers;

use App\Configurazione;
use Illuminate\Http\Request;

class ConfigurazioneController extends Controller
{
  public function index(){
    $configurazioni = Configurazione::all();
    return view('configurazioni', compact('configurazioni'));
  }
}
