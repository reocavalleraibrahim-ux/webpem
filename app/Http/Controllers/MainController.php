<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Berita;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::all();
        $berita = Berita::limit(6)->orderBy('id','desc')->get();
        return view('index',compact('slider','berita'));
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
        $berita = Berita::orderBy('id','desc')->get();
        return view('berita',compact('berita','slider'));
    }

    public function detailBerita(String $id)
    {
        $berita = Berita::where(['id' => $id])->first();
        return view('detailBerita',compact('berita'));
    }
}
