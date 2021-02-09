<?php

namespace App\Http\Controllers;
use App\Typology;
use App\Task;
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

    public function typCreate() {
        $typs = Typology::all();
        return view('pages.typ-create-form', compact('typs'));

    }

    public function typStore(Request $request) {
        $typ = Typology::create($request -> all());
        return redirect() -> route('typ-show', $typ -> id);
    } 

    public function typEdit($id) {
        $typ = Typology::findOrFail($id);
        return view('pages.typ-edit', compact('typ'));

    }

    public function typUpdate(Request $request, $id) {
        $typ = Typology::findOrFail($id);
        $typ -> update($request -> all());
        return redirect() -> route('typ-show', $typ -> id);
    }
    
}
