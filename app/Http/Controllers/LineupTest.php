<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class LineupTest extends Controller
{
    //
    public function index()
    {
        $formations = Formation::all();

        return view('admin.lineup.index', compact('formations'));
    }
}
