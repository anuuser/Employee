<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1>Employees Details</h1> 
  <h3><a href='user/create'>Add New Details</a> </h3>         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Company</th>
        <th>Email</th>
        <th>Phone</th>

      </tr>
    </thead>
    @foreach($employees as $employees)
    <tbody>
      <tr>
        <td>{{$employees->first_name}}</td>
        <td>{{$employees->lastst_name}}</td>
        <td>{{$employees->company}}</td>
        <td>{{$employees->email}}</td>
        <td>{{$employees->phone}}</td>
        <td><a class="btn btn-success" href="/user/{{$employees->id}}/edit">Edit</a>
          
        <form method="post" action="/user/{{$employees->id}}/delete">

        @csrf
        @method("DELETE")
        
        <button class="btn btn-danger">Delete</button>
         
      
        </form>

      
      </td>
      </tr>
      
    </tbody>
    @endforeach
  </table>
</div>

</body>
</html>
