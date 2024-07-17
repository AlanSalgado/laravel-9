<div class="row">
    <div class="mb-3 col-4">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" value="{{old('title', $post->title)}}" class="form-control">
        @error('title')
            <br>
            <small style="color: red">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-3 col-8">
        <label for="body" class="form-label">Body</label>
        <!-- <textarea type="text" name="body" value="{{old('body', $post->body)}}" class="form-control" style="height: 100px"></textarea> -->
        <input type="text" name="body" value="{{old('body', $post->body)}}" class="form-control">
        @error('body')
            <br>
            <small style="color: red">{{ $message }}</small>
        @enderror
    </div>
</div>