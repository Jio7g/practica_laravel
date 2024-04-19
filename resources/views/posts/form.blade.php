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