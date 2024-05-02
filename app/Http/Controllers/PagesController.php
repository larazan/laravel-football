<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact()
    {
        return $this->loadTheme('contact.index');
    }
    
    public function faqs()
    {
        return $this->loadTheme('faqs.index');
    }

    public function terms()
    {
        return $this->loadTheme('terms.index');
    }

    public function policy()
    {
        return $this->loadTheme('policy.index');
    }


}
