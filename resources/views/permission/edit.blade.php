
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
         <form method="post" action="{{route('permission.update',$permission->id)}}">
            @csrf
            <div class="col-md-6">
                <input class="form-control" type="text" name="name" value="{{$permission->name}}">
            </div>
            <button type="submit" class="btn btn-success mt-4 text-white">{{ __('Update') }}</button>
        </form>
        </div>
    </div>
</div>
@endsection



