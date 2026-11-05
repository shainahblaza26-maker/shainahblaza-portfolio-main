<section class="section section--alt" id="contact">
    <div class="container">
        <p class="eyebrow">Contact</p>
        <h2 class="section__title">Let&rsquo;s work together</h2>

        <div class="contact">
            <div class="contact__info">
                <ul class="contact__list">
                    <li>
                        <span class="contact__icon"><x-icons.envelope /></span>
                        <span>Email</span>
                        <a href="{{ $contact['email_url'] }}">{{ $contact['email'] }}</a>
                    </li>
                    <li>
                        <span class="contact__icon"><x-icons.phone /></span>
                        <span>Phone</span>
                        <a href="{{ $contact['phone_url'] }}">{{ $contact['phone'] }}</a>
                    </li>
                    <li>
                        <span class="contact__icon"><x-icons.location /></span>
                        <span>Location</span>
                        <span>{{ $contact['location'] }}</span>
                    </li>
                    <li>
                        <span class="contact__icon"><x-icons.github /></span>
                        <span>GitHub</span>
                        <a href="{{ $contact['github'] }}" target="_blank" rel="noopener noreferrer">{{ $contact['github'] }}</a>
                    </li>
                </ul>
            </div>

            <div class="contact__card">
                <h3 class="contact__card-title">Say hello</h3>
                <a href="{{ $contact['email_url'] }}" class="btn btn--primary btn--block">
                    <i class="fas fa-paper-plane" aria-hidden="true"></i>
                    Send an Email
                </a>
                <div class="contact__socials">
                    @foreach ($socials as $social)
                        <a class="social" href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $social['label'] }}">
                            <x-dynamic-component :component="'icons.' . $social['icon']" />
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>