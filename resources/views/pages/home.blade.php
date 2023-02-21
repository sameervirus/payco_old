<x-app-layout>
    <div class="flex flex-col py-12 lg:py-32">
        <div class="flex justify-center items-center">
            <img src="/images/vector.png" alt="vector" class=" w-[18px] h-[22px]">
            <p class="text-primary ml-3 font-bold uppercase text-xl">Secure digital Wallet</p>
        </div>
        <div class="text-center px-3 lg:px-72">
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
        <div class="grid lg:grid-cols-2 gap-10 justify-center items-center mt-20 lg:mt-40 py-12 lg:py-20 lg:px-28 ">
            <div class="flex items-center mx-5 px-6 lg:px-12 py-10 lg:py-4 rounded-[20px] border-solid border-2 border-[#848484] backdrop-blur-[10px]">
                <h2 class="text-[#FFD5BA] text-xl lg:text-3xl uppercase leading-[20px] lg:leading-[45px]">Personal Money Remittance and Social Payments</h2>
                <img class="w-[125px] lg:w-[225px] -mt-16" src="/images/990_3.png" alt="Personal Money Remittance and Social Payments">
            </div>
            <div class="flex items-center mx-5 px-6 lg:px-12 py-10 lg:py-4 rounded-[20px] border-solid border-2 border-[#848484] backdrop-blur-[10px]">
                <h2 class="text-[#FFD5BA] text-xl lg:text-3xl uppercase leading-[20px] lg:leading-[45px]">Business Letters of Credit and Point of sale services for businesses</h2>
                <img class="w-[150px] lg:w-[303px] -mt-[68px] -mr-8 lg:-mr-16" src="/images/990_4.png" alt="Personal Money Remittance and Social Payments">
            </div>
        </div>
        <div class="bg-cover flex items-center w-full" style="background-image: url('/images/exclude.png')">
            <div class="absolute right-0">
                <img class="h-[200px] lg:h-auto" src="/images/iPhone_13_Pro.png" alt="iPhone_13_Pro">
            </div>
            <div class="mx-5 pr-20 lg:px-28 py-40 lg:py-64 lg:pr-[50%]">
                <h2 class="text-lg lg:text-[40px] text-[#424242] font-semibold lg:leading-[60px] tracking-[-0.03em]">Secure and convenient services for individuals and businesses</h2>
                <p class="lg:text-2xl mt-4 lg:mt-24 text-[#525252] lg:leading-[38px]">All transactions are regulated by the trusted financial system of Switzerland. Get started now and join the thousands of individuals and businesses who trust Payco for their cross-border payment needs.</p>
                <x-primary-button contentClasses="mt-4 lg:mt-24 border-primary text-white bg-primary hover:text-black hover:bg-white/[0.13] hover:border-primary">
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
            <div class="flex gap-4 my-5 lg:my-10 lg:mx-28">
                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                    <path d="M41.8334 21.0001C41.8334 26.5254 39.6385 31.8245 35.7315 35.7315C31.8245 39.6385 26.5254 41.8334 21.0001 41.8334C18.2642 41.8334 15.5551 41.2945 13.0275 40.2476C10.4999 39.2006 8.20324 37.666 6.26869 35.7315C4.33414 33.7969 2.79956 31.5003 1.75259 28.9727C0.705617 26.445 0.166747 23.736 0.166747 21.0001C0.166747 18.2642 0.705618 15.5551 1.75259 13.0275C2.79956 10.4999 4.33414 8.20324 6.26869 6.26869C10.1757 2.36168 15.4747 0.166749 21.0001 0.166749C26.5254 0.166749 31.8245 2.36168 35.7315 6.26869C37.666 8.20325 39.2006 10.4999 40.2476 13.0275C41.2945 15.5551 41.8334 18.2642 41.8334 21.0001ZM37.6668 21.0001C37.6668 16.5798 35.9108 12.3406 32.7852 9.21497C29.6596 6.08936 25.4204 4.33342 21.0001 4.33342C16.5798 4.33342 12.3406 6.08936 9.21497 9.21497C6.08936 12.3406 4.33341 16.5798 4.33341 21.0001C4.33341 25.4204 6.08936 29.6596 9.21497 32.7852C12.3406 35.9108 16.5798 37.6668 21.0001 37.6668C25.4204 37.6668 29.6596 35.9108 32.7852 32.7852C35.9108 29.6596 37.6668 25.4204 37.6668 21.0001ZM25.1667 31.4168L14.7501 21.0001L25.1667 10.5834L25.1667 31.4168Z" fill="white" fill-opacity="0.5"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                    <path d="M0.166579 21.0001C0.166579 18.2642 0.705451 15.5551 1.75242 13.0275C2.7994 10.4999 4.33397 8.20324 6.26852 6.26869C10.1755 2.36168 15.4746 0.166747 20.9999 0.166747C26.5253 0.166747 31.8243 2.36168 35.7313 6.26869C39.6383 10.1757 41.8333 15.4747 41.8333 21.0001C41.8333 23.736 41.2944 26.445 40.2474 28.9727C39.2004 31.5003 37.6659 33.7969 35.7313 35.7315C33.7968 37.666 31.5001 39.2006 28.9725 40.2476C26.4449 41.2945 23.7358 41.8334 20.9999 41.8334C15.4746 41.8334 10.1755 39.6385 6.26852 35.7315C2.36151 31.8245 0.166579 26.5254 0.166579 21.0001ZM16.8332 31.4167L27.2499 21.0001L16.8332 10.5834L16.8332 31.4167Z" fill="white"/>
                </svg>

            </div>
        </section>
        <section class="flex flex-col w-full relative" style="background-image: url('/images/rectangle_9546.png')">
            <div class="flex flex-col items-center mx-5 my-10 lg:my-16 lg:mx-44 lg:py-16 lg:px-16 border rounded-[90px] border-solid border-[rgba(255,255,255,0.5)]">
                <h2 class="font-[275] text-6xl leading-[90px] text-center tracking-[-0.02em] text-white lg:mb-10">Let’s Start investing your money with <span class=" uppercase text-primary font-semibold ">Payco</span></h2>
                <x-primary-button contentClasses="border-white text-white bg-white/[0.13] hover:text-white hover:bg-primary">
                    <a href="#" class="uppercase font-medium lg:text-lg">Invest With Payco</a>
                </x-primary-button>
            </div>
            <img class="absolute top-5 right-10" src="/images/Bar_Chart.png" alt="Invest With Payco">
            <img src="/imagesCircular_Chart.png" alt="Invest With Payco">

        </section>
    </div>
</x-app-layout>
