<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
    
use App\Models\Speaker;

class SpeakerController extends Controller
{
  public function index()
{
    $speakers = Speaker::select(['id', 'name', 'image', 'position'])->get();

    return view('speaker', compact('speakers'));
}
}