<h4> Share yours ideas </h4>
<div class="row">
    <form action="/idea" method="POST">
        @csrf
        <div class="mb-3">
            <textarea class="form-control" id="idea" rows="3" name="idea"></textarea>
            @error('idea')
                <div class="fs-6 text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="">
            <button type="submit" class="btn btn-dark"> Share </button>
        </div>
    </form>
</div>
