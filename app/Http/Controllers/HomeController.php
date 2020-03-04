<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Button;

class HomeController extends Controller
{
  public function index(Request $request){
    $button = new Button;
    $value = $request->get('tombol');

    if($value == 'on')
    {
      $value = 'hidup';
    }elseif($value == 'off')
    {
      $value = 'mati';
    }
    $button->value = $value;
    $button->save();

    return view('welcome');
  }

  public function show(){
    $button = Button::all()->sortByDesc('time')->first();

    return $button;
  }
}
