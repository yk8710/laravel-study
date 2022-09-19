<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PhotoController extends Controller
{
    public function index()
    {

    }

    // アップロード画像
    public function create()
    {
        return view('photos.create');
    }

    // アップロード処理
    public function store(Request $request)
    {
        $savedFilePath = $request->file('image')->store('photos', 'public');
        Log::debug($savedFilePath);

        return to_route('photos.create')->with('success', 'アップロードしました');
    }
}
