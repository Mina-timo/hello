<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Test</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
    </head>
    <body>

            <div class="content">
                <div class="title m-b-md">
                    Laravel test
                </div>
                <form action="/add" method="POST" class="form-control">
                  {{csrf_field() }}
                  textarea
                  <textarea name="ta" id="editor1"></textarea>
                    <input name="in">
                  <!-- <textarea ></textarea> -->
                  <button type="submit" class="btn btn-primary"> go</button>
                </form>
              

<script src="/ckeditor/ckeditor.js"> </script>
        <!-- <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script> -->
            <script>
                    CKEDITOR.replace( 'editor1' );
            </script>
    </body>
</html>
