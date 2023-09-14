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

        <form method="POST">
            <div class="form-group mr-3">
                <label>漢字氏名</label>
                <div class="form-inline">
                    <label for="InputName1">姓:</label>
                    <input type="text" name="sei" class="form-control mr-2" id="sei">
                    <label for="InputName2">名:</label>
                    <input type="text" name="mei" class="form-control" id="mei">
                </div>
            </div>
            <div class="form-group mr-3">
                <label>カナ氏名</label>
                <div class="form-inline">
                    <label for="InputName1">カナ姓:</label>
                    <input type="text" name="sei_kana" class="form-control mr-2" id="sei_kana">
                    <label for="InputName2">カナ名:</label>
                    <input type="text" name="mei_kana" class="form-control" id="mei_kana">
                </div>
            </div>

            <div>
                <button id="addForm" class="btn btn-primary" type="button">職歴を追加</button>
                <div id="base_parts">
                    <div class="form-group">
                        <label for="text">勤務先:</label>
                        <input type="text" name="job" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="textarea">職務内容:</label>
                        <textarea id="textarea1" name="job_naiyo" class="form-control"></textarea>
                    </div>
                </div>
                <div id="add_area">

                </div>
            </div>

            <div class="mt-5">
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
    </div>
    <script src="{{ asset('js/form.js') }}"></script>
</body>

</html>
