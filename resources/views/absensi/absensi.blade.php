@extends('../index')
@extends('absensi.additional')

@section('content')
	<div>
		<h2>Data Absensi</h2>
		<div class="col-md-6">
			        <div class="panel panel-default" width="50%">
			            <div class="panel-heading">
			                <h4>Tambah Absensi</h4>
			            </div>
			            <div class="panel-body">
			                {!! Form::open(['route' => 'absensi.index']) !!}
			                    <div class="form-grup">
					               {!! Form::label('NISN', 'NISN') !!}
					               {!! Form::text('NISN', '' ,['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
					               </div>
                                   <br>
			                   <div class="form-grup">
                         {!! Form::label('lama', 'lama') !!}
                         {!! Form::text('lama', '',['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
                         </div>
                         <br>
                         <div class="form-grup">
					               {!! Form::label('keterangan', 'Keterangan') !!}
					               {!! Form::select('keterangan', ['sakit' => 'sakit', 'ijin' => 'ijin', 'alpa' => 'alpa'], '',['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
                                   </div>
                                   <br><br>
                                {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
			                {!! Form::close() !!}
			            </div>
			        </div>
			    </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NISN</th>
                  <th>Nama siswa</th>
                  <th>Lama</th>
                  <th>keterangan</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                	<?php $no = 0;?>
                	@foreach($data as $data)
                	<?php $no++ ;?>
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$data->NISN}}</td>
                  <td>{{$data->namesiswa->nama}}</td>
                  <td>{{$data->lama}} Hari</td>
                  <td>{{$data->keterangan}}</td>
                  <td>
                  	<button class="btn btn-info" data-toggle="modal" data-target="#edit{{$data->id}}">Edit</button>
                  	<button class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id}}">hapus</button>
                  </td>
                </tr>
                  <div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Absensi NISN {{$data->NISN}}</h5>
                                    </div>
                                      {!! Form::open(['route' => ['absensi.update',$data->id],'method' => 'put']) !!}
                                    <div class="modal-body">
                                          <div class="form-grup">
                                         {!! Form::label('lama', 'Lama') !!}
                                         {!! Form::text('lama', $data->lama,['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
                                          </div>
                                          <div class="form-grup">
                                           {!! Form::label('keterangan', 'Keterangan') !!}
                                           {!! Form::select('keterangan', ['sakit' => 'sakit', 'ijin' => 'ijin', 'alpa' => 'alpa'], $data->keterangan,['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
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
                        <div class="modal fade" id="delete{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete Kelas</h5>
                                    </div>
                                    {!! Form::open(['route' => ['absensi.destroy',$data->id],'method' => 'DELETE']) !!}
                                    <div class="modal-body">
                                        Yakin Ingin Menghapus Absensi {{$data->NISN}}
                                    </div>
                                    <br><br>
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

	</div>


	

@endsection