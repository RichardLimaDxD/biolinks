<div>
    <h1>Profile</h1>

    @if($message = session('message'))
    <div>
        {{ $message }}
    </div>
    @endif

    <form action="{{ route('profile') }}" method="post">
        @csrf @method('PUT')

        <div>
            <input
                type="text"
                name="name"
                value="{{ old('name', $user->name) }}"
                placeholder="Name"
            />
            @error('name')
            <span>
                {{ $message }}
            </span>
            @enderror
        </div>

        <div>
            <textarea
                name="description"
                placeholder="description"
                >{{ old('description', $user->description) }}</textarea
            >
            @error('description')
            <span>
                {{ $message }}
            </span>
            @enderror
        </div>

        <div>
            <span>biolinks.com.br/{{ $user->handler }}</span>
            <input
                type="text"
                name="handler"
                placeholder="@yourlink "
                value="{{ old('handler', $user->handler) }}"
            />

            @error('handler')
            <span>
                {{ $message }}
            </span>
            @enderror
        </div>

        <button type="submit">Update</button>
    </form>
</div>
