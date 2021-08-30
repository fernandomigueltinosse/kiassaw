
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            @include('partials.alerts')
                <div>
                   <a href="{{route('user.create')}}" class="btn btn-success text-white">add<i class="far fa-edit text-success"></i></a>
                </div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
          <th scope="col">TITLE</th>
          <th scope="col">ROLE</th>
            <th scope="col">PERMISSIONS</th>
            <th scope="col">ACTION</th>
        </tr>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user )
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->role->name}}</td>
                <td>
                <ul>
                    @foreach ($user->role->permissions as $permission )
                        <li>
                            {{$permission->name}}
                        </li>   
                    @endforeach
                </ul>    
                </td>
                   
                </td>
                <td><a href="{{route('user.edit',$user->id)}}" class="btn btn-primary text-white">edit<i class="far fa-edit text-success"></i></a>
                    <a href="{{route('user.delete',$user->id)}}" class=" btn btn-danger text-white">delete<i class="far fa-edit text-success"></i></a>
                </td>
            </tr>
        @endforeach
 
    </tbody>
</table>

</div>
        </div>
    </div>
@endsection



















