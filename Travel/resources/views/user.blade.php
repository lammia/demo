@extends('index')
@section('content')
<body>
  <table class="table table-hover table-bordered responstable" style="border-collapse:collapse;">
    <h3 style="color: #5a738e;" align="center"> USER MANAGEMENT</h3>
    <div class="link_add">
      <a href="{{url('adduser')}}"><h5>ADD USER</h5></a><br>
    
    <thead>
      <tr align="center" >
        <th style="text-align: center">ID</th>      
        <th style="text-align: center">Name</th>
        <th style="text-align: center">Email</th>
        <th style="text-align: center">Phone number</th>
        <th style="text-align: center">Adress</th>      
        <th style="text-align: center">Image</th>
        <th style="text-align: center; width: 24%;">Action</th> 
      </tr>
    </thead>
  </table>
</body>
@stop