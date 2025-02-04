<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpeg,jpg,png,gif',
            'description' => 'required|string|max:255',
            'level' => 'required|integer',
        ]);

        $file = $request->file('file');
        $path = $file->store('uploads', 'public');

        $fileRecord = new File();
        $fileRecord->name = $file->getClientOriginalName();
        $fileRecord->path = $path;
        $fileRecord->description = $request->description;
        $fileRecord->level = $request->level;
        $fileRecord->save();

        return response()->json(['message' => 'Arquivo salvo com sucesso!', 'file' => $fileRecord], 200);
    }
}
