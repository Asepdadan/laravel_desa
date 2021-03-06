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
                                    <li class="active">
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
                                                <td><H5> <b>{{ Auth::user()->name}}</b></H5></td>
                                            </tr>
                                    </table>
                                    <br>
                                    

                                    @if($errors->has())
                                    <span class="label label-danger">
                                    {!! $errors->first('wni') !!}<br>
                                    {!! $errors->first('wna') !!}<br>
                                    {!! $errors->first('l') !!}<br>
                                    {!! $errors->first('p') !!}
                                     {!! $errors->first('1') !!}
                                     {!! $errors->first('2') !!}
                                    </span>
                                    @endif
                                       
                                    </div>
                                   
                                     <div class="table-responsive text-center">
                                        <table class="table table-bordered" >
                                            <thead >
                                                <tr >
                                                    
                                                    <th colspan="2" class="text-center">Jumlah UMPI</th>
                                                    <th colspan="3" class="text-center">Jumlah Penduduk</th>
                                                    
                                                </tr>
                                                <tr>
                                                    
                                                    <th>WNI</th>
                                                    <th>WNA</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>Penduduk</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {!!  Form::open(['url' => '/ActionJumlahPenduduk']) !!}

                                            <tr>
                                               <input type="hidden" name="rw_id" size="3" value="{{ Auth::user()->id }}">
                                                    <td><input type="number" name="wni" size="3" class="form-control"></td>
                                                    <td><input type="number" name="wna" size="3" class="form-control"></td>
                                                    <td><input type="number" name="l" size="3" class="form-control"></td>
                                                    <td><input type="number" name="p" size="3" class="form-control"></td>
                                                    <td>
                                                            <select name="penduduk"  class="form-control">
                                                                <option value="WNI">WNI</option>
                                                                <option value="WNA">WNA</option>
                                                            </select>
                                                    </td>
                                            </tr>
                                            <tr>
                                                
                                                <td colspan="6"><button type="submit" class="btn btn-success btn btn-block" name="penduduk">Simpan data</button></td>
                                            </tr>
                                            {!!  Form::close() !!}
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