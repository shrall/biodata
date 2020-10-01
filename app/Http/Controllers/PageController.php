<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = 'Ini Index';
        $judul = 'Index';
        return view('pages/index')->with('title',$title)->with('judul',$judul);
    }
    public function jadwal(){
        $title = 'Jadwaaaaaaaaaaaaaal kuliah mu :)';
        $judul = 'Jadwal Kuliah';
        return view('pages/jadwal_kuliah')->with('title',$title)->with('judul',$judul);
    }
    public function kontak(){
        $title = 'Kamu ga punya temen :((';
        $judul = 'Kontak Teman';
        return view('pages/kontak_teman')->with('title',$title)->with('judul',$judul);
    }
}
