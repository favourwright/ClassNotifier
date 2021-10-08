<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Class Notification App</title>
    <style>
        html{line-height:1.15;-webkit-text-size-adjust:100%;height:100%;}
        body {
            margin:0;
            font-family: 'Nunito', sans-serif;
            background:#692be2;
            float: left;
            height:100%;
        }
        a{background-color:transparent}[hidden]{display:none}
        html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}
        *,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}
        a{color:inherit;text-decoration:inherit}
        .main{
            height:100%;
            width:100%;
            padding:6%;
            display:flex;
            justify-content:center;
        }
    </style>
    @yield('style')
</head>
<body class="main">
    <main>
        @yield('content')
    </main>
    @yield('script')
</body>
</html>
