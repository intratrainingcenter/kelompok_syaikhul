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
					               {!! Form::label('siswa', 'Nama siswa',['class' => 'col-sm-6 form-control']) !!}
					               {!! Form::text('siswa', '' ,['class' => 'col-sm-6 form-control']) !!}
					               </div>
					
			                   <div class="form-grup">
                         {!! Form::label('lama', 'lama',['class' => 'col-sm-6 form-control']) !!}
                         {!! Form::text('lama', '',['class' => 'col-sm-6 form-control']) !!}
                         </div>

                         <div class="form-grup">
					               {!! Form::label('keterangan', 'Keterangan',['class' => 'col-sm-6 form-control']) !!}
					               {!! Form::text('keterangan', '',['class' => 'col-sm-6 form-control']) !!}
					               </div>
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
                  <th>Nama Siswa</th>
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
                  <td>{{$data->id_kelas}}</td>
                  <td>{{$data->lama}}</td>
                  <td>{{$data->keterangan}}</td>
                  <td>
                  	<button class="btn btn-info" data-toggle="modal" data-target="#edit{{$data->id}}">Edit</button>
                  	<button class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id}}">hapus</button>
                  </td>
                </tr>
                  <!-- <div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Kelas</h5>
                                    </div>
                                      {!! Form::open(['route' => ['kelas.update',$data->id],'method' => 'PATCH']) !!}
                                    <div class="modal-body">
                                          <div class="form-grup">
                                         {!! Form::label('nama_kelas', 'Nama Kelas',['class' => 'col-sm-6 form-control']) !!}
                                         {!! Form::text('nama_kelas', '' ,['class' => 'col-sm-6 form-control']) !!}
                                        </div>
                          
                                          <div class="form-grup">
                                         {!! Form::label('nama_ruang', 'Nama Ruang',['class' => 'col-sm-6 form-control']) !!}
                                         {!! Form::text('nama_ruang', '',['class' => 'col-sm-6 form-control']) !!}
                                          </div>
                                    </div>
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
                                    {!! Form::open(['route' => ['kelas.destroy',$data->id],'method' => 'DELETE']) !!}
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
                        </div> -->
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