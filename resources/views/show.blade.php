<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Brooklyn</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/bootstarp/css/bootstrap.css" >
    </head>
    <body>

       {{--@foreach ($var as $v) --}}
        <textarea id="editor1" value={!! $var !!} ></textarea>
      {{--<!-- @endforeach --> --}}
      <script src="/ckeditor/ckeditor.js"> </script>
      <script>
              CKEDITOR.replace( 'editor1' );
      </script>

        <script src="/jquery-3.4.1.min.js"></script>
        <script src="/bootstarp/js/bootstrap.min.js"></script>
    </body>
</html>
