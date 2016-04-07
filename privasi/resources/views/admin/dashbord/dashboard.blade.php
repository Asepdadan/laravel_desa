@extends('admin.master')

@section('title', 'Page Berita')

@section('css')
    @parent
         
        
@stop

@section('content')

@if(empty(Auth::user()))




@endif


 
@stop


@section('js')
    @parent



@stop