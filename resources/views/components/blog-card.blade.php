<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp px-4 px-md-3" data-wow-delay=".3s">
    <div class="news-box-items mt-0">
        <div class="news-image">
            <img src="{{ asset($image) }}" alt="{{ $title }}">
            <img src="{{ asset($image) }}" alt="{{ $title }}">
        </div>

        <div class="news-content">
            <h3>
                <a href="{{ route('blog.details', $slug) }}">
                    {{ $title }}
                </a>
            </h3>

            <p>
                {{ $excerpt }}
            </p>

            <a href="{{ route('blog.details', $slug) }}" class="link-btn">
                <span>Read More</span> <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>
</div>
