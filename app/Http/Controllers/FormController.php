<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form()
    {
        return view('form.index');
    }

    public function confirm(Request $request)
    {
        $data = $request->all();

        $request->session()->put($data);

        return view(('form.confirm'))
            ->with(compact(
                'data',
            ));
    }
}
