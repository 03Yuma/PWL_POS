<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class Levelcontroller extends Controller
{
    // public function index(){
    //     $data=DB::select('select*from m_level');
    //     return view('level',['data'=>$data]);
    // }
        public function create(): View
    {
        return view('level.create');
    }
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
                'level_id' => 'bail|required',
                'level_nama' => 'required|string',
                'level_kode'=> 'required',
            ]);
        return redirect('/level');
    }
}

