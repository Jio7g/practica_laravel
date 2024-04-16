<x-layouts.app 
    title="Crear" 
    meta-description="Formulario para crear un nuevo Blo"
>

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label>
            Title   <br>
                <input type="text" name="title" value="{{ old('title')}}">
            <br>
            @error('title')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>

        <label><br>
            Body    <br>
                <textarea name="body" id="" cols="15" rows="1" value="{{ old('body')}}"></textarea>
            <br>
            @error('body')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label><br>

        <button type="submit">Enviar</button>
    </form><br>

    <br>
    <a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app> 