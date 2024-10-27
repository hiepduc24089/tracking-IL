<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
<h5 class="text-size-normal text-color-secondary text-center">Vì sao nên chọn Fun Academy?</h5>
<h2 class="about-why-choose-title">Mục tiêu giáo dục</h2>
<h5 class="text-size-large text-color-secondary text-center mb-3">Chúng tôi tập trung xây dựng 3 kỹ năng chính</h5>
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

    <div class="swiper-pagination"></div>
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
