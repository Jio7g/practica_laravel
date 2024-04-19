<x-layouts.app 
    title="Crear" 
    meta-description="Formulario para crear un nuevo Blo"
>

    <h1>Crear Nuevo post</h1>

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        @include('posts.form')

        <button type="submit">Enviar</button>
    </form><br>

    <br>
    <a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app> 