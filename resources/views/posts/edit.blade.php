<x-layouts.app :title="$post->title" :meta-description="$post->body">
    <h1>Editar blog</h1>
    
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf @method('PATCH')
        
        <label>
            Title
            <br>
            <input type="text" name="title" value="{{ old('title', $post->title) }}">
            <br>
            @error('title')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        
        <label>
            <br>
            Body
            <br>
            <textarea name="body" id="" cols="15" rows="1">{{ old('body', $post->body) }}</textarea>
            <br>
            @error('body')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        
        <br>
        
        <button type="submit">Enviar</button>
    </form>
    
    <br>
    <br>
    
    <a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>