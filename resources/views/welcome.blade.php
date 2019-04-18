<!DOCTYPE html>
<html lang="vi VN">
    <head>
        <meta charset="utf-8">
        <title>SPA Forum - Allaravel.com</title>

        <!-- Main styles for this application -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <meta id="csrf-token" name="csrf-token" value="{{ csrf_token() }}">
        <!-- Latest compiled and minified CSS & JS -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
        <!-- Latest compiled and minified CSS & JS -->
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="app"></div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>

