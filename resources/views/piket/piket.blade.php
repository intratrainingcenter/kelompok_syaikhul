@extends('index')
@extends('piket/additional')
@section('content')
<div class="row">
    <div class="col-md-6">

        <div class="panel panel-default" width="50%">
            <div class="panel-heading">
                <h3>Tambah Piket</h3>
            </div>
            <div class="panel-body">
                {!! Form::open(['url' => '/piket']) !!}
                {!! Form::label('hari', 'Hari'); !!}
                {!! Form::text('hari', '', ['class' => 'form-control' , 'placeholder' => 'Masukkan hari Piket' , 'required' => 'required']) !!}
                <br>
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Data Piket</h3>
            </div>
            <div class="panel-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Hari</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_piket as $index => $data)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$data->hari}}</td>
                            <td>
                                <button class="btn btn-warning" data-toggle="modal" data-target="#edit{{$data->id}}">Edit</button>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id}}">hapus</button>
                            </td>
                        </tr>

                        <div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Piket</h5>
                                    </div>
                                    {!! Form::open(['url' => '/piket/'.$data->id , 'method' => 'PATCH']) !!}
                                    <div class="modal-body">
                                        {!! Form::label('hari', 'Hari'); !!}
                                        {!! Form::text('hari', $data->hari , ['class' => 'form-control' , 'required' => 'required']) !!}
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
                                        <h5 class="modal-title">Delete Piket</h5>
                                    </div>
                                    {!! Form::open(['url' => '/piket/'.$data->id , 'method' => 'DELETE']) !!}
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
    
</div>
@endsection