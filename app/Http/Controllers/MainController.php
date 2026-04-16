<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Berita;
use App\Models\Master;
use App\Models\Kategori;
use App\Models\Dokumen;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::all();
        $visi = Master::where(['header' => 'visi'])->first();
        $misi = Master::where(['header' => 'misi'])->first();
        $berita = Berita::limit(6)->orderBy('id','desc')->get();
        $kategori = Kategori::all();
        return view('index',compact('slider','berita','visi','misi','kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function allBerita()
    {
        $slider = Slider::all();
        $berita = Berita::orderBy('id','desc')->paginate(6);
        $kategori = Kategori::all();
        return view('berita',compact('berita','slider','kategori'));
    }

    public function detailBerita(String $id)
    {
        $berita = Berita::where(['id' => $id])->first();
        $kategori = Kategori::all();
        return view('detailBerita',compact('berita','kategori'));
    }

    public function dok(String $id)
    {
        $kategori = Kategori::all();
        $kat = Kategori::where(['id' => $id])->first();
        $dokumen = Dokumen::where(['kategori' => $id])->get();
        return view('dok',compact('kategori','kat','dokumen'));
    }
}
