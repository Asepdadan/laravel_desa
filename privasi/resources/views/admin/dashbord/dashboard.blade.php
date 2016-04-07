@extends('admin.master')

@section('title', 'Page Berita')

@section('css')
    @parent
         
        
@stop

@section('content')

{{ Auth::user() }}

{{ Auth::user()->username }}
 
@stop


@section('js')
    @parent



@stop