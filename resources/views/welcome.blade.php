<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>mysession</title>

    </head>
<body>
SessionID: {{ session()->getId() }}<br>
realpath: {{ realpath($_SERVER['SCRIPT_FILENAME']) }}<br>
SERVER_ADDR: {{ $_SERVER['SERVER_ADDR'] }}<br>
@foreach ($_COOKIE as $key => $val)
COOKIE[{{ $key }}]: {{ $val }}<br>
@endforeach
{!! phpinfo(); !!}
</body>
</html>
