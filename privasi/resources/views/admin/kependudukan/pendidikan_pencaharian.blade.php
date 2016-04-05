@extends('admin.master')

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
                                        <a href="{{ URL::to('/agama') }}" >Jumlah dan Agama</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/wna') }}" >WNA</a>
                                    </li>
                                       <li>
                                        <a href="{{ URL::to('/wni') }}" >WNI</a>
                                    </li>
                                    <li class="active">
                                        <a href="{{ URL::to('/pendidikan_mata_pencaharian') }}">Pendidikan dan Mata Pencaharian</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/umur') }}" >Umur</a>
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
                                                    <th colspan="2">WNI</th>
                                                    <th colspan="2">WNA</th>
                                                </tr>
                                                <tr>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>L</th>
                                                    <th>P</th>                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
       
                                            <tr>
                                            {!!  Form::open(['url' => '/action_pendidikan', 'class' => 'form-horizontal']) !!}
                                                    <td></td>
                                            <input type="hidden" name="rw_id" class="form-control" value="3">
                                                    <td class="text-left">
                                                <select name="pendidikan_id" id="input" class="form-control" required="required">
                                                @foreach($pendidikan as $row)
                                                    <option value="{{$row->id }}">{{ $row->pendidikan }}</option>
                                                    @endforeach
                                                </select>
                                                
                                                </td>
                                                <td><input type="text" size="3" name="wnil"></td>
                                                <td><input type="text" size="3" name="wnip"></td>
                                                <td><input type="text" size="3" name="wnal"></td>
                                                <td><input type="text" size="3" name="wnap"></td>
                                            </tr>
                                        

                                            <tr>
                                                 <td colspan="6"><button type="submit" class="btn btn-success btn btn-block">simpan data</button></td>
                                            </tr>
                                            {!! Form::close() !!}
                                            </tbody>
                                           
                                        </table>
                                    </div> 

                                                                        
                                       
                                       
                                    </div>

                                    <div class="table-responsive text-center">
                                        <table class="table table-bordered" >
                                            <thead>
                                                <tr>
                                                    <th rowspan="2" >No </th>
                                                    <th rowspan="2" >Mata Pencaharian </th>
                                                    <th colspan="2">WNI</th>
                                                    <th colspan="2">WNA</th>
                                                </tr>
                                                <tr>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>L</th>
                                                    <th>P</th>                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
       
                                            <tr>
                                            {!!  Form::open(['url' => '/action_pencaharian', 'class' => 'form-horizontal']) !!}
                                                    <td></td>
                                            <input type="hidden" name="rw_id" class="form-control" value="3">
                                                    <td class="text-left">
                                                <select name="pencaharian_id"  class="form-control" required="required">
                                                @foreach($pencaharian as $row)
                                                    <option value="{{$row->id }}">{{ $row->pencaharian }}</option>
                                                    @endforeach
                                                </select>
                                                
                                                </td>
                                                <td><input type="text" size="3" name="wnil"></td>
                                                <td><input type="text" size="3" name="wnip"></td>
                                                <td><input type="text" size="3" name="wnal"></td>
                                                <td><input type="text" size="3" name="wnap"></td>
                                            </tr>
                                        

                                            <tr>
                                                 <td colspan="6"><button type="submit" class="btn btn-success btn btn-block">simpan data</button></td>
                                            </tr>
                                            {!! Form::close() !!}
                                            </tbody>
                                           
                                        </table>
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