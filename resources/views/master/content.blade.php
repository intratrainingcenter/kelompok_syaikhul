@extends('../index')
@section('content')
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{$count_siswa}}</h3>

                <p>Jumlah Siswa</p>
            </div>
            <div class="icon">
                <i class="fa fa-user"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{$count_kelas}}</h3>

                <p>Jumlah Kelas</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{$count_mapel}}</h3>

                <p>Jumlah Mapel</p>
            </div>
            <div class="icon">
                <i class="fa fa-book"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{$count_absen}}</h3>

                <p>Siswa Absen</p>
            </div>
            <div class="icon">
                <i class="fa fa-user-times"></i>
            </div>
        </div>
    </div>
</div>

@endsection