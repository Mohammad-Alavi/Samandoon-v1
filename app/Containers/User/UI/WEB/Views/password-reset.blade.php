<!DOCTYPE html>
<html>
    <head>
        <title>Password Reset</title>

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
                font-size: 15px;
                color: red;
                font-weight: bold;
            }

            .password {
                /*font-size: 20px;*/
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                {{--<div class="title">Welcome Anonymous User :)</div>--}}
                @if( Session::has('status') )
                    <div class="title">{{ Session::get('status') }}</div>
                @endif
                <form action="{{ route('user_post_reset_password') }}" method="POST">
{{--                    {{ csrf_field() }}--}}
                    <label for="password" class="password">New Password</label>
                    <input type="text" name="password"/>
                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                    <input type="hidden" value="{{ Request::input('email') }}" name="email">
                    <input type="hidden" value="{{ Request::input('token') }}" name="token">
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </body>
</html>
