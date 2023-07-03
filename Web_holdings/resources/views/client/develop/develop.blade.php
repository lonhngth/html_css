@extends('client.layout.master')
@section('title', 'Phát triển bền vững')
@section('content')
    <section class="container mx-auto">
        <img src="../../images/7 1.png" alt="">
    </section>
    <section class="container mx-auto">
        <div class="p-[30px] md:grid grid-cols-2 gap-[50px]">
            <div class="relative max-w-[700px]">
                <div class="relative aspect-[623/312] max-w-[623px] w-[90%] pb-[10px]">
                    <img class="rounded-lg" src="../../images/image 63.png" alt="">
                </div>
                <hr class="border-t-2 border-rose-600 w-[50%] pb-[20px]">
                <div class="absolute aspect-[377/262] w-[50%] bottom-[0%] right-[-30%] translate-x-[-50%]">
                    <img src="../../images/Frame 37060.png" alt="">
                </div>
            </div>
            <div class="pt-[20px]">
                <p class="text-[#D71A21] text-[24px] font-bold pb-[10px]">
                    Văn hóa doanh nghiệp
                </p>
                <hr class="border-t-2 border-rose-600 w-[260px] pb-[20px]">
                <p class="text-[16px] font-medium pb-[10px]">
                    Văn hóa Metaway Holdings thể hiện qua 3 giá trị cốt lõi của con người Metaway: TRÁCH NHIỆM - TỰ TRỌNG -
                    MINH BẠCH.
                </p>
                <button class="bg-[#D41C23] py-[5px] px-[25px] rounded-sm text-[#fff] hover:opacity-50"><a
                        href="{{ route('client.develop.culture') }}">Xem thêm
                        +</a></button>
            </div>
        </div>

        <div class="p-[30px] flex flex-col-reverse md:grid grid-cols-2 gap-[50px] bg-[#fff]">
            <div class="pt-[20px]">
                <p class="text-[#D71A21] text-[24px] font-bold pb-[10px]">
                    Triết lý nhân sự
                </p>
                <hr class="border-t-2 border-rose-600 w-[200px] pb-[20px]">
                <p class="text-[16px] font-medium pb-[10px]">
                    Metaway Holdings phát triển vững mạnh nhờ nền tảng nhân sự ổn định, vững chuyên môn và giàu kinh nghiệm.
                    Để vươn đến những tầm cao mới, chúng tôi nỗ lực kiện toàn, mở rộng và nâng tầm chất lượng nhân sự bằng
                    chiến lược phát triển nhân sự bền vững.
                </p>
                <button class="bg-[#D41C23] py-[5px] px-[25px] rounded-sm text-[#fff] hover:opacity-50"><a
                        href="{{ route('client.develop.philosophy') }}">Xem thêm
                        +</a></button>
            </div>
            <div class="relative max-w-[700px]">
                <div class="relative aspect-[623/312] max-w-[623px] w-[90%] pb-[10px] float-right">
                    <img class="rounded-lg" src="../../images/image 63 (1).png" alt="">
                </div>
                <hr class="border-t-2 border-rose-600 w-[50%] pb-[20px] ml-[50%]">
                <div
                    class="absolute aspect-[377/262] w-[50%] bottom-[0%] sm:bottom-[25%] lg:bottom-[0%] left-[23%] translate-x-[-50%]">
                    <img class="rounded-lg" src="../../images/image 65.png" alt="">
                </div>
            </div>
        </div>

        <div class="p-[30px] md:grid grid-cols-2 gap-[50px]">
            <div class="relative max-w-[700px]">
                <div class="relative aspect-[623/312] max-w-[623px] w-[90%] pb-[10px]">
                    <img class="rounded-lg" src="../../images/image 63 (2).png" alt="">
                </div>
                <hr class="border-t-2 border-rose-600 w-[50%] pb-[20px]">
                <div
                    class="absolute aspect-[377/262] w-[50%] bottom-[0%] sm:bottom-[35%] lg:bottom-[0%] right-[-30%] translate-x-[-50%]">
                    <img class="rounded-lg" src="../../images/Frame 37060 (1).png" alt="">
                </div>
            </div>
            <div class="pt-[20px]">
                <p class="text-[#D71A21] text-[24px] font-bold pb-[10px]">
                    Môi trường làm việc
                </p>
                <hr class="border-t-2 border-rose-600 w-[260px] pb-[20px]">
                <p class="text-[16px] font-medium pb-[10px]">
                    Con người là tài sản quý giá nhất của Metaway Holdings. Tất cả nhân viên tại Metaway Holdings được làm
                    việc trong môi trường chuyên nghiệp, năng động, tôn trọng, bình đẳng và được trao quyền để khai phóng
                    sức mạnh - sự sáng tạo - tinh thần tự chủ của mỗi cá nhân.
                </p>
                <button class="bg-[#D41C23] py-[5px] px-[25px] rounded-sm text-[#fff] hover:opacity-50"><a
                        href="{{ route('client.develop.environments') }}">Xem thêm
                        +</a></button>
            </div>
        </div>
    </section>

    <section class="container mx-auto pt-[20px] pb-[30px] bg-[#fff]">
        <p class="text-[#D71A21] text-[24px] font-bold pb-[10px] text-center">
            Trách nhiệm xã hội
        </p>
        <hr class="border-t-2 border-rose-600 w-[230px] mx-auto pb-[20px]">
        <p class="font-medium text-[20px] text-center px-[100px]">
            Metaway Holdings cam kết đảm bảo trách nhiệm xã hội luôn là một phần trong hoạt động kinh doanh hàng ngày của
            chúng tôi, nhằm kiến tạo một thế giới tốt đẹp, bền vững hơn cho các thế hệ hiện tại và tương lai.
        </p>

        <div class="pt-[30px] md:grid grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="aspect-[525/308] max-w-[525px] pb-[20px]">
                <div class="p-[20px] bg-[#F0F0F0]">
                    <a href="{{ route('client.develop.orientation') }}" class="text-[20px] font-semibold text-[#181818]">
                        Định hướng phát triển bền vững
                    </a>
                    <p>
                        <a href="{{ route('client.develop.orientation') }}" class="font-normal text-[18px] pt-[10px]">
                            Với chiến lược và tầm nhìn dài hạn, mọi hoạt động của Metaway Holdings đều hướng tới “phát triển
                            bền
                            vững”.
                        </a>
                    </p>
                </div>
                <a href="{{ route('client.develop.orientation') }}">
                    <img src="../../images/image 64.png" alt="">
                </a>
            </div>

            <div class="aspect-[525/308] max-w-[525px] pb-[20px]">
                <div class="p-[20px] bg-[#F0F0F0]">
                    <a href="{{ route('client.develop.commit') }}" class="text-[20px] font-semibold text-[#181818]">
                        Cam kết phát triển bền vững
                    </a>
                    <p>
                        <a href="{{ route('client.develop.commit') }}" class="font-normal text-[18px] pt-[10px]">
                            Metaway Holding luôn chủ động trong việc tăng cường năng lực, đổi mới sáng tạo, đặc biệt là các
                            giải
                            pháp kinh doanh bền vững.
                        </a>
                    </p>
                </div>
                <a href="{{ route('client.develop.commit') }}">
                    <img src="../../images/image 64 (1).png" alt="">
                </a>
            </div>

            <div class="aspect-[525/308] max-w-[525px] pb-[20px]">
                <div class="p-[20px] bg-[#F0F0F0]">
                    <a href="{{ route('client.develop.action') }}" class="text-[20px] font-semibold text-[#181818]">
                        Hành động vì phát triển bền vững
                    </a>
                    <p>
                        <a href="{{ route('client.develop.action') }}" class="font-normal text-[18px] pt-[10px]">
                            Metaway Holdings đã và đang tiên phong trên hành trình “phát triển bền vững” vì một xã hội tốt
                            đẹp
                            hơn bằng những hành động cụ thể.
                        </a>
                    </p>
                </div>
                <a href="{{ route('client.develop.action') }}">
                    <img src="../../images/image 64 (2).png" alt="">
                </a>
            </div>
        </div>
    </section>
@endsection
