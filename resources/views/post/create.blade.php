<form method="post" action="{{route('post.store')}}">
@csrf

    <input type="text" name="name">
    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
</form>