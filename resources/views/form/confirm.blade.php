<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <form action="" method="POST">
            @csrf
            <div class="form-group mr-3">
                <label>漢字氏名</label>
                <div class="form-inline">
                    {{ $data['sei'] }}{{ $data['mei'] }}
                </div>
            </div>
            <div class="form-group mr-3">
                <label>カナ氏名</label>
                <div class="form-inline">
                    {{ $data['sei_kana'] }}{{ $data['mei_kana'] }}
                </div>
            </div>

            <div>

                <div id="base_parts">
                    <div class="form-group">
                        <label>勤務先:</label>
                        {{ $data['job'] }}
                    </div>
                    <div class="form-group">
                        <label>職務内容:</label>
                        {!! nl2br(e($data['job_naiyo'])) !!}
                    </div>
                </div>
                <div id="add_area">
                    @for ($i = 1; $i <= 8; $i++)
                        @if (!empty($data['job' . $i]))
                            <h2>職歴{{ $i }}</h2>
                            <div class="form-group">
                                <label>勤務先:</label>
                                {{ $data['job' . $i] }}
                            </div>
                            <div class="form-group">
                                <label>職務内容:</label>
                                {!! nl2br(e($data['job_naiyo' . $i])) !!}
                            </div>
                        @endif
                    @endfor
                </div>

            </div>

            <div class="mt-5">
                <button type="submit" class="btn btn-primary">送信する</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/form.js') }}"></script>
</body>

</html>
