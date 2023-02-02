<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('web.blog.index');
    }
    public function deploy(){
        return view('web.blog.deploy-digital-ocean');
    }
    public function paypal(){
        return view('web.blog.paypal-laravel');
    }
    public function mailGmail(){
        return view('web.blog.gmail');
    }
    public function domainUbuntu(){
        return view('web.blog.domain-ubuntu');
    }
    public function chatBot(){
        return view('web.blog.chat-python');
    }
}
