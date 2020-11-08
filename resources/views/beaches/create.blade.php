@extends('app.layout')

@section('content')
<div class="md-12">
<form method="POST" action="{{ route('beaches.create')}}">
@csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="country">Country</label>
    <input type="select" class="form-control" id="country" placeholder="Country">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" placeholder="Price">
  </div>
  <input type='submit' value='Submit'>
</form>
</div>
@endsection