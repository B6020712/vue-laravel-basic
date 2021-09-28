<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vue Laravel Basic</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="content">
            <div id="app">
                <edit-component id="{!!$id!!}"></edit-component>
            </div>
        </div>
    </body>
    <script src="{{ mix('/js/app.js') }}"></script>
</html>