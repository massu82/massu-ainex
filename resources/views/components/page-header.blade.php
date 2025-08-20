@props([
    'title' => 'Título de la página',
    // Imagen de fondo por defecto
    'bgImage' => 'storage/assets/images/bg/pheader-bg.webp',
    // Migas de pan: [['label'=>'Inicio','url'=>route('index')], ['label'=>'Actual']]
    'items' => [],
])

<section class="tj-page-header section-gap-x"
         data-bg-image="{{ asset($bgImage) }}"
         style="background-image:url('{{ asset($bgImage) }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title">{{ $title }}</h1>

                    <div class="tj-page-link">
                        <span><i class="tji-home"></i></span>

                        @php $lastIndex = count($items) - 1; @endphp
                        @foreach($items as $i => $item)
                            <span>
                                @if(!empty($item['url']) && $i !== $lastIndex)
                                    <a href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                                @else
                                    <span>{{ $item['label'] }}</span>
                                @endif
                            </span>

                            @if($i !== $lastIndex)
                                <span>/</span>
                            @endif
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
