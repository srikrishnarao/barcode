<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadImage($url){
        return response()->download($url, 'barcode.png', ['Content-Type' => $book_cover->mime]);
     }
}
