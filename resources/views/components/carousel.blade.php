<div data-hs-carousel='{
    "loadingClasses": "opacity-0",
    "isAutoPlay": true
  }' class="relative">
    <div class="hs-carousel relative overflow-hidden w-full min-h-[350px] bg-white rounded-lg">
        <div
            class="absolute top-0 bottom-0 flex transition-transform duration-700 opacity-0 hs-carousel-body start-0 flex-nowrap">
            <div class="hs-carousel-slide">
                <div class="flex justify-center h-full bg-gray-200">
                    <img class="w-full h-full" src={{ asset('assets/red-shoe.jpg') }} alt="">
                </div>
            </div>
            <div class="hs-carousel-slide">
                <div class="flex justify-center h-full bg-gray-500">
                    <img class="w-full h-full" src={{ asset('assets/black-shoe.jpg') }} alt="">
                </div>
            </div>
            <div class="hs-carousel-slide">
                <div class="flex justify-center h-full bg-gray-800">
                    <img class="w-full h-full" src={{ asset('assets/sand-shoe.jpg') }} alt="">
                </div>
            </div>
        </div>
    </div>

    <button type="button"
        class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/[.1]">
        <span class="text-2xl" aria-hidden="true">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
            </svg>
        </span>
        <span class="sr-only">Previous</span>
    </button>
    <button type="button"
        class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/[.1]">
        <span class="sr-only">Next</span>
        <span class="text-2xl" aria-hidden="true">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </span>
    </button>

    <div class="absolute flex justify-center space-x-2 hs-carousel-pagination bottom-3 start-0 end-0">
        @for($i = 0; $i < 3; $i++)
            <span
                class="w-3 h-3 border border-gray-400 rounded-full cursor-pointer hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700"
            >
            </span>
        @endfor

    </div>
</div>
