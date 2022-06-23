@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <div class="comment-box">
        <br><br>
        <center>
        <h2>Comment Anything</h2>
        <form action="#">
        <br><br><br><br>
        <textarea name="comment" rows ="12" cols="60" placeholder= "Type Your Comment..."></textarea>
        <br><br>
        <button> Submit </button>
        </center>
        </form>
    </div>
</body>
</html>


@endsection
