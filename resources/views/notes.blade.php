<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Notepad | Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('css/notes.css')}}" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	
	<section id="nav-bar">
	
		<nav class="navbar bg-body-tertiary">
			<form method="post" action="{{url('/')}}/search">
				@csrf
				<div class="input-group">
					<a class="navbar-brand" href="{{url('/')}}/home">Qtec Solution</a>
					<input type="text" class="form-control" placeholder="Search Note by title" aria-label="Username" aria-describedby="basic-addon1" name="find" required>
					<input type="submit" class="btn" value="Find">
				</div>
			</form>
		</nav>
		<div class="side_bar">
			<div class="position-sticky pt-3 sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="{{url('/')}}/home">
							<span class="material-symbols-outlined attr">home</span>
							Dashboard
							
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="#">
							<span class="material-symbols-outlined">
								draft
							</span>
							Saved Notes
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="material-symbols-outlined">
								garden_cart
							</span>
							Products
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="material-symbols-outlined">
								contacts_product
							</span>
						  Customers
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="material-symbols-outlined">
								bar_chart
							</span>
						  Reports
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="material-symbols-outlined">
								stacks
							</span>
							Integrations
						</a>
					</li>
				</ul>

				<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
					<span>Saved reports</span>
					<a class="link-secondary" href="#" aria-label="Add a new report">
						<span data-feather="plus-circle" class="align-text-bottom"></span>
					</a>
				</h6>
				<ul class="nav flex-column mb-2">
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="material-symbols-outlined">
							description
							</span>
							Current month
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="material-symbols-outlined">
							description
							</span>
							Last quarter
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="material-symbols-outlined">
							description
							</span>
							Social engagement
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="material-symbols-outlined">
							description
							</span>
							Year-end sale
						</a>
					 </li>
				</ul>
			</div>
		</div>
	</section>
	<section class="body-cont">
		<div class="cont1">
			<h1>Your Notes</h1>
			<!-- <pre>
				{{print_r($id)}}
			</pre> -->
			<table class="table table-bordered">
				<thead>
					<tr>
					    <th scope="col" class="t">Title</th>
					    <th scope="col" class="con">Content</th>
					    <th scope="col" class="ct">Created At</th>
					    <th scope="col" class="ct">Last Modified</th>
					    <th scope="col" class="mt">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($id as $note)
						@if($note->user_name === session('user_name'))
							<tr>
							    <th scope="row">{{$note->title}}</th>
							    <td>{{$note->content}}</td>
							    <td>{{$note->created_at}}</td>
							    <td>{{$note->modified_at}}</td>
							    <td>
							    	<a href="{{url('/delete/')}}/{{$note->SL}}"><button type="button" class=" btn-danger crd">Delete</button></a>
							    	<a href="{{url('/edit/')}}/{{$note->SL}}"><button type="button" class=" btn-primary crd">Edit</button></a>
							    </td>
					    	</tr>
						@endif
					    
					@endforeach
				</tbody>
			</table>
		</div>
	</section>
	
</body>
</html>