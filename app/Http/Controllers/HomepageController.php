<?php

namespace App\Http\Controllers;

use App\Models\BlockContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\VarDumper\VarDumper;

class HomepageController extends Controller
{
    public function index()
    {
        $content = BlockContent::get();
        // dd($content);

        return view('homepage', compact('content'));
    }
}
