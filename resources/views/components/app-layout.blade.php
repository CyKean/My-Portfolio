<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel App' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/style.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .button{
    background-color: #1c2a3c;
    font-size: 14px;
}
.button:hover{
    background-color: #2f4765;
}
.image{
    background-image: url('/images/image.png');
}
.bg{
    background-color: #202b38;
}
.btn:hover,.btn:active{
    background-color: #2f4765;
    color: white;
}
::-webkit-scrollbar {
    width: 3px; /* Adjust the width as needed */
}
.active-link {
    background-color: #2f4765;
    color: white !important;
}
.link {
    background-color: #f1f1f1; /* Ensure default background for inactive links */
}
.active-btn{
    background-color: #2f4765;
    color: white !important;
}
    </style>
</head>
<body style="background-color: #202b38;">
    <div class="container mx-auto">

        <div class="relative flex flex-col overflow-auto top-0 h-screen">
            <div class="grid grid-cols-12">
    
                <div class="col-span-3 flex flex-col justify-center items-center">
                    <div class="bg-white mt-1 rounded-lg w-2/4 p-1 -m-10 z-10">
                        <div class="image w-full h-36 rounded-lg" style="background-image: url('/storage/images/image.png'); background-size: cover; background-position: center;">
                            
                        </div>
                    </div>
                    <div class="bg-white rounded-lg w-4/5 p-3 pt-10 pb-3 flex flex-col items-center">
                        <div><h1 class="text-xl font-semibold">Perjes, Cy Kean</h1></div>
                        <div><h6 class="text-xs">Web/Mobile Developer</h6></div>
    
                        <div class="w-full flex justify-center mt-3 space-x-3 > *">
                            <a href="" class="btn bg-gray-200 rounded pr-1 pl-1 text-lg"><i class="fa-brands fa-facebook"></i></a>
                            <a href="" class="btn bg-gray-200 rounded pr-1 pl-1 text-lg"><i class="fa-brands fa-github"></i></a>
                            <a href="" class="btn bg-gray-200 rounded pr-1 pl-1 text-lg"><i class="fa-brands fa-linkedin"></i></i></a>
                        </div>
    
                        <div class="w-full bg-gray-200 mt-2 rounded mb-3 h-3/4 p-4 space-y-1 > *">
                            <div class="w-full flex border-b border-gray-300 pb-2 items-center">
                                <a href="" class="bg-white rounded w-9 p-1 pr-2 pl-2 text-lg shadow text-center"><i class="fa-solid fa-mobile-screen-button"></i></a>
                                <h1 class="text-sm ml-3">+63 992-4334-316</h1>
                            </div>
                            <div class="w-full flex border-b border-gray-300 pb-2 items-center">
                                <a href="" class="bg-white rounded w-9 p-1 pr-2 pl-2 text-lg shadow text-center"><i class="fa-solid fa-envelope-open-text"></i></a>
                                <h1 class="text-xs ml-3">perjescykean356@gmail.com</h1>
                            </div>
                            <div class="w-full flex border-b border-gray-300 pb-2 items-center">
                                <a href="" class="bg-white rounded w-12 p-1 pr-2 pl-2 text-lg shadow text-center"><i class="fa-solid fa-location-dot"></i></a>
                                <h1 class="text-xs ml-3">Sitio Canto, Baco, Oriental Mindoro, Philippines</h1>
                            </div>
                            <div class="w-full flex border-b border-gray-300 pb-2 items-center">
                                <a href="" class="bg-white rounded w-9 p-1 pr-2 pl-2 text-lg shadow text-center"><i class="fa-regular fa-calendar"></i></a>
                                <h1 class="text-sm ml-3">September 05, 2003</h1>
                            </div>
                        </div>
    
                        <div class="w-2/4 flex justify-center mb-3">
                            <button class="button p-1 rounded w-full text-white shadow">Download CV</button>
                        </div>
                    </div>
                </div>
    
                {{ $slot }}

                <div class="col-span-1 flex justify-center">
                    <div class="bg-white rounded-lg h-80 mt-10 p-2 flex flex-col justify-center space-y-2 > *">
                        <div class="w-full flex flex-col items-center">
                            <a href="{{ route('hello') }}" class="active-link btn rounded w-12 pt-2 pr-3 pl-3 text-lg text-center flex flex-col items-center"><i class="fa-regular fa-user"></i>
                                <h6 style="font-size:10px;">About</h6>
                            </a>
                        </div>
                        <div class="w-full flex flex-col items-center">
                            <a href="{{ route('resume') }}" class="btn bg-gray-200 rounded w-12 pt-2 pr-3 pl-3 text-lg text-center flex flex-col items-center"><i class="fa-regular fa-file"></i>
                                <h6 style="font-size:10px;">Resume</h6>
                            </a>
                        </div>
                        <div class="w-full flex flex-col items-center">
                            <a href="{{ route('works') }}" class="btn bg-gray-200 rounded w-12 pt-2 pr-3 pl-3 text-lg text-center flex flex-col items-center"><i class="fa-solid fa-briefcase"></i>
                                <h6 style="font-size:10px;">Works</h6>
                            </a>
                        </div>
                        <div class="w-full flex flex-col items-center">
                            <a href="{{ route('contact') }}" class="btn bg-gray-200 rounded w-12 pt-2 pr-3 pl-3 text-lg text-center flex flex-col items-center"><i class="fa-regular fa-address-book"></i>
                                <h6 style="font-size:10px;">Contacts</h6>
                            </a>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>

    </div>
    

</body>
</html>
