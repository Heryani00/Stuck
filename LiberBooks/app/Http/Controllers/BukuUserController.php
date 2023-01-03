<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Favorite;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class BukuUserController extends Controller
{
    //
    public function index()
    {
        // code to handle request to the index page

    }

    public function show(Buku $buku, $id)
    {
        $userId = auth()->id();
        $buku = Buku::find($id);
        $ids = DB::table('favorites')->where('user_id', $userId)->select('buku_id')->pluck('buku_id')->toArray();
        $array = implode(',', $ids);
        $selected = explode(',', $array);
        $collect = collect($selected);

        $b = [];
        $bu = Buku::all();
        foreach ($bu as $bi) {
            $b[] = $collect->contains($bi->id);
            // dd($b);
        }



        // return view('component.show', [
        //     'buku' => $buku,
        //     'isFavorited' => $isFavorited
        // ]);
        // return compact('buku', 'isFavorited');
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
