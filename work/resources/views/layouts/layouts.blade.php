<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <style media="screen">
    body {
      font-size: 16pt;
      color: #999;
      margin: 5px;
    }

    h1 {
      font-size: 50pt;
      text-align: right;
      color: #f6f6f6;
      margin: -20px 0 -30px 0;
      letter-spacing: -4pt;
    }

    ul {
      font-size: 12pt;
    }

    hr {
      margin: 25px 100px;
      border-top: 1px dashed #ddd;
    }

    .menutitle {
      font-size: 14pt;
      font-weight: bold;
      margin: 0;
    }

    .content {
      margin: 10px;
    }

    .footer {
      text-align: right;
      font-size: 10pt;
      margin: 10px;
      border-bottom: solid 1px #ccc;
      color: #ccc;
    }
  </style>
</head>

<body>
  <h1>@yield('title')</h1>
  <hr size="1">
  <div class="content">
    @yield('content')
  </div>
  <div class="footer">
    @yield('footer')
  </div>
</body>

</html>