@extends('template.main')
@section('content')
<section class="container p-4">
  <form action="/users" method="POST">
      @csrf
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name='name'>
      </div>
      <div class="form-group">
        <label>Nickname</label>
        <input type="text" class="form-control" name="nickname">
      </div>
      <div class="form-group">
        <label>Age</label>
        <input type="number" class="form-control" name="age">
      </div>
      <div class="form-group">
        <label>Email address</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="form-group">
        <label>Phone Number</label>
        <input type="text" class="form-control" name="phone">
      </div>
      <button type="submit" class="btn btn-danger">Add a user</button>
  </form>
</section>
@endsection