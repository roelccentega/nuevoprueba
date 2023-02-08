<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view ('welcome');
    }
    public function landingWeb()
    {
        return view('web.landing.web');
    }
    public function landingStore()
    {
        return view('web.landing.tienda');
    }
    public function desarrollo()
    {
        return view ('web.page.desarrollo');
    }
    public function diagnostico()
    {
        return view ('web.page.diagnostico');
    }
    public function asesoria()
    {
        return view ('web.page.asesoria');
    }
    public function contact()
    {
        return view ('web.page.contact');
    }
    public function postContact(Request $request)
    {

//        $this->validate($request, $rules, $messages);
        $request->validate([
            'name' => 'required',

        ]);
//        ventas@importadoraquimicajys.com
        $emails = ['info@ccentercompany.com'];
        $mail = new GeneralContactForm($request->all());
        Mail::to($emails)->send($mail);


//        Mail::to($request->user())->send(new OrderShipped($order));

        return redirect('/contacto')->with('status',' ¡Enhorabuena! Tu mensaje ha sido enviado con éxito.');
    }
}
