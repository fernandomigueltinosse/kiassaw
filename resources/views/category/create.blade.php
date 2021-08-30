@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @include('partials.alerts')
            <form method="POST" action="{{ route('category.store')}}" enctype="multipart/form-data">
                      @csrf
              
                      <div class="form-group">
                          <label for="">Título</label>
                          <input type="texte" name="name" class="form-control" id="exampleFormControlInput1" >
                      </div>

                      <div class="form-group">
                          <label for="inputCategory">Categoria superior</label>
                          <select id="inputCategory" name="parent_id" class="form-control">
                            <option ></option>
                              @foreach ($subcategories as $subcategory)
                              <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                              @endforeach
                          </select>
                        </div>

                     
                  
                      <div class="form-action">
                          <button type="submit" class="btn btn-primary mt-3">registar</button>
                      </div>
                    </form>
        </div>
    </div>
</div>
@endsection




