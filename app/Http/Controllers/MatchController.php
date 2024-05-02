<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function index()
    {
        return $this->loadTheme('match.index');
    }

    public function show($slug)
    {
        return $this->loadTheme('match.detail');
    }

    public function lineup($slug)
    {
        return $this->loadTheme('match.lineup');
    }

    public function statistic($slug)
    {
        return $this->loadTheme('match.statistic');
    }
}
