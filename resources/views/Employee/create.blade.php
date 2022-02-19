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
  <form method="post" action="/user">
      @csrf
    <div class="form-group">
      <label for="">First Name:</label>
      <input type="text" class="form-control" value="{{old('first_name')}}" placeholder="Enter Name" name="first_name">
      @if($errors->has('first_name'))
      <p style='color:red'>{{$errors->first('first_name')}}</p>
      @endif
    </div>
    <div class="form-group">
      <label for="">Last Name:</label>
      <input type="text" class="form-control" value="{{old('last_name')}}" placeholder="Enter Name" name="last_name">
      @if($errors->has('last_name'))
      <p style='color:red'>{{$errors->first('last_name')}}</p>
      @endif
    </div>
    <div class="form-group">
      <label for="">Company:</label>
      <input type="text" class="form-control" placeholder="Enter Company" name="company">
    </div>
    <div class="form-group">
      <label for="">Email:</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="">Phone:</label>
      <input type="number" class="form-control" placeholder="Enter Phone number" name="phone">
    </div>
    
    <button type="submit" class="btn btn-success">Save</button>
  </form>
</div>

</body>
</html>
