

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            @include('partials.alerts')
                <div>
                <a  href="{{route('permission.create')}}" class="btn btn-success mt-4 text-white">New<i class="far fa-edit text-success"></i></a>
            </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">TITULO</th>
                            <th scope="col">ACÇÕES</th>
                        </tr>
                    </thead>
                <tbody>
                    @foreach ($permissions as $permission )
                        <tr>
                            <td>{{$permission->name}}</td>
                            <td>
                                <a href="{{route('permission.edit',$permission->id)}}" class="btn btn-primary text-white">edit<i class="far fa-edit text-success"></i></a>
                                <a href="{{route('permission.delete',$permission->id)}}" class="btn btn-danger text-white">delete<i class="far fa-edit text-success"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection























