<x-layout>
    <x-slot: title>
        Student Portal | Students
    </x-slot>

    @foreach ($tasks as $task)
        <div>{{ $task }}</div>
    @endforeach
</x-layout>