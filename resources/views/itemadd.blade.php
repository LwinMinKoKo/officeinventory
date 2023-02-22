@extends('layouts.app')

@section('content')
  
<div class="container">

<form method="POST">
  @csrf
  <div class="row">
    <div class="form-group col-md-6"">
      <label for="Device ID">Device ID</label>
      <input type="text" class="form-control" placeholder="Type Fixed asset Code">
    </div>
     <div class="form-group col-md-6"">
      <label for="inputEmail4">Status</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Deploy</option>
        <option>Good</option>
        <option>Bad</option>

      </select>
    </div>

     <div class="form-group col-md-6"">
      <label for="inputEmail4">Category</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Laptop</option>
        <option>Desktop</option>
        <option>Server</option>

      </select>
    </div>

     <div class="form-group col-md-6"">
      <label for="inputEmail4">Branch</label>
      <select id="inputState" class="form-control">
        <option selected>Choose A Branch...</option>
        <option>001</option>
        <option>002</option>
        <option>003</option>

      </select>
    </div>
    <div class="form-group col-md-6"">
      <label for="inputEmail4">Device Serial</label>
      <input type="text" class="form-control" placeholder="Last name">
    </div>


  <div class="form-group col-md-6"">
      <label for="inputEmail4">Specification</label>
      <input type="text" class="form-control" placeholder="Last name">
    </div>

    <div class="form-group col-md-6"">
      <label for="inputEmail4">Brand Name</label>
      <input type="text" class="form-control" placeholder="Last name">
    </div>

    <div class="form-group col-md-6"">
      <label for="inputEmail4">Specification</label>
      <input type="text" class="form-control" placeholder="Last name">
    </div>
    
    <div class="form-group col-md-12"">
      <label for="inputEmail4">History</label>
      <textarea class="form-control" id="History" ></textarea>
    </div>

    <div class="form-group col-md-6"">
      <button type="submit" class="btn btn-success">Submit</button> 
      <input class="btn btn-primary" type="reset" value="Reset"> 
    </div>
  
</form>
</div>

@endsection('content')

          