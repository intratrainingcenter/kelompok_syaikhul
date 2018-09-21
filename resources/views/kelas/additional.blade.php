@section('header')
	<!-- untuk css kamu -->
	<link rel="stylesheet" href="{{asset('template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('footer')
	<!-- Untuk Javascript kamu -->
	<script src="{{asset('template/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('template/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript">

		$(document).ready(function(){
			$('#example2').datatables();
		});
		
	</script>
@endsection