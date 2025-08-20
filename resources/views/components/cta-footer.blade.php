<!-- start: Cta Section -->
<section class="tj-cta-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-area wow fadeInUp" data-wow-delay=".3s">
                    <div class="cta-content">
                        <h2 class="title">{{ $title ?? 'Ready to Elevate Your Business with AI?' }}</h2>
                        <a class="tj-primary-btn btn-light" href="{{ $link ?? '#' }}">
                            <div class="btn-inner">
                                <span class="btn-icon h-icon"><i class="tji-arrow-right"></i></span>
                                <span class="btn-text">{{ $buttonText ?? 'Get Started Today' }}</span>
                                <span class="btn-icon"><i class="tji-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="cta-img">
                        <img src="{{ asset($image ?? 'storage/assets/images/cta/cta-bg.webp') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Cta Section -->
