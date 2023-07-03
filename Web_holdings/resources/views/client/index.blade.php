@extends('client.layout.master')
@section('title', 'Home page')
@section('content')
    <section class="container mx-auto relative">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="h-[100vh] md:h-auto object-cover" src="./images/tapdoankinhteso 1 (1).png" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="h-[100vh] md:h-auto object-cover" src="./images/tapdoankinhteso 1 (2).png" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="h-[100vh] md:h-auto object-cover" src="./images/tapdoankinhteso 1 (3).png" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="h-[100vh] md:h-auto object-cover" src="./images/tapdoankinhteso 1 (4).png" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="h-[100vh] md:h-auto object-cover" src="./images/tapdoankinhteso 1 (5).png" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="h-[100vh] md:h-auto object-cover" src="./images/tapdoankinhteso 1 (6).png" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="h-[100vh] md:h-auto object-cover" src="./images/tapdoankinhteso 1 (7).png" alt="">
                </div>
            </div>

            <div class="swiper-pagination"></div>

            <div class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] z-10 text-center">
                <p class="text-[35px] lg:text-[54px] text-[#FFC700] font-bold">TẬP ĐOÀN KINH TẾ SỐ</p>
                <p class="text-[25px] lg:text-[38px] text-[#fff] font-bold">KIẾN TẠO GIÁ TRỊ TOÀN CẦU - Vươn tầm lớn lao</p>
            </div>
        </div>

    </section>

    <section class="container mx-auto bg-[#F0F0F0]">
        <div class="grid grid-cols-6 gap-4 px-[20px] lg:px-[100px] py-[10px]">
            <div class="hidden lg:block">
                <img class="h-full" src="./images/Onesie-6mo-ArtGuide-CustomCat-July2021 1.png" alt="">
            </div>
            <div class="col-span-5 items-center">
                <p class="text-[30px] font-bold">Tổng quan</p>
                <hr class="border-t-4 border-rose-600 w-[185px]  pb-[10px]">
                <p class="text-[20px] font-medium">Metaway Holdings là tập đoàn kinh tế số hoạt động trên phạm vi toàn cầu,
                    định hướng
                    phát triển các lĩnh
                    vực trụ cột của nền kinh tế, hướng tới một xã hội toàn diện.
                    Metaway Holdings tận dụng sức mạnh của giải pháp số xóa nhà ranh giới giữa con người và công nghệ, hướng
                    tới sử dụng công nghệ để chăm sóc và phụng sự công dân toàn cầu, góp phần mang lại hạnh phúc và thịnh
                    vượng chung của nhân loại.</p>
            </div>
        </div>
    </section>

    <section class="container mx-auto bg-[#fff]">
        <p class="text-center py-[20px] text-[30px] text-[#D71A21] font-bold">Về chúng tôi</p>
        <hr class="border-t-4 border-rose-600 w-[200px] mx-auto pb-[20px]">
        <div class="lg:grid grid-cols-2 gap-[20px] p-[20px]">
            <div class="relative rounded-[10px] w-[full] h-[full] mb-[20px] lg:mb-[0]">
                <div>
                    <img class="object-cover rounded-lg" src="./images/image 4.png" alt="">
                </div>
                <div class="absolute text-[#fff] top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] text-center">
                    <p class="text-[20px] md:text-[30px] font-bold">Sứ mệnh</p>
                    <button
                        class="border-2 rounded-[5px] py-[4px] px-[30px] md:py-[5px] md:px-[50px] text-[14px] font-semibold hover:bg-[#fff] hover:text-[#000]"><a
                            href="{{ route('client.introduce') }}">
                            Xem thêm</a></button>
                </div>
            </div>
            <div class="relative rounded-[10px] w-[full] h-[full] mb-[20px] lg:mb-[0]">
                <div>
                    <img class="object-cover rounded-lg" src="./images/image 39.png" alt="">
                </div>
                <div class="absolute text-[#fff] top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] text-center">
                    <p class="text-[20px] md:text-[30px] font-bold">Tầm nhìn</p>
                    <button
                        class="border-2 rounded-[5px] py-[4px] px-[30px] md:py-[5px] md:px-[50px] text-[14px] font-semibold hover:bg-[#fff] hover:text-[#000]"><a
                            href="{{ route('client.introduce') }}">
                            Xem thêm</a></button>
                </div>
            </div>
            <div class="relative rounded-[10px] w-[full] h-[full] mb-[20px] lg:mb-[0]">
                <div>
                    <img class="object-cover rounded-lg" src="./images/image 4 (1).png" alt="">
                </div>
                <div class="absolute text-[#fff] top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] text-center">
                    <p class="text-[20px] md:text-[30px] font-bold">Giá trị cốt lõi </p>
                    <button
                        class="border-2 rounded-[5px] py-[4px] px-[30px] md:py-[5px] md:px-[50px] text-[14px] font-semibold hover:bg-[#fff] hover:text-[#000]"><a
                            href="{{ route('client.introduce') }}">
                            Xem thêm</a></button>
                </div>
            </div>
            <div class="relative rounded-[10px] w-[full] h-[full] mb-[20px] lg:mb-[0]">
                <div>
                    <img class="object-cover rounded-lg" src="./images/image 4 (2).png" alt="">
                </div>
                <div class="absolute text-[#fff] top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] text-center">
                    <p class="text-[20px] md:text-[30px] font-bold">Lời hứa thương hiệu</p>
                    <button
                        class="border-2 rounded-[5px] py-[4px] px-[30px] md:py-[5px] md:px-[50px] text-[14px] font-semibold hover:bg-[#fff] hover:text-[#000]"><a
                            href="{{ route('client.introduce') }}">
                            Xem thêm</a></button>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto bg-[#fff] px-[20px] py-[20px]">
        <div class="text-[#D71A21] text-[30px] font-bold text-center">
            Hệ sinh thái
        </div>

        <hr class="border-t-4 border-rose-600 w-[200px] mx-auto pb-[20px]">

        <div class="text-[20px] font-medium text-center pb-[20px]">
            KINH TẾ SỐ TOÀN DIỆN
        </div>

        <div class="text-center text-[20px] font-normal pb-[100px]">
            <strong>Metaway Holdings</strong> tập trung đầu tư vào các ngành, lĩnh vực hàng đầu có tiềm năng tăng trưởng cao
            trong tương
            lai,
            là trụ cột của nền kinh tế số bao gồm: tài chính, công nghệ, bất động sản và chăm sóc sức khỏe.
        </div>

        <div>
            <img src="./images/Group 1007.png" alt="">
        </div>
    </section>

    <section class="container mx-auto bg-[#fff] px-[20px] pt-[50px]">
        <div class="text-[#D71A21] text-[30px] font-bold text-center">
            ĐỐI TÁC
        </div>

        <hr class="border-t-4 border-rose-600 w-[150px] mx-auto pb-[20px]">

        <div class="text-center text-[20px] font-normal pb-[100px]">
            Metaway Holdings xây dựng mối quan hệ hợp tác bền vững với các đối tác có chung tầm nhìn, chung hệ giá trị đến
            từ nhiều quốc gia. Thông qua sự hợp tác này, chúng tôi cùng nhau kiến tạo những giá trị bền vững cho quý nhà đầu
            tư và các khách hàng thân thiết.
        </div>
    </section>
    <section class="container mx-auto bg-cover px-[60px] py-[30px]"
        style="background-image: url('./images/09_Wallpaper_1 (1) 1.png')">
        <div class="swiper partnerSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide rounded-lg">
                    <div class="partner-frame aspect-[280/80] max-w-[280px] w-full">
                        <img class="object-contain w-full h-full" src="./images/image 55.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide rounded-lg">
                    <div class="partner-frame aspect-[280/80] max-w-[280px] w-full">
                        <img class="object-contain w-full h-full" src="./images/image 56 (1).png" alt="">
                    </div>
                </div>
                <div class="swiper-slide rounded-lg">
                    <div class="partner-frame aspect-[280/80] max-w-[280px] w-full">
                        <img class="object-contain w-full h-full" src="./images/image 56.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide rounded-lg">
                    <div class="partner-frame aspect-[280/80] max-w-[280px] w-full">
                        <img class="object-contain w-full h-full" src="./images/image 57.png " alt="">
                    </div>
                </div>
                <div class="swiper-slide rounded-lg">
                    <div class="partner-frame aspect-[280/80] max-w-[280px] w-full">
                        <img class="object-contain w-full h-full" src="./images/image 58.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide rounded-lg">
                    <div class="partner-frame aspect-[280/80] max-w-[280px] w-full">
                        <img class="object-contain w-full h-full" src="./images/image 66.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide rounded-lg">
                    <div class="partner-frame aspect-[280/80] max-w-[280px] w-full">
                        <img class="object-contain w-full h-full" src="./images/image 67.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide rounded-lg">
                    <div class="partner-frame aspect-[280/80] max-w-[280px] w-full">
                        <img class="object-contain w-full h-full" src="./images/image 68.png" alt="">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="container mx-auto bg-[#fff] pt-[40px]">
        <div class="text-[#D71A21] text-[30px] font-bold text-center">
            Báo chí & Truyền thông
        </div>

        <hr class="border-t-4 border-rose-600 w-[350px] mx-auto pb-[20px]">

        <div class="swiper mediaSwiper ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="media-farm aspect-[360/109] max-w-[360px] w-full">
                        <img class="object-contain w-full h-full" src="./images/Frame 36956.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="media-farm aspect-[360/109] max-w-[360px] w-full">
                        <img class="object-contain w-full h-full" src="./images/Frame 36957.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="media-farm aspect-[360/109] max-w-[360px] w-full">
                        <img class="object-contain w-full h-full" src="./images/Frame 36958.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="media-farm aspect-[360/109] max-w-[360px] w-full">
                        <img class="object-contain w-full h-full" src="./images/Frame 36959.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="media-farm aspect-[360/109] max-w-[360px] w-full">
                        <img class="object-contain w-full h-full" src="./images/Frame 36960.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="media-farm aspect-[360/109] max-w-[360px] w-full">
                        <img class="object-contain w-full h-full" src="./images/Frame 36961.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="media-farm aspect-[360/109] max-w-[360px] w-full">
                        <img class="object-contain w-full h-full" src="./images/Frame 36962.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="media-farm aspect-[360/109] max-w-[360px] w-full">
                        <img class="object-contain w-full h-full" src="./images/Frame 36963.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto bg-[#fff] p-[20px]">
        <div class="text-[#D71A21] text-[30px] font-bold text-center pt-[20px]">
            Tin tức
            <hr class="border-t-2 border-rose-600 w-[150px] mx-auto pb-[20px]">
        </div>

        <div class="swiper newsSwiper">
            <div class="swiper-wrapper">
                @foreach ($posts as $post)
                    <div class="swiper-slide">
                        <div class="news-farm lg:grid grid-cols-5 gap-5">
                            <div class="pb-[30px] lg:col-span-3">
                                <img src="./images/Frame 36950.png" alt="">
                            </div>
                            <div class="lg:col-span-2 ">
                                <p class="text-[30px] font-bold pb-[30px]">{{ $post->title }}</p>
                                <hr class="border-t-2 border-rose-600 mx-auto pb-[30px]">
                                <p class="text-[20px] font-medium text-[#8c8c8c] pb-[30px]">{{ $post->created_at }}</p>
                                <p class="text-[20px] font-medium pb-[30px]">{{ $post->description }}</p>
                                <button class="bg-[#E2373C] font-semibold py-[5px] px-[30px] text-[#fff] hover:opacity-60">
                                    <a href="{{ route('client.news.detail') }}">
                                        Xem thêm +
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="max-w-[200px] mx-auto pt-[20px]">
            <button
                class="border-2 border-[#E2373C] text-[#E2373C] text-[20px] font-bold  px-[20px] xl:px-[30px] py-[5px] xl:py-[10px] rounded-sm hover:bg-[#E2373C] hover:text-[#fff]"><a
                    href="{{ route('client.news') }}">Xem tất cả</a></button>
        </div>
    </section>

@endsection
