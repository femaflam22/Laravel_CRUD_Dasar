<?php

namespace App\Http\Controllers;

use App\Models\guest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class infoController extends Controller
{
    public function home()
    {
        $dataReceptionist = guest::withTrashed()->get();
        return view('info.index', ['data' => $dataReceptionist]);
    }

    // public function search(Request $request){
    //     $search = $request->get('search');
    //     $guests = guest::all()->where('nama_lengkap', 'like', '%'.$search.'%');
    //     return response()->json($guests);
    // }
}
