<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view ('web.projects.index');
    }
    public function neurosalud()
    {
        return view ('web.projects.neurosalud');
    }
    public function salome()
    {
        return view ('web.projects.corporacion-salome');
    }
    public function loyal()
    {
        return view ('web.projects.corporation-loyal');
    }
    public function castro()
    {
        return view ('web.projects.grupo-castro');
    }
    public function importadora()
    {
        return view ('web.projects.importadora-quimica');
    }
    public function lilabs()
    {
        return view ('web.projects.laboratorios-lilabs');
    }
    public function satelital()
    {
        return view ('web.projects.satelital-telecomunicaciones');
    }
    public function latirperu()
    {
        return view ('web.projects.latirperu');
    }
    public function nbjconstructora()
    {
        return view ('web.projects.nbjconstructora');
    }
}
