<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
    
use App\Models\Speaker;

class SpeakerController extends Controller
{
  public function index()
{
    $speakers = Speaker::with(['id', 'name ', 'image' , 'position']);

    return view('speaker', compact('speakers'));
}
}