@extends('index')
@section('content')
<body>
  <table class="table table-hover table-bordered responstable" style="border-collapse:collapse;">
    <h3 style="color: #5a738e;" align="center"> FESTIVAL MANAGEMENT</h3>
    <div class="link_add">
      <a href="{{url('addfestival')}}"><h5>ADD FESTIVAL</h5></a><br>
    </div>
    
    <thead>
      <tr align="center" >
        <th style="text-align: center">ID</th>      
        <th style="text-align: center">Name</th>
        <th style="text-align: center">Time begin</th>
        <th style="text-align: center">Time end</th>
        <th style="text-align: center">Place</th>  
        <th style="text-align: center">Description</th>
        <th style="text-align: center">Image</th>
        <th style="text-align: center; width: 24%;">Action</th> 
      </tr>
    </thead>
  </table>
</body>
@stop