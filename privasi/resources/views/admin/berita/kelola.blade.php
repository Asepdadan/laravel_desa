@extends('admin.master')

@section('title', 'Page Berita')

@section('css')
    @parent
        
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">  

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
       

      <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable();
} );
      </script>  

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
                          
                                                      <table id="example" class="display" cellspacing="0" width="100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>id</th>
                                                                        <th>judul</th>
                                                                        <th>image</th>
                                                                        <th>posted at</th>
                                                                        <th>waktu</th>
                                                                        <th>action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($data as $row)
                                                                    <tr>
                                                                        <td>{{ $row->id }}</td>
                                                                        <td>{{ $row->judul }}</td>
                                                                        <td><img src="uploads/image/{{ $row->image}}" alt="" width="100" height="100"></td>
                                                                        <td>{{ $row->posted_at }}</td>
                                                                        <td>{{ $row->waktu }}</td>
                                                                        <td><a href=""><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>       <a href=""><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                                </table>
                                    </div>
                                </section>
            
                        
</div>
@stop


@section('js')
    @parent

    {!! Html::script('assets/porto/assets/vendor/select2/select2.js') !!}
    {!! Html::script('assets/porto/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js') !!}
    {!! Html::script('assets/porto/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js') !!}
    {!! Html::script('assets/porto/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js') !!}

@stop