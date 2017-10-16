@extends('index')
@section('content')
<body>
  
  <h3 style="color: #5a738e" align="center"> ADD PLACE</h3><br>
  <form class="form-horizontal" action="" method="POST" name="formplace" style="margin-left: 150px">
    <div class="form-group">
      <label class="control-label col-sm-2">ID:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Name:</label>
      <div class="col-sm-10"> 
        <input type="text" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Adress:</label>
      <div class="col-sm-10"> 
        <input type="text" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Money(VND)</label>
      <div class="col-sm-10"> 
        <input type="text" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Type:</label>
      <div class="col-sm-10"> 
        <select class="input-large form-control">
          <option value="ecotourism">Ecotourism Travel</option>
          <option value="leisure">Leisure Travel</option> 
          <option value="adventure">Adventure Travel</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Description</label>
      <div class="col-sm-10"> 
        <input type="text" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Latlog</label>
      <div class="col-sm-10"> 
        <input type="text" class="form-control" >
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
