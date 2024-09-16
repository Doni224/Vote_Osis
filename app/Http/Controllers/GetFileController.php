<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class GetFileController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getFile($filename)
    {
        $path = storage_path('app/public/paslon/' . $filename);
        if (file_exists($path)) {
            return response()->file($path);
        } else {
            abort(404);
        }
    }
}
