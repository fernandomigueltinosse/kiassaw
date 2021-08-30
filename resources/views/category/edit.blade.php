@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          @include('partials.alerts')
            <form method="POST" action="{{route('category.update',$category->id)}}" enctype="multipart/form-data">
                            @csrf
                            {{method_field('PUT')}}
                        
                            <div class="f">
                                <label for="">Título</label>
                                <input type="texte" name="name" class="form-control" id="exampleFormControlInput1" value="{{$category->name}}">
                            </div>
                             <select id="inputCategory" name="parent_id" class="form-control mt-3">
                            <option ></option>
                              @foreach ($subcategories as $subcategory)
                              <option value="{{$subcategory->parent_id}}" {{$subcategory->parent_id == $subcategory->id ? 'selected' : ""}}>{{$subcategory->name}}</option>
                             
                              @endforeach
                          </select>
                            
                            <div class="form-action">
                                <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
                            </div>
                          </form>

        </div>
    </div>
</div>
@endsection






