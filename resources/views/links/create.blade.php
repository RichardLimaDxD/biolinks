<div>
    <h1>Create Link</h1>

    @if($message = session('message'))
    <div>
        {{ $message }}
    </div>
    @endif

    <form action="{{ route('links.create') }}" method="post">
        @csrf

        <div>
            <input
                type="text"
                name="link"
                value="{{ old('link') }}"
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
                value="{{ old('name') }}"
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
