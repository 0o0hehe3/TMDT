<body>
	<div id = "wrapper">
		<div id="mobile-menu">
			<a id="responsive-menu-button" class = "btn btn-default" href="#mobile-menu"><i class = "glyphicon glyphicon-menu-hamburger"></i></a>
		</div>
		<!--side left-->
		<div class = "sidebar col-sm-2">
			<h1 class = "sidebar-title">Simpla Admin</h1> 
			<div class = "sidebar-profile">
				<span>Hello,</span>
				<a href = "#">
					@if(Auth:check())
						{{ Auth::user()->name }}
					@endif
				</a>
				<br>
				<br>
				<a href = "{{ route('admin.logout') }}" title = "sign out">Sign Out</a>
			</div>
			<div class = "sidebar-menu">
				<ul class = "sidebar-menu-wrap list-group">
					<li class= "list-group-item">
						<a href = "#" class = "active">Dashboard</a>
					</li>
					<li class= "list-group-item">
						<a href = "#">Quản lý danh mục</a>
						<ul>
							<li>
								<a href = "{{ route('category.add') }}">Thêm mới...</a>
							</li>
						</ul>
					</li>
					<li class= "list-group-item">
						<a href = "#">Articals</a>
						<ul>
							<li>
								<a href = "#">Write a new Article</a>
							</li>
							<li>
								<a href = "#">Manage Articles</a>
							</li>
							<li>
								<a href = "#">Manage Comments</a>
							</li>
							<li>
								<a href = "#">Manage Categories</a>
							</li>
						</ul>
					</li>
					<li class= "list-group-item">
						<a href = "#">User</a>
						<ul>
							<li>
								<a href = "?layout=list_user">Manage User</a>
							</li>
							<li>
								<a href = "#">Watch Profile</a>
							</li>
							<li>
								<a href = "#">Change Password</a>
							</li>
						</ul>
					</li>
					<li class= "list-group-item">
						<a href = "#">Images Galery</a>
						<ul>
							<li>
								<a href = "#">Upload Images</a>
							</li>
							<li>
								<a href = "#">Manage Galleries</a>
							</li>
							<li>
								<a href = "#">Manage Albums</a>
							</li>
							<li>
								<a href = "#">Gallery Settings</a>
							</li>

						</ul>
					</li>
					<li class= "list-group-item">
						<a href = "#" >Events Calendar</a>
						<ul>
							<li>
								<a href = "#">Calendar Overview</a>
							</li>
							<li>
								<a href = "#"> Add a new Event</a>
							</li>
							<li>
								<a href = "#">Calendar Settings</a>
							</li>

						</ul>
					</li>
					<li class= "list-group-item">
						<a href = "#" >Setting</a>
						<ul>
							<li>
								<a href = "#">General</a>
							</li>
							<li>
								<a href = "#">Design</a>
							</li>
							<li>
								<a href = "#">Your Profile</a>
							</li>
							<li>
								<a href = "#">Users and Permissions</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- end side-left -->