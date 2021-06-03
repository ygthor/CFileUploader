<?php

namespace App\Http\Controllers;

use CarilaraFileUpload;
use Illuminate\Support\Facades\Response;

class FileUploadController extends Controller
{

    public function index()
    {

        $path = CarilaraFileUpload::set([
            'filename' => 'welcome/test22.txt',
            'content' => '123',
            'model_name' => '',
            'model_primary_key' => '',
            'model_column' => '',
        ])->upload();

        dd($path);

        $content = CarilaraFileUpload::setFilename('test.png')->get();
        $type = \Storage::disk('s3')->mimeType('test.png');
        $response = Response::make($content, 200)->header("Content-Type", $type);
        return $response;
    }
}
