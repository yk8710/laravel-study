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
        $fileName = pathinfo($savedFilePath, PATHINFO_BASENAME);
        Log::debug($fileName);

        return to_route('photos.show', ['photo' => $fileName])->with('success', 'アップロードしました');
    }

    // アップロード画像の表示
    public function show($fileName)
    {
        return view('photos.show', ['fileName' => $fileName]);
    }
}
