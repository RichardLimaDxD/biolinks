<div>
    <h1>Link: {{ $link->name }}</h1>

    @if($message = session('message'))
    <div>
        {{ $message }}
    </div>
    @endif

    <form action="{{ route('links.edit', $link->id) }}" method="post">
        @csrf @method('put')
        <div>
            <input
                type="text"
                name="link"
                value="{{ old('link', $link->link) }}"
                placeholder="Url to shorten"
            />
            @error('link')
            <span>
                {{ $message }}
            </span>
            @enderror
        </div>

        <div>
            <input
                type="text"
                name="name"
                value="{{ old('name', $link->name) }}"
                placeholder="Name"
            />
            @error('name')
            <span>
                {{ $message }}
            </span>
            @enderror
        </div>

        <button type="submit">Save</button>
    </form>
</div>
