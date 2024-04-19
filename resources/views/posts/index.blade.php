<x-layouts.app title="Blog" meta-description="Blog description">
    
    <h1>Blog</h1>

    <a href="{{ route('posts.create') }}">Crear nuevo post</a>

    @foreach($posts as $post)
        <div style="display: flex; align-items:baseline">
            <h2>
                <a href="{{ route('posts.show', $post->id)}}">
                    {{ $post->title }}</a>
            </h2>
            <!--<h3>{{$post->body}}</h3>-->

            <a href="{{ route('posts.edit', $post)}}">Editar</a>
        </div>

        
    @endforeach
</x-layouts.app>
