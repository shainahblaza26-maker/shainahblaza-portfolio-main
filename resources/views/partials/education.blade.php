<section class="section section--alt" id="education">
    <div class="container">
        <p class="eyebrow">Education</p>
        <h2 class="section__title"></h2>

        <div class="cards">
            @foreach ($education as $item)
                <article class="card">
                    <div class="card__top">
                        <span class="card__badge"><x-icons.graduation /></span>
                        <span class="card__period">{{ $item['period'] }}</span>
                    </div>
                    <h3 class="card__title">{{ $item['degree'] }}</h3>
                    <p class="card__subtitle">{{ $item['institution'] }}</p>
                    <p class="card__text">{{ $item['detail'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>