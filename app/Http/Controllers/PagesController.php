<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\BusinessSetting;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact()
    {
        return $this->loadTheme('contact.index');
    }
    
    public function faqs()
    {
        $faqs = Faq::orderBy('order_position', 'ASC');

		$this->data['faqs'] = $faqs->get();
        return $this->loadTheme('faqs.index', $this->data);
    }

    public function terms()
    {
        $page = BusinessSetting::where(['key' => 'terms_and_conditions'])->first();

        $this->data['page'] = $page;
        return $this->loadTheme('terms.index',  $this->data);
    }

    public function policy()
    {
        $page = BusinessSetting::where(['key' => 'privacy_policy'])->first();

        $this->data['page'] = $page;
        return $this->loadTheme('policy.index',  $this->data);
    }


}
