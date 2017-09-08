
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>My todolist</title>
</head>
<body>
	<nav class="navbar navbar-default">
  		<div class="container-fluid">
   			 <div class="navbar-header">
     			 <a class="navbar-brand" href="#"></a>
     			 <h1 class="navbar-text">My todolist in Laravel</h1>
    		</div>
  		</div>
</nav>
	<form class action='/addTask' method="post">
		{{csrf_field()}}
		
		<div class="from-group">
			<label for="addQuantity">Quantity :</label>
			<input id="addQuantity" type="number" name="addQuantity" />
			<label for="addDesciption">Description :</label>
			<input id="addDesciption" type="text" name="addDesciption" />
			<button class="btn btn-success" type="submit">Add</button>
		</div>
	</form>
	<div class="col-lg-s12">
        <table class="table">
            <thead>
                <tr>
                   	<th>Quantity</th>
                    <th>Description</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
            </thead>
          	<tbody>
          		@foreach ($tasks as $task)
          			<tr>
          				<td>{{ $task->quantity }}</td>
          				<td>{{ $task->desciption }}</td>
          				<td>{{ $task->created_at }}</td>
          				<td>{{ $task->updated_at }}</td>
          			</tr>
          		@endforeach
</body>
</html>
