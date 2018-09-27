@extends('../index')
@extends('kelas.additional')

@section('content')
	<div class="row">
        @if (session('alert_success'))
        <div style="position: absolute; z-index: 999; right: -10px; " class="col-md-6 notifberhasil">
          <div class="notif alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{session('alert_success')}}
          </div>
        </div>
        @elseif(session('alert_fail'))
        <div style="position: absolute; z-index: 999; right: -10px; " class="col-md-6 notifberhasil">
          <div class="notif alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{session('alert_fail')}}
          </div>
        </div>
      @endif
		<div class="col-md-6">
			        <div class="panel panel-default" width="50%">
			            <div class="panel-heading">
			                <h4>Tambah Kelas</h4>
			            </div>
			            <div class="panel-body">
			                {!! Form::open(['route' => 'kelas.index']) !!}
			                    <div class="form-grup">
					               {!! Form::label('nama_kelas', 'Nama Kelas') !!}
					               {!! Form::text('nama_kelas', '' ,['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
					            </div>
                                <br><br>
			                    <div class="form-grup">
					               {!! Form::label('nama_ruang', 'Nama Ruang') !!}
					               {!! Form::text('nama_ruang', '',['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
                                </div>
                                <br><br>
			                    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}

			                {!! Form::close() !!}
			            </div>
			        </div>
			    </div>
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Data Kelas</h3>
            </div>
            <div class="panel-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kelas</th>
                  <th>Ruang Kelas</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                	<?php $no = 0;?>
                	@foreach($data_class as $view_class)
                	<?php $no++ ;?>
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$view_class->nama_kelas}}</td>
                  <td>{{$view_class->ruang}}</td>
                  <td>
                  	<button class="btn btn-info" data-toggle="modal" data-target="#edit{{$view_class->id}}">Edit</button>
                  	<button class="btn btn-danger" data-toggle="modal" data-target="#delete{{$view_class->id}}">hapus</button>
                  </td>
                </tr>
                  <div class="modal fade" id="edit{{$view_class->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Kelas</h5>
                                    </div>
                                      {!! Form::open(['route' => ['kelas.update',$view_class->id],'method' => 'PATCH']) !!}
                                    <div class="modal-body">
                                          <div class="form-grup">
                                         {!! Form::label('nama_kelas', 'Nama Kelas') !!}
                                         {!! Form::text('nama_kelas', $view_class->nama_kelas ,['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
                                         {!! Form::hidden('id_kelas', $view_class->id ) !!}
                                        </div>
                          
                                          <div class="form-grup">
                                         {!! Form::label('nama_ruang', 'Nama Ruang') !!}
                                         {!! Form::text('nama_ruang', $view_class->ruang,['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
                                          </div>
                                    </div>
                                    <br><br><br>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                      {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                                    </div>
                                      {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="delete{{$view_class->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete Kelas</h5>
                                    </div>
                                    {!! Form::open(['route' => ['kelas.destroy',$view_class->id],'method' => 'DELETE']) !!}
                                    <div class="modal-body">
                                        Yakin Ingin Menghapus
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                  	@endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
         </div>

	</div>


	

@endsection