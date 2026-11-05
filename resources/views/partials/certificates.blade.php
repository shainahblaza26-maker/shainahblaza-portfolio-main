<section class="section" id="certificates">
    <div class="container">
        <p class="eyebrow">Certificates</p>
        <h2 class="section__title">Certifications &amp; Achievements</h2>

        <div class="certs">
            @foreach ($certificates as $cert)
                <figure class="cert">
                    <div class="cert__frame">
                        <img src="{{ $cert['image'] }}" alt="{{ $cert['title'] }}" loading="lazy">
                    </div>
                    <figcaption class="cert__caption">
                        <h3 class="cert__title">{{ $cert['title'] }}</h3>
                        <p class="cert__meta">{{ $cert['issuer'] }} &middot; {{ $cert['year'] }}</p>
                        @if (!empty($cert['description']))
                            <p class="cert__desc">{{ $cert['description'] }}</p>
                        @endif
                    </figcaption>
                </figure>
            @endforeach
        </div>
    </div>
</section>