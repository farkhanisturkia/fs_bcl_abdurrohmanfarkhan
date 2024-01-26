<div class="px-64 py-6 bg-gradient-to-r from-white to-blue-400 h-[100vh]">
    <div>
        <div class="flex justify-between items-center">
            <div>
                <img src="img/Logo.png" class="w-[250px]">
            </div>
            <div class="space-x-12 z-50">
                @if (Route::has('login'))
                    @auth
                        <Link href="{{ url('/dashboard') }}" class="no-underline text-md font-semibold text-black">Dashboard</Link>
                    @else
                        <Link href="{{ route('login') }}" class="no-underline text-md font-semibold text-black">Login</Link>
        
                        @if (Route::has('register'))
                            <Link href="{{ route('register') }}" class="py-2.5 px-3 no-underline text-md font-semibold text-red-500 rounded-md border border-red-500 hover:shadow-md">Register</Link>
                        @endif
                    @endauth
                @endif
            </div>
            <svg class="absolute top-0 right-20 w-[700px]" id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
                        <stop id="stop1" stop-color="rgba(0, 255, 233.834, 1)" offset="0%"></stop>
                        <stop id="stop2" stop-color="rgba(0, 148.813, 182.513, 1)" offset="100%"></stop>
                    </linearGradient>
                </defs>
                <path fill="url(#sw-gradient)" d="M8.4,-17.3C10,-13.7,9.7,-9.6,12.3,-6.6C15,-3.6,20.6,-1.8,25.6,2.9C30.6,7.6,34.9,15.1,33.9,20.9C32.9,26.7,26.4,30.6,19.9,34.7C13.3,38.8,6.7,43,-0.1,43.2C-6.9,43.4,-13.7,39.5,-20.8,35.8C-27.9,32,-35.2,28.3,-34.3,22.3C-33.4,16.4,-24.2,8.2,-22.6,0.9C-21,-6.4,-27,-12.7,-27.3,-17.4C-27.5,-22.2,-21.9,-25.3,-16.4,-26.6C-10.9,-28,-5.5,-27.5,-1,-25.8C3.4,-24,6.9,-20.9,8.4,-17.3Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;" stroke="url(#sw-gradient)"></path>
            </svg>
        </div>
        <div class="pt-40 flex item-center">
            <div class="w-[450px]">
                <div>
                    <div class="grid gap-4">
                        <div class="grid gap-4">
                            <p class="font-bold text-2xl">Berkat Cipta<span class="text-blue-500"> Logistics</span></p>
                            <span class="font-semibold text-5xl text-slate-400">Your trusted logistics partner</span>
                            <span class=" text-black">International Domestics Logistic Service.<br>
                                Supported by experience staff members. <br>
                                Processes and technologies, we are commited to deliver <br>
                                one stop solution and result for our business clients.<br>
                                We are located in Tanjung Perak Surabaya.
                            </span>
                            <div class="mt-3">
                                <a class="px-2.5 py-4 bg-blue-400 rounded-md font-semibold text-white hover:shadow-lg hover:bg-blue-200 hover:text-black" href="#">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img class="w-[450px] absolute top-60 right-[400px]" src="img/Logistik.png">
            </div>
        </div>
    </div>
</div>