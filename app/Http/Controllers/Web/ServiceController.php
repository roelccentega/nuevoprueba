<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('web.services.index');
    }
    public function web()
    {
        return view('web.services.desarrollo-web');
    }
    public function sistemas()
    {
        return view('web.services.desarrollo-de-sistemas');
    }
    public function seo()
    {
        return view('web.services.posicionamiento-seo');
    }
    public function grafico()
    {
        return view('web.services.diseno-grafico');
    }
    public function fanpage()
    {
        return view('web.services.maketing-digital');
    }
}
