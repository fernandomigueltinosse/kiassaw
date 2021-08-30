@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
<form method="post" action="{{route('user.update',$user->id)}}">
    @csrf
    <div class="mb-3">
        <input class="form-control" type="text" name="name" value="{{$user->name}}">
    </div>
    <div class="mb-3">
        <input class="form-control" type="text" name="email" value="{{$user->email}}">
    </div>
    <div class="mb-3">
        <input class="form-control" type="text" name="password" value="{{$user->password}}">
    </div>

    <select class="form-select" aria-label="Default select example">
     @foreach ( $roles as $role )
            <option value="{{$role->id}}" {{$role->id == $user->role_id ? 'selected' : ''}}>{{$role->name}}</option>   
        @endforeach
    </select>

      
    <button type="submit" class="btn btn-success mt-4 text-white">{{ __('Update') }}</button>
</form>
   </div>
    </div>
</div>
@endsection

     


