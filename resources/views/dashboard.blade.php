<div>
    <h1>Dashboard</h1>
    <span>user: {{ $user->name }}</span>

    @if($message = session()->get('message'))
    <div>{{ $message }}</div>
    @endif

    <ul>
        @foreach ($links as $link)
        <li>
            <a href="{{ route('links.edit', $link) }} ">{{ $link->name }}</a>
        </li>
        @endforeach
    </ul>
</div>
