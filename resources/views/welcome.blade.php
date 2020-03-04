<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <style>
    button{
      border-radius: 50%;
      height: 100px;
      width: 100px;
      font-size: 25px;
      cursor: pointer;
      position: relative;
    }

    #onButton:hover{
      color:blue;
    }

    #offButton:hover{
      color:red;
    }
    </style>
    <body>
      <form method="post" action="{{ route('sendData') }}">
            <button name="tombol" value="on" id="onButton">ON</button>
            <button name="tombol" value="off" id="offButton">OFF</button>
      </form>
    </body>
</html>
