
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            @include('partials.alerts')
                <div>
                    <a href="{{route('category.create')}}" class=" btn btn-success text-white">New<i class="fas fa-address-book"></i></a>
                </div>
                <table class="table table-striped">
                        <thead>
                          <tr>
                            
                            <th scope="col"><b>Nome</b></th>
                            <th scope="col"><b>Acções</b></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                
                                <td>{{$category->name}}</td>
                                <!--<td>{{implode(', ', $category->categories()->get()->pluck('name')->toArray()) }}</td> -->
                                <td>
                                    <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary text-white">Edit<i class="far fa-edit text-success"></i></a>
                                    <a href="{{route('category.delete',$category->id)}}" class="btn btn-danger text-white">Delete<i class="far fa-edit text-success"></i></a>

                                  
                                </td> 
                              </tr> 
                            @endforeach
                        </tbody>
                      </table>
        </div>
        </div>
    </div>
@endsection



