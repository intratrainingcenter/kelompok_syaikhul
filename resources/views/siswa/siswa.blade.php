@extends('../index')
@extends('siswa.additional')

@section('content')
	<div>
		<h2>Data Siswa</h2>
		<div class="col-md-6">
			        <div class="panel panel-default" width="50%">
			            <div class="panel-heading">
			                <h4>Tambah Siswa</h4>
			            </div>
			            <div class="panel-body">
			                {!! Form::open(['route' => 'siswa.index']) !!}
			                    <div class="form-grup">
                         {!! Form::label('nama_kelas', 'Nama Kelas') !!}
                         {!! Form::select('id_kelas', $selectclass, null, [ 'class' => 'form-control', 'required' => 'required', 'required' => 'required']); !!}
                         </div>
                         <br>
                         <div class="form-grup">
                         {!! Form::label('piket', 'Piket') !!}
                         {!! Form::select('piket', $selectpijket, null, [ 'class' => 'form-control', 'required' => 'required', 'required' => 'required']); !!}
                         </div>
                         <br>
                         <div class="form-grup">
					               {!! Form::label('NISN', 'NISN') !!}
					               {!! Form::text('NISN', '' ,['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
					               </div>
                                   <br><br>
			                    <div class="form-grup">
                         {!! Form::label('nama', 'Nama') !!}
                         {!! Form::text('nama', '',['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
                         </div>
                         <br><br>
                         <div class="form-grup">
                         {!! Form::label('jk', 'Jenis Kelamin') !!}
                         {!! Form::select('jk', ['laki-laki' => 'laki-laki', 'Perempuan' => 'Perempuan'], '',['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
                         </div>
                         <br><br>
                         <div class="form-grup">
					               {!! Form::label('absen', 'Absen') !!}
					               {!! Form::text('absen', '',['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
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
                  <th>Nama Kelas</th>
                  <th>Piket</th>
                  <th>NISN</th>
                  <th>Nama Siswa</th>
                  <th>Jenis Kelamin</th>
                  <th>No Absen</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                	<?php $no = 0;?>
                	@foreach($data as $data)
                	<?php $no++ ;?>
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$data->showclass->nama_kelas}}</td>
                  <td>{{$data->piket->hari}}</td>
                  <td>{{$data->NISN}}</td>
                  <td>{{$data->nama}}</td>
                  <td>{{$data->jenis_kelamin}}</td>
                  <td>{{$data->absen}}</td>
                  <td>
                  	<button class="btn btn-info" data-toggle="modal" data-target="#edit{{$data->id}}">Edit</button>
                  	<button class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id}}">hapus</button>
                  </td>
                </tr>
                  <div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Siswa</h5>
                                    </div>
                                      {!! Form::open(['route' => ['siswa.update',$data->id],'method' => 'PATCH']) !!}
                                    <div class="modal-body">
                                         <div class="form-grup">
                                         {!! Form::label('nama_kelas', 'Nama Kelas') !!}
                                          {!! Form::select('id_kelas', $selectclass, null, [ 'class' => 'form-control', 'required' => 'required', 'required' => 'required']); !!}
                                         </div>

                                         <div class="form-grup">
                                         {!! Form::label('piket', 'Piket') !!}
                                         {!! Form::select('piket', $selectpijket, null, [ 'class' => 'form-control', 'required' => 'required', 'required' => 'required']); !!}
                                         </div>

                                         <div class="form-grup">
                                         {!! Form::label('NISN', 'NISN') !!}
                                         {!! Form::text('NISN', $data->NISN ,['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
                                         </div>
                          
                                          <div class="form-grup">
                                         {!! Form::label('nama', 'Nama') !!}
                                         {!! Form::text('nama', $data->nama,['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
                                         </div>

                                         <div class="form-grup">
                                         {!! Form::label('jk', 'Jenis Kelamin') !!}
                                         {!! Form::select('jk', ['laki-laki' => 'laki-laki', 'Perempuan' => 'Perempuan'], '',['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
                                         </div>

                                         <div class="form-grup">
                                         {!! Form::label('absen', 'Absen') !!}
                                         {!! Form::text('absen', $data->absen,['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
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
                                    {!! Form::open(['route' => ['siswa.destroy',$data->id],'method' => 'DELETE']) !!}
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

	</div>


	

@endsection