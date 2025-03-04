@props(['title' => null, 'subtitle' => null, 'type' => 'h2'])

@php
    $defaultTitles = [
        'h1' => 'Encabezado Principal',
        'h2' => 'Encabezado Secundario',
        'h3' => 'Encabezado Terciario'
    ];

    $title = $title ?? $defaultTitles[$type] ?? 'Titulo';

    $sizeMap = [
        'h1' => '2rem', // 32px
        'h2' => '1.75rem', // 28px
        'h3' => '1.5rem', // 24px
        'h4' => '1.25rem', // 20px
        'h5' => '1rem' // 16px
    ];

    $textSize = $sizeMap[$type] ?? '1rem';
@endphp

<div class="flex flex-col gap-3">
    <{{ $type }} class="mz-title" style="font-size: {{ $textSize }}">
        {{ __($title) }}
    </{{ $type }}>
    @if($subtitle)
        <p class="mz-subtitle">
            {{ $subtitle }}
        </p>
    @endif
</div>
