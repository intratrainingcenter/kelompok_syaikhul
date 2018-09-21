@extends('../index')
@extends('kelas.additional')

@section('content')
	<div>
		<h2>Data Kelas</h2>
		<div class="col-md-6">
			        <div class="panel panel-default" width="50%">
			            <div class="panel-heading">
			                <h4>Tambah Kelas</h4>
			            </div>
			            <div class="panel-body">
			                {!! Form::open(['route' => 'kelas.index']) !!}
			                    <div class="form-grup">
					               {!! Form::label('nama_kelas', 'Nama Kelas',['class' => 'col-sm-6 form-control']) !!}
					               {!! Form::text('nama_kelas', '' ,['class' => 'col-sm-6 form-control']) !!}
					            </div>
					
			                    <div class="form-grup">
					               {!! Form::label('nama_ruang', 'Nama Ruang',['class' => 'col-sm-6 form-control']) !!}
					               {!! Form::text('nama_ruang', '',['class' => 'col-sm-6 form-control']) !!}
					            </div>
			                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

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
                  <th>Ruang Kelas</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                	<?php $no = 0;?>
                	@foreach($data as $data)
                	<?php $no++ ;?>
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$data->nama_kelas}}</td>
                  <td>{{$data->ruang}}</td>
                  <td>
                  	<button class="btn btn-info">Edit</button>
                  	<button class="btn btn-danger">hapus</button>
                  </td>
                </tr>
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