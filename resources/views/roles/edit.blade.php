@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          
            <form method="post" action="{{route('role.update',$role->id)}}">
            @csrf
            <div class="col-md-6">
                <input class="form-control" type="text" name="role" value="{{$role->name}}">
            </div>
            @foreach ( $permissions as $permission )
                <input class="form-check-input" type="checkbox" id="html" name="permissions[]" value="{{$permission->id}}" @if(in_array($permission->id, $role->permissions->pluck('id')->toArray())) checked @endif>
                 <label for="html">{{$permission->name}}</label><br>   
            @endforeach
            <button type="submit" class="btn btn-success mt-4 text-white">{{ __('Update') }}</button>
            </form>

        </div>
    </div>
</div>
@endsection






