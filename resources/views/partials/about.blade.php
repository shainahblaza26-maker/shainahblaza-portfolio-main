<section class="section" id="about">
    <div class="container">
        <p class="eyebrow">About</p>
        <h2 class="section__title">A little bit about me</h2>

        <div class="about">
            <div class="about__content">
                <p class="about__bio">{{ $profile['bio'] }}</p>

                <div class="about__meta">
                    <p><x-icons.location /><span>{{ $profile['location'] }}</span></p>
                    <p><x-icons.envelope /><a href="{{ $contact['email_url'] }}">{{ $contact['email'] }}</a></p>
                </div>

                <a href="#contact" class="btn btn--outline btn--small"><i class="fas fa-handshake" aria-hidden="true"></i> Let&rsquo;s Work Together</a>
            </div>

            <div class="about__portrait">
                <div class="about__image">
                    <img src="{{ $profile['image'] }}" alt="Portrait of {{ $profile['name'] }}">
                </div>
            </div>
        </div>
    </div>
</section>