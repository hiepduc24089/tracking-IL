<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
<div class="container">
    <h2 class="target-title">MỤC TIÊU GIÁO DỤC</h2>
    <div class="swiper targetSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="target-item">
                    <img src="{{asset('assets/images/web/target-image.png')}}" alt="target" class="target-image" />
                    <div class="box-information">
                        <h5 class="target-name text-color-white text-size-bold-large text-center">TÍNH TỰ LẬP</h5>
                        <ul class="target-detail">
                            <li class="text-color-white text-size-normal fw-normal">Xây dựng cho trẻ từ sớm</li>
                            <li class="text-color-white text-size-normal fw-normal">Giúp trẻ suy nghĩ độc lập</li>
                            <li class="text-color-white text-size-normal fw-normal">Khơi dậy tư duy phản biện</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="target-item">
                    <img src="{{asset('assets/images/web/target-image.png')}}" alt="target" class="target-image" />
                    <div class="box-information">
                        <h5 class="target-name text-color-white text-size-bold-large text-center">TÍNH TỰ LẬP</h5>
                        <ul class="target-detail">
                            <li class="text-color-white text-size-normal fw-normal">Xây dựng cho trẻ từ sớm</li>
                            <li class="text-color-white text-size-normal fw-normal">Giúp trẻ suy nghĩ độc lập</li>
                            <li class="text-color-white text-size-normal fw-normal">Khơi dậy tư duy phản biện</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="target-item">
                    <img src="{{asset('assets/images/web/target-image.png')}}" alt="target" class="target-image" />
                    <div class="box-information">
                        <h5 class="target-name text-color-white text-size-bold-large text-center">TÍNH TỰ LẬP</h5>
                        <ul class="target-detail">
                            <li class="text-color-white text-size-normal fw-normal">Xây dựng cho trẻ từ sớm</li>
                            <li class="text-color-white text-size-normal fw-normal">Giúp trẻ suy nghĩ độc lập</li>
                            <li class="text-color-white text-size-normal fw-normal">Khơi dậy tư duy phản biện</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Swiper Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".targetSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        breakpoints: {
            500: {
                slidesPerView: 2, // Show 2 slides between 500px and 992px
                spaceBetween: 15
            },
            992: {
                slidesPerView: 3, // Show 3 slides when width is >= 992px
            }
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
