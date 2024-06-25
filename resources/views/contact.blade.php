<x-app-layout>

    <x-slot name="title">It's Me Cy</x-slot>

    <div class="col-span-8 flex justify-center h-screen pt-10 pb-10">
        <div class="bg-white rounded-lg w-full h-full p-5">
            <div class="flex items-center pl-7">
                <h1 class="text-3xl font-semibold mr-6">Contact</h1>
                <div class="bg w-1/4 h-1 rounded"></div>
            </div>

            <div class="bg-green-100 mt-5 overflow-auto p-2" style="max-height: 28rem">
                content
            </div>
          
        </div>
    </div>

    <div class="col-span-1 flex justify-center">
        <div class="bg-white rounded-lg h-80 mt-10 p-2 flex flex-col justify-center space-y-2 > *">
            <div class="w-full flex flex-col items-center">
                <a href="{{ route('hello') }}" class="btn bg-gray-200 rounded w-12 pt-2 pr-3 pl-3 text-lg text-center flex flex-col items-center"><i class="fa-regular fa-user"></i>
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
                <a href="{{ route('contact') }}" class="active-link btn rounded w-12 pt-2 pr-3 pl-3 text-lg text-center flex flex-col items-center"><i class="fa-regular fa-address-book"></i>
                    <h6 style="font-size:10px;">Contacts</h6>
                </a>
            </div>
        </div>
    </div>

</x-app-layout>


