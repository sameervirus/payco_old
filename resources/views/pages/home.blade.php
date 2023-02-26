<x-app-layout>
    <div class="absolute left-0 top-0 min-h-[1290px] w-full -z-10 bg-cover" style="background-image: url('/images/1060_1.png');background-repeat: no-repeat;"></div>
    <div class="flex flex-col pt-12 lg:pt-32">
        <div class="flex justify-center items-center">
            <img src="/images/vector.png" alt="vector" class=" w-[18px] h-[22px]">
            <p class="text-primary ml-3 font-bold uppercase text-xl">Secure digital Wallet</p>
        </div>
        <div class="text-center px-3 lg:px-80">
            <h1 class="mt-5 text-white text-3xl lg:text-5xl font-extrabold uppercase leading-[40px] lg:leading-[80px] ">Secure and convenient cross-border payments</h1>
            <p class="mt-5 lg:text-xl text-white font-thin">Payco is a digital solution for cross-border payments, providing secure and convenient services for individuals and businesses. With Payco, you can easily send money internationally, issue letters of credit, and conduct transactions using our secure digital wallet.</p>
        </div>
        <div class="flex flex-col gap-5 lg:gap-10 items-center justify-center lg:flex-row mt-10 lg:mt-20">
            <x-primary-button contentClasses="border-white text-white bg-white/[0.13] hover:text-white hover:bg-primary">
                <a href="#" class="uppercase font-medium lg:text-lg">Get Started</a>
            </x-primary-button>
            <x-primary-button contentClasses="border-white text-white bg-primary hover:text-white hover:bg-white/[0.13]">
                <a href="#" class="uppercase font-medium lg:text-lg">Invest With Payco</a>
            </x-primary-button>
        </div>
        <div class="hidden grid lg:grid-cols-2 gap-10 justify-center items-center mt-20 lg:mt-40 py-12 lg:py-20 lg:px-28 ">
            <div class="flex items-center mx-5 px-6 lg:px-12 py-10 lg:py-4 rounded-[20px] border-solid border-2 border-[#848484] backdrop-blur-[10px]">
                <h2 class="text-[#FFD5BA] text-xl lg:text-3xl uppercase leading-[20px] lg:leading-[45px]">Personal Money Remittance and Social Payments</h2>
                <img class="w-[125px] lg:w-[225px] -mt-16" src="/images/990_3.png" alt="Personal Money Remittance and Social Payments">
            </div>
            <div class="flex items-center mx-5 px-6 lg:px-12 py-10 lg:py-4 rounded-[20px] border-solid border-2 border-[#848484] backdrop-blur-[10px]">
                <h2 class="text-[#FFD5BA] text-xl lg:text-3xl uppercase leading-[20px] lg:leading-[45px]">Business Letters of Credit and Point of sale services for businesses</h2>
                <img class="w-[150px] lg:w-[303px] -mt-[68px] -mr-8 lg:-mr-16" src="/images/990_4.png" alt="Personal Money Remittance and Social Payments">
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-10 lg:justify-between items-center px-5 lg:px-36 mt-20 backdrop-blur-[5px]">
            <div class="flex lg:col-span-5 lg:min-w-[553px] py-5 lg:py-24 items-center text-white uppercase font-light lg:text-[26px]">
                <img class="w-[47px] h-[47px] lg:w-[73px] lg:h-[73px] mr-4 lg:mr-8" src="images/payment1.svg" alt="Payment" />
                <p>Personal Money Remittance and Social Payments</p>
                <div class="hidden lg:block w-[2px] h-[85px] mx-10 bg-gradient-to-r from-[#F4B554] to-[#E09F3C] "></div>
            </div>

            <div class="flex lg:col-span-5 lg:min-w-[553px] py-5 lg:py-24 items-center text-white uppercase font-light lg:text-[26px]">
                <img class="w-[47px] h-[47px] lg:w-[73px] lg:h-[73px] mr-4 lg:mr-8" src="images/payment2.svg" alt="Payment" />
                <p>Business Letters of Credit and Point of sale services for businesses</p>
            </div>
        </div>
        <div class="relative bg-cover flex items-center w-full lg:-mt-24 z-10" style="background-image: url('/images/exclude.png');background-position: right;">
            <div class="hidden lg:block  absolute bottom-[10.5%] right-[8%]">
                <img class="h-[200px] lg:h-auto" src="/images/iPhone_13_Pro.png" alt="iPhone_13_Pro">
            </div>
            <div class="lg:hidden absolute bottom-[9.5%] right-[8%]">
                <img class="" src="/images/phone-sm.png" alt="iPhone_13_Pro">
            </div>
            <div class="mx-5 pr-32 lg:px-28 py-20 lg:py-64 lg:pr-[20%]">
                <h2 class="text-[13px] lg:text-[40px] text-[#424242] font-semibold lg:leading-[60px] tracking-[-0.03em]">Secure and convenient services for individuals and businesses</h2>
                <p class="text-[10px] lg:text-2xl mt-4 lg:mt-16 text-[#525252] lg:leading-[38px]">All transactions are regulated by the trusted financial system of Switzerland. Get started now and join the thousands of individuals and businesses who trust Payco for their cross-border payment needs.</p>
                <x-primary-button contentClasses="mt-4 lg:mt-16 border-primary text-white bg-primary hover:text-black hover:bg-white/[0.13] hover:border-primary">
                    <a href="#" class="uppercase font-medium lg:text-lg">Get Started Now</a>
                </x-primary-button>
            </div>

        </div>
        <section class="flex flex-col mx-5 my-10">
            <div>
                <x-section-title><span class="text-primary">T</span>estmonials</x-section-title>
                <x-section-subtitle>What our customer are saying...</x-section-subtitle>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mx-0 lg:mx-28 lg:mt-6">
                <x-testmonials-card
                    img="ellipse_1.png"
                    text="Investing with Payco was a really nice experience as i could make payments anywhere around the world with single click in addition keeping my money safely"
                    name="Stephen Brekke"
                />
                <x-testmonials-card
                    img="ellipse_2.png"
                    text="Investing with Payco was a really nice experience as i could make payments anywhere around the world with single click in addition keeping my money safely"
                    name="Stephen Brekke"
                />
                <x-testmonials-card
                    img="ellipse_3.png"
                    text="Investing with Payco was a really nice experience as i could make payments anywhere around the world with single click in addition keeping my money safely"
                    name="Stephen Brekke"
                />
            </div>
            <div class="flex gap-4 my-5 lg:my-10 lg:mx-28 justify-center">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="21" cy="21" r="20.5" transform="matrix(4.37114e-08 1 1 -4.37114e-08 0 0)" stroke="white" stroke-opacity="0.3"/>
                    <g clip-path="url(#clip0_123_2709)">
                    <path d="M23.4042 24.4292L22.6667 25.1667L18.5 21.0001L22.6667 16.8334L23.4042 17.5709L19.975 21.0001L23.4042 24.4292Z" fill="white" fill-opacity="0.3"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_123_2709">
                    <rect width="10" height="10" fill="white" transform="matrix(1 -8.74228e-08 -8.74228e-08 -1 16 26)"/>
                    </clipPath>
                    </defs>
                </svg>

                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="21" cy="21" r="20.5" transform="rotate(90 21 21)" stroke="white"/>
                    <g clip-path="url(#clip0_123_2708)">
                    <path d="M18.5958 24.4292L19.3333 25.1667L23.5 21.0001L19.3333 16.8334L18.5958 17.5709L22.025 21.0001L18.5958 24.4292Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_123_2708">
                    <rect width="10" height="10" fill="white" transform="translate(26 26) rotate(-180)"/>
                    </clipPath>
                    </defs>
                </svg>
            </div>
        </section>
        <section class="flex flex-col w-full relative">
            <div class="flex flex-col relative overflow-hidden items-center lg:my-16 lg:mx-8 lg:py-16 lg:px-16 border rounded-[20px] lg:rounded-[90px] border-none rounded-br-none lg:rounded-br-none"
            style="background-image: url('/images/rectangle_9546.png')">
                <div class="absolute left-0 top-0 w-full h-full bg-cover" style="background: linear-gradient(266.6deg, #94554A 1.04%, #5353A7 97.52%);opacity: 0.85;backdrop-filter: blur(5px);"></div>
                <div class="absolute left-0 top-0 w-full h-full bg-cover" style="background-image: url('/images/mask-group.png')"></div>
                <div class="grid grid-cols-2 gap-2 lg:gap-8 items-center z-10 px-3 py-6 lg:py-10 lg:px-16 lg:mb-20">
                    <h2 class="text-sm lg:text-5xl font-extrabold leading-[30px] lg:leading-[85px] tracking-[-0.02em] text-white">Start investing your money with <img class="h-[15px] lg:h-12 inline-flex ml-2 -mt-2 lg:-mt-5" src="/images/white_logo.png" alt="" /></h2>
                    <p class="text-[10px] lg:text-[22px] font-light text-[#F2F2F2] lg:leading-[43px]">Our digital wallet and platform make it easy to send money internationally, issue letters of credit, and conduct transactions with confidence.</p>
                </div>
                <div class="flex lg:grid lg:grid-cols-2 gap-4 lg:gap-8 items-center z-10 px-0 pb-5 lg:px-16">
                    <x-primary-button contentClasses="border-white text-primary bg-white hover:text-white hover:bg-primary">
                        <a href="#" class="uppercase lg:font-medium text-sm lg:text-lg">Get Started</a>
                    </x-primary-button>
                    <x-primary-button contentClasses="border-white text-white bg-white/[0.13] hover:text-white hover:bg-primary">
                        <a href="#" class="uppercase lg:font-medium text-sm lg:text-lg">Invest With Payco</a>
                    </x-primary-button>
                </div>
            </div>

        </section>
    </div>
</x-app-layout>
