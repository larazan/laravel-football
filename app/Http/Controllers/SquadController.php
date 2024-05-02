<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SquadController extends Controller
{
    public function index()
    {
        return $this->loadTheme('team.index');
    }

    public function show($slug)
    {
        return $this->loadTheme('team.detail');
    }
}
