<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body dir="rtl">
<h3>تغییر رمز عبور</h3>
<div>
    لطفا برای تغییر رمز عبور خود روی این لینک کلیک کنید:
    <a href="{{config('app.url')}}/{{$reseturl}}?email={{$email}}&token={{$token}}">{{config('app.url')}}/{{$reseturl}}?email={{$email}}&token={{$token}}</a>
</div>
</body>
</html>
