<section class="hidden p-4 gap-2 md:gap-4 lg:grid">
    <div class="grid grid-cols-2 gap-2 md:gap-4">
        <a href="{{ asset('/img/gallery/1.jpg') }}" data-fslightbox="gallery">
            <img class="h-auto max-w-full" src="{{ asset('/img/gallery/1.jpg') }}"
                alt="{{ $appname }} Gallery Swimspas image 1" />
        </a>
        <a href="{{ asset('/img/gallery/2.jpg') }}" data-fslightbox="gallery">
            <img class="h-auto max-w-full" src="{{ asset('/img/gallery/2.jpg') }}"
                alt="{{ $appname }} Gallery Swimspas image 2">
        </a>
    </div>
    <div class="grid grid-cols-3 gap-2 md:gap-4">
        <div class="grid gap-2 md:gap-4">
            <a href="{{ asset('/img/gallery/3.jpg') }}" data-fslightbox="gallery">
                <img class="h-auto max-w-full" src="{{ asset('/img/gallery/3.jpg') }}"
                    alt="{{ $appname }} Gallery Swimspas image 3" />
            </a>
            <a href="{{ asset('/img/gallery/4.jpg') }}" data-fslightbox="gallery">
                <img class="h-auto max-w-full" src="{{ asset('/img/gallery/4.jpg') }}"
                    alt="{{ $appname }} Gallery Swimspas image 4">
            </a>
            <a href="{{ asset('/img/gallery/5.jpg') }}" data-fslightbox="gallery">
                <img class="h-auto max-w-full" src="{{ asset('/img/gallery/5.jpg') }}"
                    alt="{{ $appname }} Gallery Swimspas image 5" />
            </a>
        </div>
        <div class="grid gap-2 md:gap-4">
            <a href="{{ asset('/img/gallery/6.png') }}" data-fslightbox="gallery">
                <img class="h-auto max-w-full" src="{{ asset('/img/gallery/6.png') }}"
                    alt="{{ $appname }} Gallery Swimspas image 6" />
            </a>
            <a href="{{ asset('/img/gallery/7.jpg') }}" data-fslightbox="gallery">
                <img class="h-auto max-w-full" src="{{ asset('/img/gallery/7.jpg') }}"
                    alt="{{ $appname }} Gallery Swimspas image 7" />
            </a>
        </div>
        <div class="grid gap-2 md:gap-4">
            <a href="{{ asset('/img/gallery/8.jpg') }}" data-fslightbox="gallery">
                <img class="h-auto max-w-full" src="{{ asset('/img/gallery/8.jpg') }}"
                    alt="{{ $appname }} Gallery Swimspas image 8" />
            </a>
            <a href="{{ asset('/img/gallery/9.jpg') }}" data-fslightbox="gallery">
                <img class="h-auto max-w-full" src="{{ asset('/img/gallery/9.jpg') }}"
                    alt="{{ $appname }} Gallery Swimspas image 9">
            </a>
            <a href="{{ asset('/img/gallery/10.png') }}" data-fslightbox="gallery">
                <img class="h-auto max-w-full" src="{{ asset('/img/gallery/10.png') }}"
                    alt="{{ $appname }} Gallery Swimspas image 10" />
            </a>
        </div>
    </div>
</section>

<section class="h-auto py-2 block lg:hidden">
    <div id="product-image-gallery"
        data-images="{{ json_encode(['/gallery/1.jpg', '/gallery/2.jpg', '/gallery/3.jpg', '/gallery/4.jpg', '/gallery/5.jpg', '/gallery/6.png', '/gallery/7.jpg', '/gallery/8.jpg', '/gallery/9.jpg', '/gallery/10.png']) }}"
        data-directory="{{ asset('/img') }}" data-thumbnail-position="left"></div>

</section>
