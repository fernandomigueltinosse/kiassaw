<table>
    <thead>
        <tr>
            <th>Nome</th>
        @can('create', App\Models\Post::class)
            <th><a href="{{route('post.create')}}" class="m-4">add<i class="far fa-edit text-success"></i></a></th>
         @endcan   
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post )
            <tr>
                <td><p>{{$post->name}}</p></td>
                
            
                <td>
                @can('view', $post)
                    <a href="{{route('post.show',$post->id)}}" class="m-4">view<i class="far fa-edit text-success"></i></a>
                @endcan    
                    <a href="{{route('post.edit',$post->id)}}" class="m-4">edit<i class="far fa-edit text-success"></i></a>
                    <a href="{{route('post.delete',$post->id)}}" class="m-4">delete<i class="far fa-edit text-success"></i></a>
                </td>
            </tr>
        @endforeach
 
    </tbody>
</table>


















