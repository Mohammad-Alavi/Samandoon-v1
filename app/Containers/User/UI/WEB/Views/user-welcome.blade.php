<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Samandoon | سمندون</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                {{--<div class="title">Welcome Anonymous User :)</div>--}}
                    <h1>{{ $ngo->name }}</h1>
                    <h2>"{{ $ngo->user->first_name }} {{ $ngo->user->last_name }}" مدیر عامل</h2>
                    <ol>
                        <h3>لیست رخداد ها</h3>
                        @foreach($ngo->events as $event)
                        <h2>{{  $event->title }}</h2>
                            <li>
                                {{ $event->description }}
                            </li>
                        @endforeach
                    </ol>
            </div>
        </div>
    </body>
</html>
