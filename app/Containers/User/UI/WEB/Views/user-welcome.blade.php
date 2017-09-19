<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

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

                    <h1>NGO Name: {{ $ngo->name }}</h1>
                    <h2>NGO Owner: {{ $ngo->user->first_name }} {{ $ngo->user->last_name }}</h2>
                    <ul>
                        <li>
                            <ol>
                                @foreach($ngo->events as $event)
                                    <h3>Event</h3>
                                        <li>
                                            Location:
                                            {{ $event->location }}
                                        </li>
                                @endforeach
                            </ol>
                        {{--{{ $ngo->user->last_name }}--}}
                        </li>
                    </ul>

            </div>
        </div>
    </body>
</html>
