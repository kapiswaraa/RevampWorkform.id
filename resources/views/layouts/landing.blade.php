<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <title>Workfrom.id</title>
    <link rel="icon" href="asset/favicon-32x32.svg" type="image/png">
    <style>
        /* CSS for custom image */
        .custom-image {
            width: 100%;
            /* Sesuaikan lebar gambar sesuai kebutuhan */
            height: 50%;
            /* Tinggi akan disesuaikan secara otomatis sesuai lebar */
        }
    </style>


</head>

<body>
    <!-- navbar -->
    <nav class="bg-white fixed w-full z-20 top-0 left-0 border-b border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
            <a href="{{route('customer.home')}}" class="flex items-center">
                <img src="asset/Logo-WF-1 1.svg" class="h-8 mr-3" alt="Flowbite Logo">
            </a>
            <div class="flex md:order-2">
                <div class="hidden md:block">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative mt-1.5 mr-3">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-2xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari Disini">
                    </div>
                </div>
                <div>
                    <div id="dropdownDefaultButton" data-dropdown-toggle="dropdownIconprofile">
                        <img src="asset/icon7.svg" alt>
                    </div>
                    <!-- Dropdown menu -->
                    <div id="dropdownIconprofile" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="{{route('customer.profile')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                            </li>
                            <li>

                                <a href="{{ route('customer.logout') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Log Out</a>
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-20" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <div class="bloack md:hidden py-4 pl-3 pr-4">
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative mt-1.5 mr-3">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="search" id="default-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-2xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari Disini">
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#about" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">About
                            Us</a>
                    </li>
                    <li>
                        <a href="#kategori" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Fasilitas</a>
                    </li>
                    <li>
                        <a href="#review" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Review</a>
                    </li>
                    <li>
                        <a href="#question" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- hero -->
    <div class="mt-16 flex justify-center" style="height: 645px;  background-size: cover;
            background-position: center; background-image: url('https://images.unsplash.com/photo-1541746972996-4e0b0f43e02a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');">
        <div class="max-w-xl text-center mt-36 text-white">
            <p class="mb-4">Office & Coworking Space</p>
            <p class="text-5xl font-bold text-left mb-10">Temukan Ruangan
                <br> Untuk <span class="text-blue-700">Setiap Pekerjaan</span>
            </p>
            <p class="text-left">Dengan berbagai pilihan ruangan yang dapat
                disesuaikan dengan kebutuhan Anda, kami akan membantu Anda
                mencari ruangan kerja yang sesuai dengan anggaran dan
                kebutuhan Anda. Temukan ruangan kerja Anda sekarang dan
                tingkatkan produktivitas kerja Anda!</p>
        </div>
    </div>
    <!-- logo partner -->
    <div class=" flex justify-center items-center py-10" style="background-color: #DDE1E6;">
        <div class="max-w-screen-xl mx-auto grid grid-cols-2 md:grid-cols-4 md:gap-60 gap-10">
            <div>
                <svg width="115" height="46" viewBox="0 0 115 46" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="115" height="46" fill="url(#pattern1)" />
                    <defs>
                        <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_1112_37853" transform="scale(0.00869565 0.0217391)" />
                        </pattern>
                        <image id="image0_1112_37853" width="115" height="46" xlink:href="data:image/png;base64,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" />
                    </defs>
                </svg>
            </div>
            <div>
                <svg width="126" height="44" viewBox="0 0 126 44" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect x="0.333252" width="125" height="44" fill="url(#pattern2)" />
                    <defs>
                        <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_1112_37854" transform="scale(0.008 0.0227273)" />
                        </pattern>
                        <image id="image0_1112_37854" width="125" height="44" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAH0AAAAsCAQAAADiW3/8AAALAUlEQVRo3u2ZCXQURRqA/+4MyeSe6apJTAJhE4LhEogBTBQiyqqACuFpuCGJSoAkM91V1TMJGB6zwuKDh6wuLLIgyOURxQ3CyooiiKBgOORwjaKCrrrKcxdvn+tCsn/PlWQySRB5DzZa/3uZ7r/+/ru+Ov6/ugJwiYvbxLPURPilFbespYt79AXOGmf/BukXBF5k1keLfNcjzsWi3vkhG22P+IWAuzJZb7G1YqKBrtfrDeKseDDYRlC1QluhOwrC2fWO0W6TnuYYzSK13/IHhKonaElsYpGZpTgKszvN6qWVlcZMidYm8CzjST6S32b8qqn8Lj3aHscKS6KM+4JItcIxsiDskqI7l+jjm6KjvNTcYqZVW84285licUEYE9rqIjMfxh4RvfhBPpffZ++m5Wq7mSKy2QF3FL+Dn3GoIp/9ixcB2G28lh1zmxF9MGpm6WnsNd7F0xXXsC1atZp6SdHFan1y2+hqX/a+v5FcV9cUmdWb+OrKdL6T16iOing9l9WxpWyj9p47StzJj/Aj7E2UYrfMp4ot4q/sZuyEIeJTfpxN5K970XkO+1x71G677NDdcU2noqO7eEMMdoeXdXXLrJRvqrSKCezhkiitp/0uXqs6Ef2oWqrN53UGOtuEi2OBWMSKS2P4c9gNr/OVrlj7EP4C1/gxXmugV8SLajabH2QvschLFdnNIjsE+i5XIRvbCF/SiVWyY3wd361ZXAN4nb5GHNUmVWawar6c7WWqnsv32OPsWfywF32mVU8Q81gxG4BwxXwcO+Tobh+ibVNT2QZ+wEC3R/B17E+sThx1Wy4mjwQDIAdkvDJBHvSGVpOVozsbo68Phe506T86a1yZjc/qadp1LMXw7krWbuT9PLoE/Uae5ZYrrTynIMwepw4uCCu9wm6EN4lfWZ7MMtS+bmwHRoEUt0VkDzVVxGu5xsoHKI3BTNJLZOtpxl0YxGBjLfgbBfGe94Xjb4QHIRoiIdbTkAiIQ71ROqFtBNYYkFF47W1mFCiwCB7EZwCfeAw0tI/BazOYPR6jvHbuKFey/oRerG9oBb0BE90x50ij6e44vS8+JWn9C/DNokcZAWAZWpLhx25zdmtAUDW1yOzKFAPFQJbhNmHOyBbZWrph57ZoSa4BYiDPKolyxbLehkeA2Ymo6Tc7yduxA+XH5SqpRp4uPyGvg3RIlx+SngWGUGPlFfJD8qOQCsnyUmmLXIUdESkvwav75QfABr3kNdJWGIrNS0cfT0o7YJkP/Wm5WnpKXgtd5JngBMnz15O1nWWufNfz+t2toxsiXjBSkdpX28MUnCMnyq8qT+Yvq5kYpnawRQYEL9KWa1ezLY4bWIq2Ddfudu7QkrD2dbaXV+DoP6/msXJxlG3XnhI9eA5fp0cb79dcGAgP8b8Z3QMwUvoBfie9Ip2GKukDmAuJ4IIF0qdQCHOlj6FC+hzuRZgqvPsMJsJ9Uh1MQ+TjMEh6DVaCKr2LVy9JNTBD+nsjurQPpks74QkYIf0Tukq7YKZ31PU1ril6u+j6LgMdk9mTYoaYzT7kbm2S9jxm50Fsp3ag7GrswpnaHn6IF+D4d8boXaTeMstm74wRoJDnlMTjTDnIh/EKtkuM0K5zm0Qe3+qK9QTXeVxzm7X5+lpjA2WgR8uV2NhYHO2FcIO0HTZJ3+G4z5X2Q4S0W14IeXI16k5DBaxCSJwPiJ6H95vhSTgJk6QTMAon9cON6DAHr+6RXoUB0lF5lnQYuvvWLqK7zhMdGzoFY/V2YRe72V+4XhIvlmEye5nfa6DzM+wdx3iQ7J21WvEi36Reg51wmB3RdvNhAfQTfKtYLGhz9KEmMUFsMQKdgR4pO6W9EIVYC+Vl2Ak5CMMR/TUIl3bi5F4A22EgjqoOYxC4BufIcbyvhT/CeBzPdLR5HDvgSJNRfwUmS5uxC6zo5QysgLBGdP280TGQnWZvCYrx+aS9l70ff5OvZk/zWlcsom/m47T95T08oz5NHaVdjaO+S2TjcpAC6C+qo9jwMoLotXyceht23jy+kk/lO5kwMkkfDErhMALm42pUYRJchfcPwyrIh3E4B0zghmKM14/BelgOozEAlkAZrvfdkAy9YC08B5PRphtsQLkfLcM8IVGD3+N8WI82kXCn9AXcHIjYxdp1wl5xLW4vi51D9PLKLNcMNlFf79zg3IB7tFEYAlH4/CKz157N4NPwqfGc49rP49ONBCVKy3rza9W7C8KcE1ghUxBxJVuplSAiC2yB3BW9ncP5CqxZovfhVxoWfBlL0W/F34f0Md4UGuaJwSZP/O6EvxJG43CUMJ8u3IMTiUDGVX/YA/vgMIz1Qcb5IrwZr02eMffmCJPHi9GxB2AjkNYSXYNUENYguWVDjOuCcEOGmi7Hrw4JI3sGJJy3fQTmjGj4tfxafi0XucgYb8Lhp5z1xGbaKm1V7cpgb/gio733xBWfHuyJXu+3pkP9OlsMubdtz8TVHpKlq3IH/YNtrSHx1pYGNJaOIkvJDnKQ7KPbSJV1MESF9GRSuig3eT3RP1tTwTqC/kAb2pW53p26Uu27/5aOCg6AZJ7f2lblV1p+Q8614/mb1kNqQmLCFLqKHqbf03qvNUkJNiLDyCZsTX3AXz39VFlhDTqMiOxiG2tdTg7Qr3xWX5JBly96mHUhORNsHYQeZZ3e0sZj9x69PWDVSeHKV0EWlzU6KIuajGUodJNyF/l3a35tJ0kPfycSR4t6A125hXxDf/QLORt4SX2jFmXOz0Y/i5Pty5ZCPmkNneST/7SFruTQkwH9f+lJ8gLd27QryDNKnNcyITckOpgjU4hPlM6klH7nrVSeJimNAnE/G30PRuCwkNJKiU8ndeRDsp0spZ+FQA8n+wPajxMme08TUgh9nP7Xv+pJmT+Wk4/IKbqDriLvNEVv1nw6MYD+aIjW/Bz0V3Cb/NOK2ZJHesYpYCInWqJb+lHfDCVnSaHn4MRTrKkY9vzW+6Kv8Flfn9gnloCFPPv/gd449VuimyxzArr9YG5mPYh+7av7wnprM0cxHQAdc/k2n+4cZc2trfFY5w2Q55S5Fx2d/Eg2Wl3NpALXUhvotlPKNOXuYKGZF4aekBgIcactN7TYuswJrPctF3/U25TzT26KemHo8d38K52+Hde9hf0YnJVe+3cao0AHQY/uG9AcU7oE2yfc7N+1KR80W2YdAd3aJ/Cu45auwfa24QH0U2C62Oj19DT9uLnYvmoT/Wv6VkshUy8M3dKV+Pag5JT1qhYfNJNw1+994tDFX+vfK6olq7ngh0Zb6AdIT1tGsPj3Wz85wif5deRrkh+8+6du4g9z1R0uueHH8DOBRbM4OLnhlta/edY7HDq2tCQQMb6IT2t6RKHcGYj+79myOh46xGUE1nMDWR44wpAsWeRgoFM2Z3e6HNDfppNs40JJ823o+aKjdmPgo/as8hS9PT4tNtM6Hm19WuWMdUiQo0uE3oCeQ0qM7cLQMbAeaXI2863yD/KRv/Ue2/lgulzQW5GYhAtDByluODnditd65Y3Ylv/46DDoeGSJxxX7Aomsocn8WhLSa1voJJ++Tz8xJDhleE/36EpvLX1XuakFustX9wkpb4L+kV/bmsTS9tBtr/ptbVcEv5UmExc5Rs/gSdI5es72A769xjoiKfSZbDRZ5/NUZ+sffDRNySAl15DEtFBnpDTTW0uuablC8ag31ys02a/rHKnk+LWtSfuR39I/YBse8kwj1TrCOoNUUp1Mxa/12NYPtklPX/sHWiz/A7YSR0/kf79fAAAAAElFTkSuQmCC" />
                    </defs>
                </svg>
            </div>
            <div>
                <svg width="157" height="44" viewBox="0 0 157 44" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect x="0.666626" width="156" height="44" fill="url(#pattern3)" />
                    <defs>
                        <pattern id="pattern3" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_1112_37855" transform="scale(0.00641026 0.0227273)" />
                        </pattern>
                        <image id="image0_1112_37855" width="156" height="44" xlink:href="data:image/png;base64,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" />
                    </defs>
                </svg>
            </div>
            <div>
                <svg width="151" height="44" viewBox="0 0 151 44" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="151" height="44" fill="url(#pattern4)" />
                    <defs>
                        <pattern id="pattern4" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_1112_37856" transform="scale(0.00662252 0.0227273)" />
                        </pattern>
                        <image id="image0_1112_37856" width="151" height="44" xlink:href="data:image/png;base64,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" />
                    </defs>
                </svg>

            </div>
        </div>
    </div>
    <!-- about -->
    <div class="pt-20" id="about">
        <div class="max-w-screen-xl mx-auto my-auto grid grid-cols-1 md:grid-cols-2 gap-10">
            <div>
                <img src="asset/image4.svg" class="max-w-sm md:max-w-none text-center ml-5" alt="">
            </div>
            <div>
                <div class="mt-10 md:mt-28">
                    <p class="text-center text-4xl text-black font-bold mb-14 ">About
                        Us</p>
                    <p class="text-center">Workfrom merupakan sebuah
                        platform yang menghubungkan
                        penyewa dengan ruang kantor yang tepat di mana saja
                        di berbagai lokasi. Kami dapat membantu menemukan
                        kebutuhan penyewa dan pemilik gedung.</p>
                </div>
            </div>
        </div>
    </div>

    @yield('content')
    <!-- question -->
    <div id="question" class="mt-20 w-full py-10" style="background-color: #F2F4F8;">
        <div class="max-w-screen-xl mx-auto my-auto grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="col-span-1 md:mt-20">
                <h1 class="text-4xl font-bold">Frequently <br> Asked <br>Questions</h1>
            </div>
            <div class="col-span-3">
                <div id="accordion-collapse" data-accordion="collapse">
                    <h2 id="accordion-collapse-heading-1">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                            <span>Siapa yang bisa menggunakan aplikasi ini?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                        <div class="p-5 border border-b-0 border-gray-200">
                            <p class="mb-2 text-gray-500">Flowbite
                                is an open-source library of interactive
                                components built on top of Tailwind CSS
                                including buttons, dropdowns, modals,
                                navbars, and more.</p>
                            <p class="text-gray-500">Check
                                out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600  hover:underline">get
                                    started</a> and start developing
                                websites even faster with components on top
                                of Tailwind CSS.</p>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-2">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                            <span>Bagaimana cara saya melakukan pembayaran?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                        <div class="p-5 border border-b-0 border-gray-200">
                            <p class="mb-2 text-black ">Flowbite
                                is first conceptualized and designed using
                                the Figma software so everything you see in
                                the library has a design equivalent in our
                                Figma file.</p>
                            <p class="text-black ">Check
                                out the <a href="https://flowbite.com/figma/" class="text-blue-600  hover:underline">Figma
                                    design system</a> based on the utility
                                classes from Tailwind CSS and components
                                from Flowbite.</p>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-3">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black border border-gray-200 focus:ring-4 focus:ring-gray-200 " data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                            <span>Apakah informasi pribadi saya aman?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                        <div class="p-5 border border-t-0 border-gray-200 ">
                            <p class="mb-2 text-black ">The
                                main difference is that the core components
                                from Flowbite are open source under the MIT
                                license, whereas Tailwind UI is a paid
                                product. Another difference is that Flowbite
                                relies on smaller and standalone components,
                                whereas Tailwind UI offers sections of
                                pages.</p>
                            <p class="mb-2 text-black ">However,
                                we actually recommend using both Flowbite,
                                Flowbite Pro, and even Tailwind UI as there
                                is no technical reason stopping you from
                                using the best of two worlds.</p>
                            <p class="mb-2 text-black ">Learn
                                more about these technologies:</p>
                            <ul class="pl-5 text-black list-disc">
                                <li><a href="https://flowbite.com/pro/" class="text-blue-600  hover:underline">Flowbite
                                        Pro</a></li>
                                <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600  hover:underline">Tailwind
                                        UI</a></li>
                            </ul>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-4">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black border border-gray-200 focus:ring-4 focus:ring-gray-200 " data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                            <span>Bagaimana cara kami menghubungi anda?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                        <div class="p-5 border border-t-0 border-gray-200 ">
                            <p class="mb-2 text-black ">The
                                main difference is that the core components
                                from Flowbite are open source under the MIT
                                license, whereas Tailwind UI is a paid
                                product. Another difference is that Flowbite
                                relies on smaller and standalone components,
                                whereas Tailwind UI offers sections of
                                pages.</p>
                            <p class="mb-2 text-black ">However,
                                we actually recommend using both Flowbite,
                                Flowbite Pro, and even Tailwind UI as there
                                is no technical reason stopping you from
                                using the best of two worlds.</p>
                            <p class="mb-2 text-black ">Learn
                                more about these technologies:</p>
                            <ul class="pl-5 text-black list-disc">
                                <li><a href="https://flowbite.com/pro/" class="text-blue-600  hover:underline">Flowbite
                                        Pro</a></li>
                                <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600  hover:underline">Tailwind
                                        UI</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="bg-white shadow dark:bg-gray-900 ">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">Help</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Contact Us</a>
                    </li>
                </ul>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-8 ">
                            <img src="asset/icon2.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-8 ">
                            <img src="asset/icon3.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-8 ">
                            <img src="asset/icon4.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-8 ">
                            <img src="asset/icon5.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-8 ">
                            <img src="asset/icon6.svg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">©
                2023 <a href="https://flowbite.com/" class="hover:underline">WorkFrom</a>.
                All Rights Reserved.</span>
        </div>
    </footer>


</body>

</html>