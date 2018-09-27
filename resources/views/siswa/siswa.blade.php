@extends('../index')
@extends('siswa.additional')

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
                         {!! Form::select('piket', $selectpicket, null, [ 'class' => 'form-control', 'required' => 'required', 'required' => 'required']); !!}
                         </div>
                         <br>
                         <div class="form-grup">
					               {!! Form::label('NISN', 'NISN') !!}
					               {!! Form::number('NISN', '' ,['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
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
					               {!! Form::number('absen', '',['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
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
                <h3>Data Siswa</h3>
            </div>
            <div class="panel-body">
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
                	@foreach($data_student as $show_student)
                	<?php $no++ ;?>
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$show_student->showclass->nama_kelas}}</td>
                  <td>{{$show_student->piket->hari}}</td>
                  <td>{{$show_student->NISN}}</td>
                  <td>{{$show_student->nama}}</td>
                  <td>{{$show_student->jenis_kelamin}}</td>
                  <td>{{$show_student->absen}}</td>
                  <td>
                  	<button class="btn btn-info" data-toggle="modal" data-target="#edit{{$show_student->id}}">Edit</button>
                  	<button class="btn btn-danger" data-toggle="modal" data-target="#delete{{$show_student->id}}">hapus</button>
                  </td>
                </tr>
                  <div class="modal fade" id="edit{{$show_student->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Siswa</h5>
                                    </div>
                                      {!! Form::open(['route' => ['siswa.update',$show_student->id],'method' => 'PATCH']) !!}
                                    <div class="modal-body">
                                      <div class="form-grup">
                                         {!! Form::label('NISN', 'NISN') !!}
                                         {!! Form::number('NISN', $show_student->NISN ,['class' => 'col-sm-6 form-control', 'disabled' => 'disabled']) !!}
                                         </div>
                                         <div class="form-grup">
                                         {!! Form::label('nama_kelas', 'Nama Kelas') !!}
                                          {!! Form::select('id_kelas', $selectclass, null, [ 'class' => 'form-control', 'required' => 'required', 'required' => 'required']); !!}
                                         </div>

                                         <div class="form-grup">
                                         {!! Form::label('piket', 'Piket') !!}
                                         {!! Form::select('piket', $selectpicket, null, [ 'class' => 'form-control', 'required' => 'required', 'required' => 'required']); !!}
                                         </div>

                                         
                          
                                          <div class="form-grup">
                                         {!! Form::label('nama', 'Nama') !!}
                                         {!! Form::text('nama', $show_student->nama,['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
                                         </div>

                                         <div class="form-grup">
                                         {!! Form::label('jk', 'Jenis Kelamin') !!}
                                         {!! Form::select('jk', ['laki-laki' => 'laki-laki', 'Perempuan' => 'Perempuan'], '',['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
                                         </div>

                                         <div class="form-grup">
                                         {!! Form::label('absen', 'Absen') !!}
                                         {!! Form::number('absen', $show_student->absen,['class' => 'col-sm-6 form-control', 'required' => 'required']) !!}
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
                        <div class="modal fade" id="delete{{$show_student->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete Kelas</h5>
                                    </div>
                                    {!! Form::open(['route' => ['siswa.destroy',$show_student->id],'method' => 'DELETE']) !!}
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
          </div>
         </div>
	</div>


	

@endsection