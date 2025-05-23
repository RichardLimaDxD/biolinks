<div>
    <h1>Create Link</h1>

    @if($message = session('message'))
    <div>
        {{ $message }}
    </div>
    @endif

    <form action="{{ route('register') }}" method="post">
        @csrf

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

        <div>
            <input
                type="text"
                name="email"
                value="{{ old('email') }}"
                placeholder="E-mail"
            />
            @error('email')
            <span>
                {{ $message }}
            </span>
            @enderror
        </div>

        <div>
            <input
                type="text"
                name="email_confirmation"
                placeholder="E-mail Confirmation"
            />
            @error('email_confirmation')
            <span>
                {{ $message }}
            </span>
            @enderror
        </div>

        <div>
            <input
                type="password"
                name="password"
                placeholder="*********"
                value="{{ old('password') }}"
            />

            @error('password')
            <span>
                {{ $message }}
            </span>
            @enderror
        </div>

        <button type="submit">Register</button>
    </form>
</div>
