<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>My todolist</title>
</head>
<body>
  <!-- Navigation -->
	<nav class="navbar navbar-default">
  		<div class="container-fluid">
   			 <div class="navbar-header">
     			 <a class="navbar-brand" href="#"></a>
     			 <h1 class="navbar-text">My todolist in Laravel</h1>
    		</div>
  		</div>
</nav>
  <!-- Add Button -->
	<h1>Add a task :</h1>
	<form class action='/addTask' method="post">
		{{csrf_field()}}

		<div class="from-group">
			<label for="addQuantity">Quantity :</label>
			<input id="addQuantity" type="number" name="addQuantity" placeholder="add a quantity" />
			<label for="addDesciption">Description :</label>
			<input id="addDesciption" type="text" name="addDesciption" placeholder="add a description" />
			<button class="btn btn-primary" type="submit">Add</button>
		</div>
	</form>

	<div class="col-lg-s12">
        <table class="table table-striped">
            <thead>
                <tr>
                	<th>#</th>
                   	<th>Quantity</th>
                    <th>Description</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
            </thead>
          	<tbody>

          		@foreach ($tasks as $task)
          			<tr>
          				<th>{{ $task->id }}</th>
          				<td>{{ $task->quantity }}</td>
          				<td>{{ $task->desciption }}</td>
          				<td>{{ $task->created_at }}</td>
          				<td>{{ $task->updated_at }}</td>
          		<!-- 		<td>
 -->                    <!-- Edit Button -->
          				<!-- 	<form action="/addTask/{{ $task->id }}" method="POST">
                            	{{ csrf_field() }}    
                                {{ method_field('PUT') }}
                                <input type="number" name="editQuantity" value="{{$task->quantity}}" />
                                <input type="text" name="editDescription" value="{{$task->desciption}}" />
                                <button class="btn btn-success">Edit</button>
                			</form>
          				</td> -->
                  <!-- Delete Button -->
                  <td>
                    <form action="/deleteTask/{{ $task->id }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button class="btn btn-danger">Delete</button>
                      </form>
                  </td>
          		@endforeach
</body>
</html>