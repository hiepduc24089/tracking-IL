<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
<div class="course-wrapper">
    <h2 class="course-title">KHOÁ HỌC NỔI BẬT</h2>
    <!-- Swiper -->
    <div class="swiper courseSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="course-item">
                    <img src="{{asset('assets/images/web/course-example.png')}}" alt="course" class="course-image" />
                    <h5 class="course-name text-color-white text-size-bold-large">Matific</h5>
                    <p class="course-detail text-color-secondary text-size-normal">Nền tảng học toán từ các chuyên gia giáo dục hàng đầu thế giới (Dành cho học sinh K6)</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="course-item">
                    <img src="{{asset('assets/images/web/course-example.png')}}" alt="course" class="course-image" />
                    <h5 class="course-name text-color-white text-size-bold-large">Matific</h5>
                    <p class="course-detail text-color-secondary text-size-normal">Nền tảng học toán từ các chuyên gia giáo dục hàng đầu thế giới (Dành cho học sinh K6)</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="course-item">
                    <img src="{{asset('assets/images/web/course-example.png')}}" alt="course" class="course-image" />
                    <h5 class="course-name text-color-white text-size-bold-large">Matific</h5>
                    <p class="course-detail text-color-secondary text-size-normal">Nền tảng học toán từ các chuyên gia giáo dục hàng đầu thế giới (Dành cho học sinh K6)</p>
                </div>
            </div>
        </div>

        <!-- Add Swiper Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <a href="#" class="see-more text-color-secondary text-size-large">Xem thêm</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".courseSwiper", {
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

