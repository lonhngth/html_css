@extends('client.layout.master')
@section('title', 'Tin tức')
@section('content')
    <section class="container mx-auto">
        <img src="../../images/Untitled-2-Recovered 1.png" alt="">
    </section>

    <section class="container mx-auto bg-[#fff] px-[50px] pt-[20px] pb-[50px]">
        <div class="text-[#D71A21] text-[30px] font-bold pb-[10px]">
            Báo chí - Truyền thông
        </div>

        <hr class="border-t-4 border-rose-600 w-[320px] pb-[20px]">

        <div class="md:grid grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="max-w-[530px]">
                <div>
                    <img src="../../images/new2 1.png" alt="">
                </div>
                <p class="text-[20px] font-medium py-[20px]">Những điều cần biết về kinh tế số</p>
                <hr class="border-t-2 border-rose-600">
                <div class="flex justify-between p-[10px]">
                    <p>2022-10-15</p>
                    <button
                        class="border-2 border-rose-600 text-[#D41C23] py-[5px] px-[20px] rounded-md hover:bg-[#E2373C] hover:text-[#fff]">Xem
                        chi
                        tiết</button>
                </div>
            </div>
            <div class="max-w-[530px]">
                <div>
                    <img src="../../images/new2 1.png" alt="">
                </div>
                <p class="text-[20px] font-medium py-[20px]">Những điều cần biết về kinh tế số</p>
                <hr class="border-t-2 border-rose-600">
                <div class="flex justify-between p-[10px]">
                    <p>2022-10-15</p>
                    <button
                        class="border-2 border-rose-600 text-[#D41C23] py-[5px] px-[20px] rounded-md hover:bg-[#E2373C] hover:text-[#fff]">Xem
                        chi
                        tiết</button>
                </div>
            </div>
            <div class="max-w-[530px]">
                <div>
                    <img src="../../images/new2 1.png" alt="">
                </div>
                <p class="text-[20px] font-medium py-[20px]">Những điều cần biết về kinh tế số</p>
                <hr class="border-t-2 border-rose-600">
                <div class="flex justify-between p-[10px]">
                    <p>2022-10-15</p>
                    <button
                        class="border-2 border-rose-600 text-[#D41C23] py-[5px] px-[20px] rounded-md hover:bg-[#E2373C] hover:text-[#fff]">Xem
                        chi
                        tiết</button>
                </div>
            </div>
        </div>
        <div class=" w-[150px] mx-auto pt-[50px]">
            <button
                class="border-2 border-rose-600 text-[#D41C23] py-[5px] px-[25px] rounded-md hover:bg-[#E2373C] hover:text-[#fff]">Xem
                thêm</button>
        </div>
    </section>

    <section class="container mx-auto bg-[#fff] px-[100px] pt-[20px pb-[50px]">
        <div class="text-[#D71A21] text-[30px] font-bold pb-[10px]">
            Điểm tin Metaway
        </div>

        <hr class="border-t-4 border-rose-600 w-[250px] pb-[20px]">

        <div class="md:grid grid-cols-2 pb-[20px]">
            <div class="h-[370px]">
                <img class="object-cover h-full" src="../../images/image 56 (2).png" alt="">
            </div>
            <div class="p-[20px] bg-[#EFEFEF] h-[370px]">
                <p class="text-[18px] lg:text-[20px] font-semibold pb-[10px]">Chuyên gia công nghệ Lsrael kỳ vọng cùng
                    Metaway Holdings
                    vươn tầm quốc
                    tế</p>
                <hr class="border-t-2 border-rose-600 pb-[10px]">
                <p class="text-[16px] lg:text-[18px] font-normal text-[#808080] pb-[10px]">SBS Consulting mong muốn Metaway
                    Holdings sẽ
                    lựa
                    chọn SBS
                    Consulting là
                    đối tác toàn
                    cầu, góp phần đưa
                    những sản phẩm và hệ sinh thái MetaWorld ra thị trường thế giới.</p>
                <div class="flex justify-between p-[10px] text-[#808080]">
                    <p class="text-[18px] font-normal">2022-10-15</p>
                    <button class="bg-[#D41C23] text-[#fff] py-[5px] px-[20px] rounded-md hover:opacity-60"><a
                            href="{{ route('client.news.detail') }}">
                            Chi tiết
                        </a>
                        +</button>
                </div>
            </div>
        </div>
        <div class="md:grid grid-cols-2 pb-[20px]">
            <div class="h-[370px]">
                <img class="object-cover h-full" src="../../images/image 56 (2).png" alt="">
            </div>
            <div class="p-[20px] bg-[#EFEFEF] h-[370px]">
                <p class="text-[18px] lg:text-[20px] font-semibold pb-[10px]">Chuyên gia công nghệ Lsrael kỳ vọng cùng
                    Metaway Holdings
                    vươn tầm quốc
                    tế</p>
                <hr class="border-t-2 border-rose-600 pb-[10px]">
                <p class="text-[16px] lg:text-[18px] font-normal text-[#808080] pb-[10px]">SBS Consulting mong muốn Metaway
                    Holdings sẽ lựa
                    chọn SBS
                    Consulting là
                    đối tác toàn
                    cầu, góp phần đưa
                    những sản phẩm và hệ sinh thái MetaWorld ra thị trường thế giới.</p>
                <div class="flex justify-between p-[10px] text-[#808080]">
                    <p class="text-[18px] font-normal">2022-10-15</p>
                    <button class="bg-[#D41C23] text-[#fff] py-[5px] px-[20px] rounded-md hover:opacity-60"><a
                            href="{{ route('client.news.detail') }}">
                            Chi tiết
                        </a>
                        +</button>
                </div>
            </div>
        </div>
        <div class="md:grid grid-cols-2 pb-[20px]">
            <div class="h-[370px]">
                <img class="object-cover h-full" src="../../images/image 56 (2).png" alt="">
            </div>
            <div class="p-[20px] bg-[#EFEFEF] h-[370px]">
                <p class="text-[18px] lg:text-[20px] font-semibold pb-[10px]">Chuyên gia công nghệ Lsrael kỳ vọng cùng
                    Metaway Holdings
                    vươn tầm quốc
                    tế</p>
                <hr class="border-t-2 border-rose-600 pb-[10px]">
                <p class="text-[16px] lg:text-[18px] font-normal text-[#808080] pb-[10px]">SBS Consulting mong muốn Metaway
                    Holdings sẽ lựa
                    chọn SBS
                    Consulting là
                    đối tác toàn
                    cầu, góp phần đưa
                    những sản phẩm và hệ sinh thái MetaWorld ra thị trường thế giới.</p>
                <div class="flex justify-between p-[10px] text-[#808080]">
                    <p class="text-[18px] font-normal">2022-10-15</p>
                    <button class="bg-[#D41C23] text-[#fff] py-[5px] px-[20px] rounded-md hover:opacity-60"><a
                            href="{{ route('client.news.detail') }}">
                            Chi tiết
                        </a>
                        +</button>
                </div>
            </div>
        </div>

        <div class=" w-[150px] mx-auto pt-[50px]">
            <button
                class="border-2 border-rose-600 text-[#D41C23] py-[5px] px-[25px] rounded-md hover:bg-[#E2373C] hover:text-[#fff]">Xem
                thêm</button>
        </div>
    </section>
@endsection
