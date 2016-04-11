@extends('admin.parent')

@section('title', 'Page Kependudukan')

@section('css')
    @parent

@stop

@section('content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <!-- <h2 class="panel-title">Form Posting Berita</h2> -->
               <div class="tabs">
                             <ul class="nav nav-tabs">
                                     <li >
                                        <a href="{{ URL::to('/kependudukan-agama') }}" >Jumlah Agama</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/kependudukan-penduduk') }}" >Jumlah Penduduk</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/kependudukan-wna') }}" >WNA</a>
                                    </li>
                                       <li>
                                        <a href="{{ URL::to('/kependudukan-wni') }}" >WNI</a>
                                    </li>
                                     <li class="active">
                                        <a href="{{ URL::to('/kependudukan-pendidikan') }}">Pendidikan</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/kependudukan-mata-pencaharian') }}">Mata Pencaharian</a>
                                    </li>
                                    <li  >
                                        <a href="{{ URL::to('/kependudukan-umur') }}" >Umur</a>
                                    </li>
                                </ul>
        </header>
        <div class="panel-body">
              <div class="col-md-12">                        
                                <div class="tab-content">
                                    <div  class="tab-pane active">
                                    <h4 class="text-center">DAFTAR REKAPITULASI JUMLAH PENDUDUK KOTA BANDUNG</h4>
                                    <h4 class="text-center">BERDASARKAN PENDIDIKAN DAN MATA PENCAHARIAN</h4>
                                    <h4 class="text-center">KELURAHAN CIHAPIT</h4>
                                    <h4 class="text-center">PADA BULAN DESEMBER 2015</h4>
                                    
                                    <table>
                                            <tr>
                                                <td><H5>KELURAHAN</H5></td>
                                                <td> : </td>
                                                <td><H5> CIHAPIT </H5></td>
                                            </tr>
                                            <tr>
                                                <td><H5>KECAMATAN</H5></td>
                                                <td> : </td>
                                                <td><H5> BANDUNG WETAN </H5></td>
                                            </tr>
                                            <tr>
                                                <td><H5>PADA BULAN</H5></td>
                                                <td> : </td>
                                                <td><H5> APRIL 2016 </H5></td>
                                            </tr>
                                    </table>

                                     @if($errors->has())
                                    <span class="label label-danger">
                                    {!! $errors->first('wnil') !!}<br>
                                    {!! $errors->first('wnal') !!}<br>
                                    {!! $errors->first('wnip') !!}<br>
                                    {!! $errors->first('wnap') !!}

                                    </span>
                                    @endif

                                    <div class="table-responsive text-center">
                                        <table class="table table-bordered" >
                                            <thead>
                                                <tr>
                                                    <th rowspan="2" >No </th>
                                                    <th rowspan="2" >Pendidikan umum </th>
                                                    <th colspan="2">WNA</th>
                                                    <th colspan="2">WNI</th>
                                                </tr>
                                                <tr>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>L</th>
                                                    <th>P</th>                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $no = 1; ?>
                                            @foreach($pendidikanWna as $row) 
                                            @foreach($pendidikanWni as $row1) 
                                            <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $row->pendidikan }}</td>
                                            <td>{{ $row->L }}</td>
                                            <td>{{ $row->P }}</td>
                                            <td>{{ $row1->L }}</td>
                                            <td>{{ $row1->P }}</td>
                                           </tr>
                                           @endforeach
                                           @endforeach
                                            </tbody>
                                           
                                        </table>
                                    </div> 

                                                                        
                                       
                                       
                                    </div>

                                </div>
                            </div>

                        

                        </div>
                </div>

        </div>
</section>

                         
</div> 
@stop


@section('js')
    @parent



@stop