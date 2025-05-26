<div>
    <h1>Dashboard</h1>
    <span>user: {{ auth()->user()->name }} :: {{ auth()->id() }}</span>

    @if($message = session()->get('message'))
    <div>{{ $message }}</div>
    @endif

    <br />
    <a href="{{ route('links.create') }}">Create a link</a>
    <br />
    <a href="{{ route('profile') }}">Update profile</a>
    <br />

    <ul>
        @foreach ($links as $link)
        <li style="display: flex">
            @unless ($loop->last)

            <form action="{{ route('links.down', $link) }}" method="post">
                @csrf @method('PATCH')

                <button>⬇️</button>
            </form>
            @endunless @unless ($loop->first)
            <form action="{{ route('links.up', $link) }}" method="post">
                @csrf @method('PATCH')

                <button>⬆️</button>
            </form>
            @endunless

            <a href="{{ route('links.edit', $link) }} "
                >{{$link->id}}. {{ $link->name }}</a
            >
            <form action="{{ route('links.destroy', $link) }}" method="post">
                @csrf @method('DELETE')

                <button>Deleted</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>
