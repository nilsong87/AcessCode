<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CanvasController extends Controller
{
    public function export(Request $request)
    {
        // Decodificar a imagem base64 recebida
        $imageData = $request->input('image');
        $imageData = str_replace('data:image/png;base64,', '', $imageData);
        $imageData = str_replace(' ', '+', $imageData);
        $image = base64_decode($imageData);

        // Definir o caminho e nome do arquivo
        $fileName = 'canvas_image_' . time() . '.png';
        $filePath = public_path('exports/' . $fileName);

        // Salvar a imagem no servidor
        File::put($filePath, $image);

        return response()->json(['success' => true, 'file' => $filePath]);
    }
}
