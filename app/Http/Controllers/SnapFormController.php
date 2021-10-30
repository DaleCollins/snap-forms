<?php

namespace App\Http\Controllers;

use App\SnapForm;
use Illuminate\Http\Request;

class SnapFormController extends Controller
{
    public function create()
    {
        return view('snapforms.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'suburb' => 'required',
            'state' => 'required',
            'postcode' => 'required|integer'
        ]);
        SnapForm::create($data);
    }
}
