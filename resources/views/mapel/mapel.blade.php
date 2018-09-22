@extends('index')
@extends('mapel/additional')
@section('content')
<div class="row">
    @if (isset($oputput))
    aa
    @endif
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Data Mapel</h3>
            </div>
            <div class="panel-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelas</th>
                            <th>Hari</th>
                            <th>Kode Pelajaran</th>
                            <th>Pelajaran</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_mapel as $index => $data)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$data->getkelas->nama_kelas}}</td>
                            <td>{{$data->hari}}</td>
                            <td>{{$data->kode_pelajaran}}</td>
                            <td>{{$data->pelajaran}}</td>
                            <td>
                                <button class="btn btn-warning" data-toggle="modal" data-target="#edit{{$data->id}}">Edit</button>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id}}">hapus</button>
                            </td>
                        </tr>

                        <div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Mapel</h5>
                                    </div>
                                    {!! Form::open(['url' => '/mapel/'.$data->id , 'method' => 'PATCH']) !!}
                                    <div class="modal-body">
                                        {!! Form::label('hari', 'Hari'); !!}
                                        {!! Form::text('hari', $data->hari , ['class' => 'form-control' , 'required' => 'required']) !!}
                                        <br>
                                        {!! Form::label('', 'Kelas'); !!}
										{!! Form::select('id_kelas', $selectkelas, null, [ 'class' => 'form-control', 'required' => 'required']); !!}
										<br>
                                        {!! Form::label('', 'Kode Pelajaran'); !!}
                                        {!! Form::text('kode_pelajaran', $data->kode_pelajaran , ['class' => 'form-control' , 'required' => 'required']) !!}
                                        <br>
                                        {!! Form::label('', 'Pelajaran'); !!}
                                        {!! Form::text('pelajaran', $data->pelajaran , ['class' => 'form-control' , 'required' => 'required']) !!}
                                        <br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="delete{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete Mapel</h5>
                                    </div>
                                    {!! Form::open(['url' => '/Mapel/'.$data->id , 'method' => 'DELETE']) !!}
                                    <div class="modal-body">
                                        Apakah Anda Yakin Menghapus {{$data->hari}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
    <div class="col-md-6">

        <div class="panel panel-default" width="50%">
            <div class="panel-heading">
                <h3>Tambah Piket</h3>
            </div>
            <div class="panel-body">
                {!! Form::open(['url' => '/mapel']) !!}
				{!! Form::label('', 'Kelas'); !!}
                {!! Form::select('id_kelas', $selectkelas, null, [ 'class' => 'form-control', 'required' => 'required', 'required' => 'required']); !!}

				<br>
				{!! Form::label('hari', 'Hari'); !!}
                {!! Form::text('hari', '', ['class' => 'form-control' , 'placeholder' => 'Masukkan Hari ', 'required' => 'required', 'required' => 'required']) !!}
				<br>
				{!! Form::label('kode_pelajaran', 'Kode Pelajaran'); !!}
                {!! Form::text('kode_pelajaran', '', ['class' => 'form-control' , 'placeholder' => 'Masukkan Kode Pelajaran ', 'required' => 'required', 'required' => 'required']) !!}
				<br>

				{!! Form::label('', 'Pelajaran'); !!}
                {!! Form::text('pelajaran', '', ['class' => 'form-control' , 'placeholder' => 'Masukkan Pelajaran ', 'required' => 'required', 'required' => 'required']) !!}

                <br>
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection