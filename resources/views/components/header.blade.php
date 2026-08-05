<header class="site-header" data-header>
    <div class="header-shell container">
        <button class="menu-button" type="button" data-menu-toggle aria-expanded="false" aria-controls="site-menu"><span></span><span></span><span></span><b class="sr-only">Open navigation menu</b></button>
        <a href="{{ route('home') }}" class="brand header-brand" aria-label="Oriental Heritage Hall home"><img src="{{ asset(config('venue.logo')) }}" alt="Oriental Heritage Hall"></a>
        <div class="header-actions"><a class="phone-link" href="tel:{{ config('venue.phone') }}">{{ config('venue.phone') ?: 'Call the venue' }}</a><a class="button button-small" href="{{ route('page','contact') }}">Enquire now</a></div>
    </div>

    <div id="site-menu" class="mega-menu" data-menu-overlay hidden aria-label="Full-screen navigation">
        <div class="mega-menu-bar container"><button class="menu-button close-menu" type="button" data-menu-close aria-label="Close navigation menu"><span></span><span></span></button><a href="{{ route('home') }}" class="brand menu-brand"><img src="{{ asset(config('venue.logo')) }}" alt="Oriental Heritage Hall"></a><div class="header-actions"><a class="phone-link" href="tel:{{ config('venue.phone') }}">{{ config('venue.phone') ?: 'Call the venue' }}</a><a class="button button-small" href="{{ route('page','contact') }}">Enquire now</a></div></div>
        <div class="mega-layout container">
            <nav class="mega-primary" aria-label="Main navigation">
                <a class="mega-home" href="{{ route('home') }}" aria-current="{{ request()->routeIs('home') ? 'page' : 'false' }}">Home <span>↗</span></a>
                @foreach(config('venue.navigation') as $item)
                    @if(count($item['links']) > 1)
                        <button type="button" class="mega-parent @if($loop->first) active @endif" data-menu-category="{{ $item['key'] }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}">{{ $item['label'] }} <span>↗</span></button>
                    @else
                        <a class="mega-parent" href="{{ $item['links'][0]['href'] }}">{{ $item['label'] }} <span>↗</span></a>
                    @endif
                @endforeach
            </nav>
            <div class="mega-detail" aria-live="polite">
                @foreach(config('venue.navigation') as $item)
                    @if(count($item['links']) > 1)
                        <section class="menu-panel @if($loop->first) active @endif" data-menu-panel="{{ $item['key'] }}" @if(!$loop->first) hidden @endif>
                            <div class="menu-panel-copy"><p class="eyebrow light">{{ $item['label'] }}</p><h2>{{ $item['label'] }}</h2><p>{{ $item['intro'] }}</p><a class="menu-view-all" href="{{ $item['links'][0]['href'] }}">View all {{ strtolower($item['label']) }} <span>↗</span></a></div>
                            <div class="menu-panel-links">@foreach(array_slice($item['links'], 1) as $link)<a href="{{ $link['href'] }}">{{ $link['label'] }} <span>↗</span></a>@endforeach</div>
                            <div class="menu-featured"><img src="{{ asset($item['image']) }}" alt="{{ $item['label'] }} at Oriental Heritage Hall" loading="lazy"></div>
                        </section>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="mega-mobile-actions"><a href="tel:{{ config('venue.phone') }}">Call</a><a href="{{ config('venue.whatsapp') ?: route('page','contact') }}">WhatsApp</a><a href="#location">Directions</a><a href="{{ route('page','contact') }}">Enquire now</a></div>
    </div>
</header>
