@extends('../index')
@extends('kelas.additional')

@section('content')
	<div>
		<h2>Data Kelas</h2>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- <div class="box-header">
              <h3 class="box-title">Data Kelas</h3>
            </div> -->
            <div class="panel panel-default">
<!-- 			    <div class="panel-heading">
			        <h3>Tambah Kelas</h3>
			    </div> -->
			    <div class="panel-body">
			        <button class="btn btn-info">Tambah Kelas</button>
			    </div>
			</div>
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
                <tr>
                	<?php $no = 0;?>
                	@foreach($data as $data)
                	<?php $no++ ;?>
                  <td>{{$no}}</td>
                  <td>{{$data->nama_kelas}}</td>
                  <td>{{$data->ruang}}</td>
                  <th>
                  	<button class="btn btn-info">Edit</button>
                  	<button class="btn btn-danger">hapus</button>
                  </th>
                  	@endforeach
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
         </div>
	</div>
	</div>

	<div class="modal modal-danger fade" id="modal-input">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Kelas</h4>
        </div>
        <div class="modal-body">
        <form class="form-horizontal" action="{{ route('kategori.input')}}" method="post">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Kategori</label>

                <div class="col-sm-10">
                  <input type="POST" class="form-control" name="nama_kategori">
                </div>
              </div>

            </div>
            @method('POST')
            @csrf
            <!-- /.box-body -->

            <!-- /.box-footer -->
            <div class="modal-footer">
            <button id="submit" type="submit" class="btn btn-outline" >Simpan</button>
            <button type="button" class="btn btn-outline" data-dismiss="modal">Kembali</button>
            </div>
          </form>

        </div>
      <!-- /.modal-content -->
      </div>
    <!-- /.modal-dialog -->
    </div>

</div>

@endsection