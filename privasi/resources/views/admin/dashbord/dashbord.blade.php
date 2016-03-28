@extends('layouts.app')
   

@section('title', 'Dashbord')


@section('menu')
    @parent

@endsection

@section('content')

<textarea rows="15" cols="80" style="width: 80%">
    <p>
        text
        <img src="img/dogleft.jpg" width="50" height="50">
        text
        <img src="img/dogleft.jpg" width="50" height="50" style="margin: 10px; border: 5px solid green;">
        text
    </p>

    <p>
        text
        <img src="img/dogleft.jpg" width="50" height="50">
        text
        <img src="img/dogleft.jpg" width="50" height="50" style="margin: 10px; border: 5px solid green;">
        text
    </p>
</textarea>

@endsection