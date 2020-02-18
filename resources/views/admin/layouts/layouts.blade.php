
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

	<title>Patrona Admin Page</title>
	 <!--Counter js -->
	 
	 
		<!-- Bootstrap Core CSS -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
		<!-- Menu CSS -->
		<link href="{{asset('css/sidebar-nav.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/redactor.css')}}" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="{{asset('css/style.css')}}" rel="stylesheet">
		<!-- color CSS -->
		<link href="{{asset('css/default.css')}}" id="theme" rel="stylesheet">
		 <!-- style cho button -->
 		<link rel="stylesheet" href="{{asset('css/highlight.css')}}">
		 <!-- font -->
		 <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{asset('js/jquery.min.js')}}"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<!-- Menu Plugin JavaScript -->
		<script src="{{asset('js/sidebar-nav.min.js')}}"></script>
		<!--slimscroll JavaScript -->
		<script src="{{asset('js/jquery.slimscroll.js')}}"></script>
		<script src="{{asset('js/custom.js')}}"></script>
		<script src="{{asset('js/redactor.min.js')}}"></script>
		<!-- chart javascript -->
		<script src="{{asset('js/Chart.min.js')}}"></script>
	</head>
	<body class="fix-header">
		
		<div id="wrapper">
			<!-- header -->
			@include("admin.partials.header")
			<!-- sidebar -->
			@include("admin.partials.sidebar")

			<!-- ============================================================== -->
			<!-- Page Content -->
			<!-- ============================================================== -->
			<div id="page-wrapper">
				<div class="container-fluid">	
				<!-- --------------phan noi dung --------- -->
				@yield('content')
	
				</div>
					<!-- footer -->
					@include("admin.partials.footer")
			</div>
				<!-- ============================================================== -->
				<!-- End Page Content -->
				<!-- ============================================================== -->
		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->
		
		<script type="text/javascript">
			$(document).ready(
				function()
				{
					$('#content').redactor();
				}
			);
			function getPer(){
				var per=document.getElementById('readPer').value;
				if(per=="manager"){
					alert("You do not have permission for this action!");
					
				}

			}
		</script>
	</body>
</html>

