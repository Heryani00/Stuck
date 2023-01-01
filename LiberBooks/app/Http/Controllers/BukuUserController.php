<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class BukuUserController extends Controller
{
    //
    public function index()
    {
        // code to handle request to the index page

    }

    public function show(Buku $buku, $id)
    {
        $buku = Buku::find($id);
        return $buku;
        // code to handle request to show a specific resource
    }
    public function download(Buku $buku, $id)
    {

        $buku = Buku::find($id);
        //PDF file is stored under project/public/storage/info.pdf
        $file = public_path() . "/storage/$buku->file";

        $headers = array(
            'Content-Type: application/pdf',
        );

        $file_name = basename($file);

        return Response::download($file, $file_name, $headers);
    }
}
