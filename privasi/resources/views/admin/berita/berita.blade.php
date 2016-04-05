@extends('admin.master')

@section('title', 'Page Berita')

@section('css')
    @parent

    <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>


        
@stop

@section('content')

<div class="col-lg-12">
                                <section class="panel">
                                    <header class="panel-heading">
                                        <div class="panel-actions">
                                            <a href="#" class="fa fa-caret-down"></a>
                                            <a href="#" class="fa fa-times"></a>
                                        </div>
                        
                                        <h2 class="panel-title">Form Posting Berita</h2>
                                    </header>
                                    <div class="panel-body">
                                        {!! Form::open(['url' => '/ActionBerita','enctype' => 'multipart/form-data']) !!}                                           
                        
                                            <div class="form-group">
                                              
                        
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputTooltip">Judul Berita</label>
                                                <div class="col-md-6">
                                                    <textarea name="judul"  class="form-control" rows="3" cols="5" ></textarea>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputTooltip">Gambar Berita</label>
                                                <div class="col-md-6">
                                                    <input type="file" name="gambar">
                                                </div>
                                            </div>
                        
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputTooltip"></label>
                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-success ">Posting</button>
                                                    <button type="reset" class="btn btn-success ">Reset</button>
                                                </div>
                                            </div>

                                        {!! Form::close() !!}                                           



                                    </div>
                                </section>
            
                        
</div>
@stop


@section('js')
    @parent


@stop