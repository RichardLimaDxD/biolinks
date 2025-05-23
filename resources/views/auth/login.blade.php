<div>
    <h1>Login</h1>

    @if($message = session('message'))
    <div>
        {{ $message }}
    </div>
    @endif

    <form action="{{ route('login') }}" method="post">
        @csrf

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

        <button type="submit">Submit</button>
    </form>
</div>
