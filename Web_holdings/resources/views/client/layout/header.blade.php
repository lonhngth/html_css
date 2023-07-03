<header class="relative container mx-auto h-[137px] pt-[20px] bg-[#fff]">
    <div class="flex justify-around items-center">
        <img class="block 2xl:hidden" src="../../images/Group.png" alt="">
        <ul class="hidden 2xl:flex gap-5 items-center">
            <li class="hover:text-[#C51D23]">
                <a href="{{ route('client.introduce') }}">
                    Giới thiệu
                </a><i class="fa-solid fa-sort-down text-[13px]"></i>
            </li>
            <li class="hover:text-[#C51D23]">
                <a href="{{ route('client.ecosystem') }}">
                    Hệ sinh thái
                </a> <i class="fa-solid fa-sort-down text-[13px]"></i>
            </li>
            <li class="hover:text-[#C51D23]">
                <a href="{{ route('client.develop') }}">Phát triển bền vững </a><i
                    class="fa-solid fa-sort-down text-[13px]">

                </i>
            </li>
            <li class="hover:text-[#C51D23]">
                <a href="{{ route('client.news') }}">
                    Tin tức
                </a><i class="fa-solid fa-sort-down text-[13px]"></i>
            </li>
        </ul>

        <a href="/">
            <img src="../../images/Logo_Metaway_Holdings 1.png" alt="">
        </a>

        <ul class="hidden 2xl:flex gap-5 items-center">
            <li class="hover:text-[#C51D23]">
                <a href="">
                    3D Tour
                </a><i class="fa-solid fa-sort-down text-[13px]"></i>
            </li>
            <li class="hover:text-[#C51D23]">
                <a href="">
                    Quan hệ cổ đông
                </a><i class="fa-solid fa-sort-down text-[13px]"></i>
            </li>
            <li class="hover:text-[#C51D23]">
                <a href="">
                    Tuyển dụng
                </a><i class="fa-solid fa-sort-down text-[13px]"></i>
            </li>
            <li class="hover:text-[#C51D23]">
                <a href="">
                    Liên hệ
                </a><i class="fa-solid fa-sort-down text-[13px]"></i>
            </li>
        </ul>
        <img class="hidden 2xl:block" src="../../images/Group.png" alt="">
        <i id="menu" onclick="toggleMenu()"
            class="hover:text-[#C51D23] cursor-pointer block 2xl:hidden text-[20px] text-[#000] fa-solid fa-bars"></i>
    </div>

    <ul id="menu-box" class="absolute z-10 p-[35px] bg-[#fff] h-[100vh] w-[100%] hidden !xl:hidden">
        <li class="text-[20px] font-medium cursor-pointer pb-[30px] flex justify-between hover:text-[#C51D23]">
            <a href="">
                Giới thiệu
            </a>
            <a href="">
                <i class="fa-sharp fa-solid fa-plus"></i>
            </a>
        </li>
        <li class="text-[20px] font-medium cursor-pointer pb-[30px] flex justify-between hover:text-[#C51D23]">
            <a href="">
                Hệ sinh thái
            </a>
            <a href="">
                <i class="fa-sharp fa-solid fa-plus"></i>
            </a>
        </li>
        <li class="text-[20px] font-medium cursor-pointer pb-[30px] flex justify-between hover:text-[#C51D23]">
            <a href="">
                Phát triển bền vững
            </a>
            <a href="">
                <i class="fa-sharp fa-solid fa-plus"></i>
            </a>
        </li>
        <li class="text-[20px] font-medium cursor-pointer pb-[30px] flex justify-between hover:text-[#C51D23]">
            <a href="">
                Tin tức
            </a>
            <a href="">
                <i class="fa-sharp fa-solid fa-plus"></i>
            </a>
        </li>
        <li class="text-[20px] font-medium cursor-pointer pb-[30px] flex justify-between hover:text-[#C51D23]">
            <a href="">
                Quan hệ cổ đông
            </a>
            <a href="">
                <i class="fa-sharp fa-solid fa-plus"></i>
            </a>
        </li>
        <li class="text-[20px] font-medium cursor-pointer pb-[30px] flex justify-between hover:text-[#C51D23]">
            <a href="">
                Tuyển dụng
            </a>
            <a href="">
                <i class="fa-sharp fa-solid fa-plus"></i>
            </a>
        </li>
        <li class="text-[20px] font-medium cursor-pointer pb-[30px] flex justify-between hover:text-[#C51D23]">
            <a href="">
                Liên hệ
            </a>
            <a href="">
                <i class="fa-sharp fa-solid fa-plus"></i>
            </a>
        </li>
    </ul>
</header>
