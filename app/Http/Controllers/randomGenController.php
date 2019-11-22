<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class randomGenController extends AppBaseController
{/**
 * Generate a more truly "random" alpha-numeric string.
 *
 * @param  int  $length
 * @return string
 *
 * @throws \RuntimeException
 */
public static function index($length = 16)
{
    $url=config('app.url');
    $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $random= substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
    $details=[
        'random' =>$random,
        'url' =>$url
    ];
    return view('generate');
}
}
