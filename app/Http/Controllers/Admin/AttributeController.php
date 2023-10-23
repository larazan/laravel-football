<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attribute;
use App\Models\AttributeOption;
use App\Http\Requests\AttributeOptionRequest;
use Illuminate\Support\Facades\Session;

class AttributeController extends Controller
{
    public function __construct()
    {
        // parent::__construct();

    }
    
    public function options($attributeID)
    {
        if (empty($attributeID)) {
            return redirect('admin/attributes');
        }

        $attribute = Attribute::findOrFail($attributeID);
        $this->data['attribute'] = $attribute;

        return view('admin.attributes.options', $this->data);
    }

    public function store_option(AttributeOptionRequest $request, $attributeID)
    {
        if (empty($attributeID)) {
            return redirect('admin/attributes');
        }
        
        $params = [
            'attribute_id' => $attributeID,
            'name' => $request->get('name'),
        ];

        if (AttributeOption::create($params)) {
            // Session::flash('success', 'option has been saved');
            $notifikasi = array(
                'alert' => 'success',
                'pesan' => 'option has been saved',
            );
            return back()->with($notifikasi);
        }

        return redirect('admin/attributes/'. $attributeID .'/options');
    }

    public function edit_option($optionID)
    {
        $option = AttributeOption::findOrFail($optionID);

        $this->data['attributeOption'] = $option;
        $this->data['attribute'] = $option->attribute;

        return view('admin.attributes.options', $this->data);
    }

    public function update_option(AttributeOptionRequest $request, $optionID)
    {
        $option = AttributeOption::findOrFail($optionID);
        $params = $request->except('_token');

        if ($option->update($params)) {
            // Session::flash('success', 'Option has been updated');
            $notifikasi = array(
                'alert' => 'success',
                'pesan' => 'option has been updated',
            );
            return back()->with($notifikasi);
        }

        return redirect('admin/attributes/'. $option->attribute->id .'/options');
    }

    public function remove_option($optionID)
    {
        if (empty($optionID)) {
            return redirect('admin/attributes');
        }

        $option = AttributeOption::findOrFail($optionID);

        if ($option->delete()) {
            // Session::flash('success', 'option has been deleted');
            $notifikasi = array(
                'alert' => 'success',
                'pesan' => 'option has been deleted',
            );
            return back()->with($notifikasi);
        }

        return redirect('admin/attributes/'. $option->attribute->id .'/options');
    }
}
