<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- Link Swiper's CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            font-size: 18px;
            background: #fff;
            height: calc((100% - 30px) / 2) !important;

            /* Center slide text vertically */
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>
    @include('client.layout.header')
    @yield('content')
    @include('client.layout.footer')

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var swiper = new Swiper(".newsSwiper", {
            direction: "vertical",
            slidesPerView: 1,
            spaceBetween: 30,
            mousewheel: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        var partner_swiper = new Swiper(".partnerSwiper", {
            slidesPerView: 4,
            grid: {
                rows: 2,
                fill: 'rows'
            },
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                    grid: {
                        rows: 2,
                        fill: 'rows'
                    },
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                    grid: {
                        rows: 2,
                        fill: 'rows'
                    },
                }
            }
        });

        var media_swiper = new Swiper(".mediaSwiper", {
            slidesPerView: 4,
            grid: {
                rows: 2,
                fill: 'rows'
            },
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                    grid: {
                        rows: 2,
                        fill: 'rows'
                    },
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                    grid: {
                        rows: 2,
                        fill: 'rows'
                    },
                }
            }
        });

        var swiper = new Swiper(".newsSwiper", {
            direction: "vertical",
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        var swiper = new Swiper(".strengthSwiper", {
            slidesPerView: 2.1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                740: {
                    slidesPerView: 2,
                    spaceBetween: 40
                }
            }
        });

        var swiper = new Swiper(".coreteamSwiper", {
            slidesPerView: 1.5,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                // when window width is >= 480px

                // when window width is >= 640px
                640: {
                    slidesPerView: 2,
                    spaceBetween: 40
                },
                900: {
                    slidesPerView: 3,
                    spaceBetween: 40
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 40
                }
            }
        });

        var partner_swiper = new Swiper(".partnerIntroduceSwiper", {
            slidesPerView: 3,
            grid: {
                rows: 2,
                fill: 'rows'
            },
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                    grid: {
                        rows: 2,
                        fill: 'rows'
                    },
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    grid: {
                        rows: 2,
                        fill: 'rows'
                    },
                }
            }
        });
    </script>

    <script>
        function toggleMenu() {
            var menuBox = document.getElementById('menu-box');
            if (menuBox.style.display == "block") {
                menuBox.style.display = "none";
            } else {
                menuBox.style.display = "block";
            }
        }
    </script>
</body>

</html>
