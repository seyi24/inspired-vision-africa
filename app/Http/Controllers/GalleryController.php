<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
    
use App\Models\Gallery;

class GalleryController extends Controller
{
  public function index()
{
    // Fetch all gallery items with type 'image' and include video_url
    $items = Gallery::where('type', 'image')->orWhere('type', 'video')->get(['id', 'image_path', 'video_url']);

    return view('gallery', compact('items'));
}
}