
<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
	<div class="navbar-header">
		<div class="top-left-part">
			<!-- Logo -->
			<a  href="index.html" >
				<!-- Logo icon image, you can use font-icon also -->
				<b>
				<img src="{{asset('/img/team.png')}}" class="u-img" style="width:72px" />
					<!--This is dark logo icon-->
					<span style="color:#000">ProTeam</span>
					<!--This is light logo icon-->
					
				</b>
				<!-- Logo text image you can use text also -->
				
			</a>
		</div>
		<!-- /Logo -->
		<!-- Search input and Toggle icon -->
		<ul class="nav navbar-top-links navbar-left">
			<li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
		
			<!-- .Task dropdown -->
			
			<!-- .Megamenu -->
			
			<!-- /.Megamenu -->
		</ul>
		<form method="POST"> 
		<ul class="nav navbar-top-links navbar-right pull-right">
			

			
			<li class="dropdown">
				<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
					<img src="{baseUrl}admin/img/{userImg}" alt="user-img" width="36" class="img-circle">
					<b class="hidden-xs">{username}</b>
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu dropdown-user animated flipInY">
					<li>
						<div class="dw-user-box">
							<div class="u-img">
								<img src="{baseUrl}admin/img/{userImg}" alt="user" />
							</div>
							<div class="u-text">
								<h4>{username}</h4>
								<p class="text-muted">{email}</p>
								
							</div>
						</div>
					</li>
					
					<li role="separator" class="divider"></li>
					<li>
						<a href="{baseUrl}admin/?m=table&a=viewuser&id={id}">
							<i class="ti-user"></i> My Profile
						</a>
					</li>
					
					
					<li role="separator" class="divider"></li>
					<li>
						<a href="{baseUrl}admin/?m=table&a=account">
							<i class="ti-settings"></i> Account Setting
						</a>
					</li>
					<li role="separator" class="divider"></li>
					<li>
						<a>
							<i class="fa fa-power-off"></i> <button type="submit" class="btn btn-success " value="Logout" name="txtLogout">Logout</button>
						</a>
					</li>
				</ul>
					<!-- /.dropdown-user -->
			</li>
				<!-- /.dropdown -->
		</ul>
	</form>
	</div>
	<!-- /.navbar-header -->
	<!-- /.navbar-top-links -->
	<!-- /.navbar-static-side -->
</nav>
<!-- End Top Navigation -->
