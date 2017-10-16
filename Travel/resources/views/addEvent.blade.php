@extends('index')
@section('content')
<body>
  
  <h3 style="color: #5a738e" align="center"> ADD EVENT</h3><br>
  <form class="form-horizontal" action="" method="POST" name="formplace" style="margin-left: 150px">
    <div class="form-group">
      <label class="control-label col-sm-2">ID:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">ID Place:</label>
      <div class="col-sm-10"> 
        <select class="input-large form-control">

        // select id from place

          <option value=""></option>

        //  
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Name:</label>
      <div class="col-sm-10"> 
        <input type="text" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Time begin:</label>
      <div class="col-sm-10"> 
        <input type="datetime-local" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Time end</label>
      <div class="col-sm-10"> 
        <input type="datetime-local" class="form-control">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2">Description</label>
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
