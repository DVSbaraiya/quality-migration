<div class="blog-sidebar">
    <div class="sidebar-widget recent-articles-widget">
        <h4 class="widget-title mb-0">Our Recent Posts</h4>

        @foreach($blogs as $blog)
            @php
                $imagePath = public_path("front/img/blog/$blog.jpeg");
            @endphp

            <div class="recent-article-item">
                <div class="recent-thumb">
                    <img 
                        src="{{ asset(file_exists($imagePath) 
                            ? "front/img/blog/$blog.jpeg" 
                            : "front/img/blog/default.jpeg") }}"
                        alt="{{ ucwords(str_replace('-', ' ', $blog)) }}">
                </div>

                <div class="recent-content">
                    <a href="{{ route('blog.details', $blog) }}">
                        {{ ucwords(str_replace('-', ' ', $blog)) }}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
