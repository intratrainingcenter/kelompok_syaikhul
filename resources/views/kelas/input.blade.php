@extends('../index')
@extends('kelas.additional')

@section('content')
	<div>
		<h2>Input Kelas</h2>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            {!! Form::open(['route' => 'kelas.create']) !!}
            <div class="form-grup">
               {!! Form::label('nama_kelas', 'Nama Kelas',['class' => 'col-sm-6 control-label']) !!}
               {!! Form::label('nama_ruang', 'Nama Ruang',['class' => 'col-sm-6 control-label']) !!}
            </div>
            <div class="form-grup">
               {!! Form::text('nama_kelas', '' ,['class' => 'col-sm-6 control-label']) !!}
               {!! Form::text('nama_kelas', '',['class' => 'col-sm-6 control-label']) !!}
            </div>
            <br><br><br>
            <div class="form-grup">
              {!! Form::submit('Batal',['class' => 'btn btn-danger']) !!}
              {!! Form::submit('Simpan',['class' => 'btn btn-info']) !!}
            </div>
            {!! Form::close() !!}
          </div>
         </div>
	    </div>
	</div>

@endsection