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
                                    <li class="active">
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
                                    <div id="wna" class="tab-pane active">
                                    <h4 class="text-center">PEMERINTAH KOTA BANDUNG</h4>
                                    <h4 class="text-center">LAPORAN PENDUDUK KOTA BANDUNG</h4>
                                    <h4 class="text-center">BERDASARKAN KELAHIRAN, KEMATIAN, PENDATAN DAN PINDAH</h4>
                                    
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
                                    <br>
                          @if($errors->has())
                                      <div class="alert alert-danger">
                                    {!! $errors->first('pll') !!}<br>
                                    {!! $errors->first('plp') !!}<br>
                                    {!! $errors->first('ml') !!}<br>
                                    {!! $errors->first('mp') !!}<br>
                                    {!! $errors->first('pl') !!}<br>
                                    {!! $errors->first('pp') !!}<br>
                                    {!! $errors->first('pil') !!}<br>
                                    {!! $errors->first('pip') !!}<br>

                                      </div>                                  
                                    @endif

                                    <div class="table-responsive text-center">
                                        <table class="table table-bordered" >
                                            <thead>
                                                <tr>
                                                    
                                                    <th colspan="2">Penduduk Lahir Bulan ini</th>
                                                    <th colspan="2">Mati Bulan Ini</th>
                                                    <th colspan="2">Pendatang Bulan Ini</th>
                                                    <th colspan="2">Pindah Bulan Ini</th>
                                                    
                                                </tr>
                                                <tr>
                                                    <th>L</th>
                                                    <th>P</th>
                                             
                                                    <th>L</th>
                                                    <th>P</th>
                                             
                                                    <th>L</th>
                                                    <th>P</th>
                                             
                                                    <th>L</th>
                                                    <th>P</th>
                                             
                                             
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {!! Form::open(['url' => '/action_wna']) !!}
                                            <tr>
                                                <input type="hidden" name="rw_id" size="3" value="{{ Auth::user()->id }}">
                                                    <td><input type="number" name="pll" size="3" class="form-control"></td>
                                                    <td><input type="number" name="plp" size="3"  class="form-control"></td>
                                                    <td><input type="number" name="ml" size="3"  class="form-control"></td>
                                                    <td><input type="number" name="mp" size="3"  class="form-control"></td>
                                                    <td><input type="number" name="pl" size="3"  class="form-control"></td>
                                                    <td><input type="number" name="pp" size="3"  class="form-control"></td>
                                                    <td><input type="number" name="pil" size="3"  class="form-control"></td>
                                                    <td><input type="number" name="pip" size="3"  class="form-control"></td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td colspan="13"><button type="submit" class="btn btn-success btn btn-block">Simpan data</button></td>
                                            </tr>
                                            {!! Form::close() !!}
                                            </tbody>
                                           <!--  <tfoot>
                                                 <tr>
                                                    <td colspan="3"><button type="button" class="btn btn-success btn-block">Update</button></td>
                                                </tr>
                                            </tfoot> -->
                                        </table>
                                    </div> 

                                    
                                    
                                       
                                       
                                    </div>
                                    <div id="recent" class="tab-pane">
                                        <p>Recent</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
                                    



                                    </div>
                                    <div id="usia" class="tab-pane">
                                        <p>Usia</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
                                    </div>
                                    <div id="usia1" class="tab-pane">
                                        <p>Usia</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
                                    </div>
                                    <div id="usia2" class="tab-pane">
                                        <p>Usia</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
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