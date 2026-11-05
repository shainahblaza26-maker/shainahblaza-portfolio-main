<footer class="footer">
    <div class="container footer__grid">
        <div>
            <a href="#home" class="footer__brand">
                <span class="site-nav__brand-dot"></span>
                {{ $profile['short_name'] }}
            </a>
            <p class="footer__text">
                {{ $profile['role'] }} crafting fast, accessible web applications. Based in {{ $profile['location'] }}.
            </p>
            <div class="footer__socials">
                @foreach ($socials as $social)
                    <a class="social" href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $social['label'] }}">
                        <x-dynamic-component :component="'icons.' . $social['icon']" />
                    </a>
                @endforeach
            </div>
        </div>

        <div>
            <h3 class="footer__heading">Quick Links</h3>
            <ul class="footer__links">
                @foreach ($nav as $item)
                    <li><a href="{{ $item['href'] }}"><i class="{{ $item['icon'] }}" aria-hidden="true"></i>{{ $item['label'] }}</a></li>
                @endforeach
            </ul>
        </div>

        <div>
            <h3 class="footer__heading">Contact</h3>
            <ul class="footer__links">
                <li><a href="{{ $contact['email_url'] }}">{{ $contact['email'] }}</a></li>
                <li><a href="{{ $contact['phone_url'] }}">{{ $contact['phone'] }}</a></li>
                <li><span>{{ $contact['location'] }}</span></li>
                <li>
                    <a href="{{ $contact['github'] }}" target="_blank" rel="noopener noreferrer" class="footer__github">
                        <x-icons.github />
                        GitHub Profile
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container footer__bottom">
        <p>&copy; {{ date('Y') }} {{ $profile['name'] }}. Built with Laravel &amp; Blade.</p>
    </div>
</footer>