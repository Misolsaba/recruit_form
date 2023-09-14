下記の内容でお申し込みがありました。


お名前
{{ $form['sei'] }}{{ $form['mei'] }}

メールアドレス
{{ $form['email'] }}

職歴
勤務先：{{ $form['job'] }}
勤務内容：{{ $form['job_naiyo'] }}

@for ($i = 1; $i <= 8; $i++)
@if (!empty($form['job' . $i]))
職歴{{ $i }}
勤務先：{{ $form['job' . $i] }}
勤務内容：{{ $form['job_naiyo' . $i] }}
@endif
@endfor

