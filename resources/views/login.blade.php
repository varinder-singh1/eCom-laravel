@extends('master')
@section('content')
<div class="container d-flex justify-content-center   " style="margin-top: 150px">
   <div class="col-5">
       
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                   </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="mt-5">Password</label>
                  <input type="password" class="form-control " id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input mt-5" id="exampleCheck1">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
</div>
@endsection