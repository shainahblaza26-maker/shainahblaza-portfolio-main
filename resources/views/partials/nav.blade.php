<header class="site-nav" id="site-nav">
    <div class="container site-nav__inner">
        <a href="#home" class="site-nav__brand">
            <span class="site-nav__brand-dot"></span>
            {{ $profile['short_name'] }}
        </a>

        <nav class="site-nav__menu" id="nav-menu" aria-label="Primary">
            <ul>
                @foreach ($nav as $item)
                    <li>
                        <a href="{{ $item['href'] }}" class="site-nav__link">
                            <i class="{{ $item['icon'] }}" aria-hidden="true"></i>
                            <span>{{ $item['label'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>

        <button type="button" class="theme-toggle" id="theme-toggle" aria-label="Toggle dark mode">
            <span class="theme-toggle__icon theme-toggle__icon--sun" aria-hidden="true"><x-icons.sun /></span>
            <span class="theme-toggle__icon theme-toggle__icon--moon" aria-hidden="true"><x-icons.moon /></span>
        </button>

        <button type="button" class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation" aria-controls="nav-menu" aria-expanded="false">
            <span class="nav-toggle__bar"></span>
            <span class="nav-toggle__bar"></span>
            <span class="nav-toggle__bar"></span>
        </button>
    </div>
</header>