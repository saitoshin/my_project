<!doctype html>
<heml lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scalse=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title></title>
    </head>

<body>
    Top Controller!!
    <?= $sampleValue ?>

    <header>
        <a href="/login">
            <h2>ログイン</h2>
        </a>
    </header>
    

</body>

</html>
