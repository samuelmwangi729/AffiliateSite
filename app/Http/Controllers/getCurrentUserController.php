<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class getCurrentUserController extends Controller
{

    //the function must check where the user is loged in
    public function __construct(){
        $this->middleware('auth');
    }
    //this will return the current user username/email address
    public function index(){
        $url=config('app.url');
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $random= substr(str_shuffle(str_repeat($pool, 16)), 0, 16);
        $details=[
            'id'=>'1',
            'url'=>$url,
            'referral'=>$random,
        ];
        return ($details);
    }
}
