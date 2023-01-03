<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    //
    public function store(Request $request)
    {
        $user = auth()->user()->id;
        $exist = Favorite::where('user_id', $user)->where('buku_id', $request->buku_id)->first();


        if ($exist) {
            return back()->with('fail', 'buku sudah ada dalam daftar favorit');
        } else {
            Favorite::create([
                'user_id' => $user,
                'buku_id' => $request->buku_id,
            ]);

            return redirect('/allbooks')->with('success', 'ditambahkan ke daftar favorit');
        }
    }

    public function destroy(Request $request, Favorite $favorite)
    {

        $user = auth()->user()->id;
        $exist = Favorite::where('user_id', $user)->where('buku_id', $request->buku_id)->first();


        if ($exist) {
            // buku tersebut sudah ada di dalam daftar favorit
            $exist->delete();
            return redirect('/allbooks')->with('success', 'dihapus dari daftar favorit');
        } else {
            // buku tersebut belum ada di dalam daftar favorit
            return back()->with('fail', 'buku tidak ada dalam daftar favorit');
        }
    }
}
