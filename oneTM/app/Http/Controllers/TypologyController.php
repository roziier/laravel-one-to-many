<?php

namespace App\Http\Controllers;
use App\Typology;
use Illuminate\Http\Request;

class TypologyController extends Controller
{
    public function typIndex() {
        $typs = Typology::all();
        return view('pages.typ-index', compact('typs'));
    }

    public function typShow($id) {
        $show = Typology::findOrFail($id);
        return view('pages.typ-show', compact('show'));
    }
}
