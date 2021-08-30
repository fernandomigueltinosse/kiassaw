
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            @include('partials.alerts')
                <div>
                    <a href="{{route('role.create')}}" class=" btn btn-success text-white">New<i class="fas fa-address-book"></i></a>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">TITULO</th>
                            <th scope="col">PERMISSÕES</th>
                            <th scope="col">ACÇÕES</th>
                        </tr>
                    </thead>
                <tbody>
                    @foreach ($roles as $role )
                        <tr>
                            <td><p>{{$role->name}}</p></td>
                            <td>
                                <ul>
                                    @foreach ($role->permissions as $permission )
                                        <li>{{$permission->name}}</li> 
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <a href="{{route('role.edit',$role->id)}}" class="btn btn-primary text-white">Edit<i class="far fa-edit text-success"></i></a>
                                <a href="{{route('role.delete',$role->id)}}" class="btn btn-danger text-white">Delete<i class="far fa-edit text-success"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection



