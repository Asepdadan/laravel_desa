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
                                    <li class="active">
                                        <a href="{{ URL::to('/agama') }}" >Jumlah Agama</a>
                                    </li>
                                    <li >
                                        <a href="{{ URL::to('/penduduk') }}" >Jumlah Penduduk</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/wna') }}" >WNA</a>
                                    </li>
                                       <li>
                                        <a href="{{ URL::to('/wni') }}" >WNI</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/pendidikan') }}">Pendidikan</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/mata-pencaharian') }}">Mata Pencaharian</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/umur') }}" >Umur</a>
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

                          <div class="row">
                                <section class="panel form-wizard" id="w1">
                                    <header class="panel-heading">
                                        <div class="panel-actions">
                                            
                                        </div>
                        
                                        <h2 class="panel-title">Form Input Kependudukan</h2>
                                    </header>
                                    <div class="panel-body panel-body-nopadding">
                                        <div class="wizard-tabs">
                                            <ul class="wizard-steps">
                                                <li class="active">
                                                    <a href="#w1-agama" data-toggle="tab" class="text-center">
                                                        <span class="badge hidden-xs">1</span>
                                                        Jumlah Agama
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#w1-penduduk" data-toggle="tab" class="text-center">
                                                        <span class="badge hidden-xs">2</span>
                                                       Jumlah Penduduk
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#w1-wna" data-toggle="tab" class="text-center">
                                                        <span class="badge hidden-xs">3</span>
                                                       Jumlah Wna
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#w1-wni" data-toggle="tab" class="text-center">
                                                        <span class="badge hidden-xs">4</span>
                                                       Jumlah Wni
                                                    </a>
                                                </li>
                                                    <li>
                                                    <a href="#w1-pendidikan" data-toggle="tab" class="text-center">
                                                        <span class="badge hidden-xs">5</span>
                                                        Pendidikan
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#w1-mata-pencaharian" data-toggle="tab" class="text-center">
                                                        <span class="badge hidden-xs">6</span>
                                                        Mata Pencaharian
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#w1-umur" data-toggle="tab" class="text-center">
                                                        <span class="badge hidden-xs">7</span>
                                                        Umur
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                   {!! Form::open(['url' => '/action_input_kependudukan'])!!}
                                        <!-- <form class="form-horizontal" novalidate="novalidate" action="" > -->
                                            <input type="hidden" name="rw_id" size="3" value="{{ Auth::user()->id }}">
                                            <div class="tab-content">
                                                <div id="w1-agama" class="tab-pane active">
                                                <br>
                                                      <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="6"  class="text-center">Agama</th>
                                                                </tr>
                                                                <tr>
                                                                @foreach($agama as $row)
                                                                    <th class="text-center">{{$row->agama }}</th>
                                                                    @endforeach
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            
                                                                <tr>
                                                                        @foreach($agama as $row)
                                                                        <td><input type="number" name="agama{{$row->id}}" class="form-control" required></td>
                                                                        @endforeach
                                                                </tr>
                                                            
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                                <div id="w1-penduduk" class="tab-pane">
                                                <br>
                                              <div class="table-responsive text-center">
                                                    <table class="table table-bordered" >
                                                        <thead >
                                                            <tr >
                                                                <th colspan="2" rowspan="2" class="text-center">Jumlah UMPI</th>
                                                                <th colspan="3" class="text-center">Jumlah Penduduk</th>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">WNI</th>
                                                                <th colspan="2">WNA</th>
                                                            </tr>
                                                            <tr>
                                                                <th>WNI</th>
                                                                <th>WNA</th>
                                                                <th>L</th>
                                                                <th>P</th>
                                                                  <th>L</th>
                                                                <th>P</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                                <td><input type="number" name="Umpiwni" size="3" class="form-control" required></td>
                                                                <td><input type="number" name="Umpiwna" size="3" class="form-control" required></td>
                                                                <td><input type="number" name="Wnil" size="3" class="form-control" required></td>
                                                                <td><input type="number" name="Wnip" size="3" class="form-control" required></td>
                                                                <td><input type="number" name="Wnal" size="3" class="form-control" required></td>
                                                                <td><input type="number" name="Wnap" size="3" class="form-control" required></td>
                                                        </tr>                                                       
                                                        </tbody>
                                                    </table>
                                                </div> 


                                                </div>
                                                 <div id="w1-wna" class="tab-pane">
                                                    
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
                                                            
                                                            <tr>
                                                                    <td><input type="number" name="Wnapll" size="3" class="form-control" required></td>
                                                                    <td><input type="number" name="Wnaplp" size="3"  class="form-control" required></td>
                                                                    <td><input type="number" name="Wnaml" size="3"  class="form-control" required></td>
                                                                    <td><input type="number" name="Wnamp" size="3"  class="form-control" required></td>
                                                                    <td><input type="number" name="Wnapl" size="3"  class="form-control" required></td>
                                                                    <td><input type="number" name="Wnapp" size="3"  class="form-control" required></td>
                                                                    <td><input type="number" name="Wnapil" size="3"  class="form-control" required></td>
                                                                    <td><input type="number" name="Wnapip" size="3"  class="form-control" required></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div> 
                                                </div>
                                                <div id="w1-wni" class="tab-pane">
                                                    
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
                                                                
                                                                <tr>
                                                                        
                                                                        <td><input type="number" name="Wnipll" size="3" class="form-control" required></td>
                                                                        <td><input type="number" name="Wniplp" size="3"  class="form-control" required></td>
                                                                        <td><input type="number" name="Wniml" size="3"  class="form-control" required></td>
                                                                        <td><input type="number" name="Wnimp" size="3"  class="form-control" required></td>
                                                                        <td><input type="number" name="Wnipl" size="3"  class="form-control" required></td>
                                                                        <td><input type="number" name="Wnipp" size="3"  class="form-control" required></td>
                                                                        <td><input type="number" name="Wnipil" size="3"  class="form-control" required></td>
                                                                        <td><input type="number" name="Wnipip" size="3"  class="form-control" required></td>
                                                                </tr>                                            
                                                                </tbody>
                                                            </table>
                                                        </div> 


                                                                    </div>
                                                                    <div id="w1-pendidikan" class="tab-pane">
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
                                                                            
                                                                            @foreach($pendidikan as $row)
                                                                                <tr>
                                                                                        <td></td>
                                                                                        <td>{{ $row->pendidikan }}</td>
                                                                                    <input type="hidden" size="3" name="Pendidikan{{ $row->id}}" class="form-control">
                                                                                    <td><input type="number" size="3" name="Pendidikanwnil{{ $row->id}}" class="form-control"></td>
                                                                                    <td><input type="number" size="3" name="Pendidikanwnip{{ $row->id}}" class="form-control"></td>
                                                                                    <td><input type="number" size="3" name="Pendidikanwnal{{ $row->id}}" class="form-control"></td>
                                                                                    <td><input type="number" size="3" name="Pendidikanwnap{{ $row->id}}" class="form-control"></td>
                                                                                </tr>
                                                                                @endforeach
                                                                                </tbody>
                                                                               
                                                                            </table>
                                                                        </div> 


                                                                    </div>
                                                                    <div id="w1-mata-pencaharian" class="tab-pane">
                                                                        
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
                                                                
                                                                @foreach($pencaharian as $row)
                                                                <tr>
                                                              
                                                                        <td></td>
                                                                    <input type="hidden" size="3" name="Pencaharian{{$row->id}}" class="form-control">
                                                                        <td class="text-left">{{ $row->pencaharian}}   </td>
                                                                    <td><input type="number" size="3" name="Pencaharianwnil{{$row->id}}" class="form-control"></td>
                                                                    <td><input type="number" size="3" name="Pencaharianwnip{{$row->id}}" class="form-control"></td>
                                                                    <td><input type="number" size="3" name="Pencaharianwnal{{$row->id}}" class="form-control"></td>
                                                                    <td><input type="number" size="3" name="Pencaharianwnap{{$row->id}}" class="form-control"></td>
                                                                </tr>
                                                            @endforeach                                         
                                                                </tbody>
                                                               
                                                            </table>
                                                        </div> 


                                                                    </div>
                                                    <div id="w1-umur" class="tab-pane">
                                                               
                                                            <div class="table-responsive text-center">
                                                            <table class="table table-bordered" >
                                                                <thead>
                                                                    <tr>
                                                                        <th rowspan="2" >Umur </th>
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
                                                                
                                                                @foreach($umur as $row)
                                                                <tr>
                                                                        <input type="hidden" name="umur{{$row->id}}">  
                                                                        <td>{{$row->umur}}</td>
                                                                        <td><input type="number" name="Umurwnil{{$row->id}}" size="3" class="form-control"></td>
                                                                        <td><input type="number" name="Umurwnip{{$row->id}}" size="3" class="form-control"></td>
                                                                        <td><input type="number" name="Umurwnal{{$row->id}}" size="3" class="form-control"></td>
                                                                        <td><input type="number" name="Umurwnap{{$row->id}}" size="3" class="form-control"></td>
                                                                </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div> 
                                                        <button type="submit" class="btn btn-success">button</button>

                                                </div>
                                            </div>
                                          </form>    
                                
                                   
                                    </div>
                                    <div class="panel-footer">
                                        <ul class="pager">
                                            <li class="previous disabled">
                                                <a><i class="fa fa-angle-left"></i> Sebelumnya</a>
                                            </li>
                                            <li class="finish hidden pull-right">
                                                <a href="">Simpan Data</a>
                                            </li>
                                            <li class="next">
                                                <a>Selanjutnya <i class="fa fa-angle-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                  
                                </section>
                            
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
 {!! Html::script('assets/porto/assets/javascripts/forms/examples.wizard.js') !!}

@stop