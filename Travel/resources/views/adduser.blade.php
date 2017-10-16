@extends('index')
@section('content')
<body>
  <h3 style="color: #5a738e" align="center"> ADD USER</h3><br>
  <form class="form-horizontal" action="" method="POST" name="formuser" style="margin-left: 150px">
    <div class="form-group">
      <label class="control-label col-sm-2">ID:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Name:</label>
      <div class="col-sm-10"> 
        <input type="text" class="form-control" placeholder="Enter name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Gender:</label>
      <div class="col-sm-10"> 
        <select class="input-large form-control">
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Email:</label>
      <div class="col-sm-10"> 
        <input type="Email" class="form-control" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Password:</label>
      <div class="col-sm-10"> 
        <input type="password" class="form-control" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Phone number:</label>
      <div class="col-sm-10"> 
        <input type="text" class="form-control" placeholder="Enter phone number">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Adress:</label>
      <div class="col-sm-10"> 
        <input type="text" class="form-control" placeholder="Enter adress">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Image:</label>
      <div class="col-sm-10"> 
        <input type="file" class="form-control" >
      </div>
    </div>
    <div style="margin-left: 300px">
      <br>
      <button type="submit" class="btn btn-success">Save</button>
    </div>
  </form>
  </body>
  @stop



