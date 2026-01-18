@props(['view', 'name' => 'button'])

<button {{ $attributes->merge(['class' => 'btn btn-sm']) }}>
    {{ $slot }}
    <a href="{{ $view }}">
        {{-- Name of button--}}
        {{ $name }}
    </a>
</button>