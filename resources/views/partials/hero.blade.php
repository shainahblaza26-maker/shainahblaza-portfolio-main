<section class="hero" id="home">
    <div class="container">
        <p class="eyebrow">Hello, I&rsquo;m <span>{{ $profile['short_name'] }}</span></p>

        <h1 class="hero__title">
            {{ $profile['role'] }}
        </h1>

        <p class="hero__intro">{{ $profile['tagline'] }}</p>

        <div class="hero__actions">
            <a href="#projects" class="btn btn--primary">Explore My Work <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
            <a href="#contact" class="btn btn--outline"><i class="fas fa-paper-plane" aria-hidden="true"></i> Contact Me</a>
        </div>
    </div>
</section>