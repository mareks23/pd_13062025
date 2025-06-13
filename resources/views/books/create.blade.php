<x-layout>
<x-slot:title>

        Mareks

    </x-slot>
    <h1>New book</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('book.store') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="title goes here" value="{{ old('title') }}">
        <input type="text" name="author" placeholder="author goes here" value="{{ old('author') }}">
        <input type="date" name="released_at" placeholder="date goes here" value="{{ old('released_at') }}">
        <input type="submit" value="Create">
    </form>

</x-layout>
