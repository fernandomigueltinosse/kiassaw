@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form method="post" action="{{route('role.store')}}">
                 @csrf
                <div class="col-md-6">
                    <input type="password" class="form-control" id="role" placeholder="role" name="role">
                </div>
                <div class="form-chec mt-3">
                    @foreach ( $permissions as $permission )
                        <input class="form-check-input"  type="checkbox" id="html" name="permissions[]" value="{{$permission->id}}">
                        <label for="html">{{$permission->name}}</label><br>   
                    @endforeach
                </div>
                <button type="submit" class="btn btn-success mt-4 text-white">{{ __('Save') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection




