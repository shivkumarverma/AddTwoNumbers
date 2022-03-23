<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Add Two Numbers</title>

    </head>
    <body >
     
    <div class="vh-100 vw-100 justify-content-center d-flex align-items-center bg-light">
    <form action="{{url('/')}}/add" method="post">
      @csrf
    <div class="container shadow p-3 mb-5 bg-body rounded">
      <h1 class="display-6">Add Two Numbers</h1>
   <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Enter First Number</label>
  <input type="number" name="number1" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Enter Second Number</label>
  <input type="number" name="number2" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<button type="submit" class="btn btn-primary">Add</button>
        <form>
</div>
        
</div>

 <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

       
    </body>
</html>
