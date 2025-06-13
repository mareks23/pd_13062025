<x-layout>

    <x-slot:title>

        Mareks

    </x-slot>

 

    @foreach ($tasks as $task)

        <div>{{ $task }}</div>

    @endforeach

</x-layout>