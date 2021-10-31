<?php

namespace App\Http\Controllers;

use App\SnapForm;
use App\Actions\SendMail;
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

        $mail = (new SendMail($data['email'], "New Patient Information", $data))->execute();
        if ($mail->getMessage() == "Queued. Thank you.") {
            return redirect(route('form.thankyou'));
        }
        session()->flash('error', 'There was an error sending the form');
        return redirect()->back();

    }

    public function show()
    {
        return view('snapforms.thankyou');
    }
}
