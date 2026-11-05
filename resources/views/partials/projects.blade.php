<section class="section" id="projects">
    <div class="container">
        <p class="eyebrow">Projects</p>
        <h2 class="section__title">Things I&rsquo;ve built</h2>

        <div class="grid">
            @foreach ($projects as $project)
                <article class="project">
                    <button type="button" class="project__thumb" data-lightbox data-image="{{ $project['image'] }}" data-title="{{ $project['title'] }}" aria-label="View {{ $project['title'] }}">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" loading="lazy">
                    </button>
                    <div class="project__body">
                        <div class="project__header">
                            <span class="project__index">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        </div>
                        <h3 class="project__title">{{ $project['title'] }}</h3>
                        <p class="project__text">{{ $project['description'] }}</p>
                        <ul class="project__tags">
                            @foreach ($project['tech'] as $tag)
                                <li>{{ $tag }}</li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="lightbox" id="lightbox" aria-hidden="true">
            <button type="button" class="lightbox__close" id="lightbox-close" aria-label="Close preview">
                <i class="fas fa-xmark" aria-hidden="true"></i>
            </button>
            <img src="" alt="Project preview" class="lightbox__image" id="lightbox-image">
            <p class="lightbox__title" id="lightbox-title"></p>
        </div>
    </div>
</section>