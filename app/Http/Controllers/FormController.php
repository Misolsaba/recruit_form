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
    
    public function send(Request $request)
    {
        $data = session()->all();
        
        // メール送信
        $mailInfo['form'] = $data;
        $mailInfo['subject']  = 'メール送信';
        $mailInfo['template'] = 'emails.admin.send';
        \App\Libraries\Email::send('admin', $mailInfo);
        
        dd('完了');
    }
}
