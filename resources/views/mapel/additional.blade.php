@section('header')
  <link rel="stylesheet" href="{{asset('template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('footer')
<script src="{{asset('template/bower_components/datatables.net/js/jquery.dataTables.min.js')}} "></script>
<script src="{{asset('template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}} "></script>
<script>
    $(document).ready( function () {
        $('#example').DataTable();
    } );
</script>
@endsection