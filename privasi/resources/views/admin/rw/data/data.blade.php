@extends('admin.parent')

@section('title', 'Agama')

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
                                  <li class="active">
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
                                     <li>
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
                                    <div id="agama" class="tab-pane active">
                                    <h4 class="text-center">DAFTAR REKAPITULASI JUMAH PENDUDUK KOTA BANDUNG</h4>
                                    <h4 class="text-center">BERDASARKAN JUMLAH RT, RW DAN MENURUT GOLONGAN AGAMA   </h4>
                                    
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
                                             <tr>
                                                <td><H5>RW</H5></td>
                                                <td> : </td>
                                                <td><H5> <b>{{ Auth::user()->username}}</b></H5></td>
                                            </tr>
                                    </table>
                                    <br>
                                    </div>


                                    {{Form::open(['url' => '/action-kependudukan'])}}
                                            <div class="form-group">
                                                <legend>Form title</legend>
                                            </div>
                                    
                                     <div class="form-group">
                                                <label class="col-md-3 control-label">Date range</label>
                                                <div class="col-md-6">
                                                    <div class="input-daterange input-group" data-plugin-datepicker>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                        <input type="text" class="form-control" name="start">
                                                        <span class="input-group-addon">Sampai</span>
                                                        <input type="text" class="form-control" name="end">
                                                        <span class="input-group-addon">
                                                            <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                                 
                                            </div>

                                    </form>

                                    @if($errors->has())
                                    <span class="label label-danger">
                                     {!! $errors->first('1') !!}<br>
                                     {!! $errors->first('2') !!}<br>
                                     {!! $errors->first('3') !!}<br>
                                     {!! $errors->first('4') !!}<br>
                                     {!! $errors->first('5') !!}<br>
                                     {!! $errors->first('6') !!}
                                    </span>
                                    @endif
                                   
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th   class="text-center">No</th>
                                                    <th   class="text-center">Agama</th>
                                                    <th   class="text-center">Jumlah</th>
                                                </tr>
                                               
                                            </thead>
                                            <tbody>
                                            
                                                {{ $no = 1 }}
                                                @foreach($data as $row)
                                                <tr>
                                                    <td>{{ $no++}} </td>   
                                            
                                                    <td>{{ $row->agama}}</td>   
                                             
                                                    <td>{{ $row->jumlah}}</td>   
                                                </tr>
                                            @endforeach
                                            
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