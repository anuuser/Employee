<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add Details</h2>
  <form method="post" action="/user/{{$employee->id}}">
      @csrf

      @method('PUT')

    <div class="form-group">
      <label for="">First Name:</label>
      <input type="text" class="form-control" value="{{$employee->first_name}}"  placeholder="Enter Name" name="first_name">
    </div>
    <div class="form-group">
      <label for="">Last Name:</label>
      <input type="text" class="form-control"  value="{{$employee->lastst_name}}" placeholder="Enter Name" name="last_name">
    </div>
    <div class="form-group">
      <label for="">Company:</label>
      <input type="text" class="form-control"  value="{{$employee->company}}" placeholder="Enter Company" name="company">
    </div>
    <div class="form-group">
      <label for="">Email:</label>
      <input type="email" class="form-control"  value="{{$employee->email}}" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="">Phone:</label>
      <input type="number" class="form-control"  value="{{$employee->phone}}" placeholder="Enter Phone number" name="phone">
    </div>
    
    <button type="submit" class="btn btn-default">Save</button>
  </form>
</div>

</body>
</html>
