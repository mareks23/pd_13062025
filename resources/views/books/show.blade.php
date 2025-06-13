<x-layout>
<x-slot:title>

        Mareks

    </x-slot>


    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

    <h2>{{ $singleBook->title }}</h2>
    <h3>{{ $singleBook->author }}</h3>
    <p>{{ $singleBook->released_at }}</p>
    <a href="{{ route('book.index') }}">All books</a>

    
    <form action="{{ route('book.destroy', $singleBook) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Dzēst">
    </form>
</x-layout>