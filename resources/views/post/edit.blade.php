<form method="post" action="{{route('post.update',$post->id)}}">
    @csrf

    <input type="text" name="name" value="{{$post->name}}">
   
  
    <button type="submit" class="btn btn-success mt-4">{{ __('Update') }}</button>
</form>
