<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('books', [
            'buku' => Buku::all()->latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.books.create', [
            'buku' => Buku::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBukuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBukuRequest $request)
    {
        //
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'genre' => 'required',
            'image' => 'image|file|max:2048',
            'deskripsi' => 'required',
            'file' => 'file|mimes:pdf|max:10240',
            'category_id' => 'required',
        ]);

        $file = $request->file('file');

        $filename = uniqid() . '.' . $file->extension();

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('buku-images');
        }
        if ($file) {
            $validatedData['file'] = $file->storeAs('pdfs', $filename);
        }

        Buku::create($validatedData);

        return redirect('/admin')->with('success', 'new book have been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku, $id)
    {
        //
        $buku = Buku::find($id);
        return $buku;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku, $id)
    {
        //
        $buku = Buku::find($id);
        return view('admin.books.edit', [
            'buku' => $buku
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBukuRequest  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBukuRequest $request, Buku $buku, $id)
    {
        //
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'genre' => 'required',
            'image' => 'image|file|max:2048',
            'deskripsi' => 'required',
            'file' => 'file|max:10240',
            'category_id' => 'required',
        ]);

        $file = $request->file('file');

        $filename = uniqid() . '.' . $file->extension();


        if ($file) {
            if ($request->oldFile) {
                Storage::delete($request->oldFile);
            }
            $validatedData['file'] = $file->storeAs('pdfs', $filename);
        }


        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('buku-images');
        }
        Buku::find($id)->update($validatedData);
        return redirect('/admin')->with('success', ' data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku, $id)
    {
        $buku = Buku::find($id);

        if ($buku->image) {
            Storage::delete($buku->image);
        }
        Buku::destroy($buku->id);
        return back()->with('success', 'Data has been deleted');
    }

    public function getBuku(Buku $buku, $id)
    {
        $buku = Buku::find($id);
        return $buku;
    }
}
