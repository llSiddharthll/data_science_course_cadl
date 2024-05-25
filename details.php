<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    backgroundImage: {
                        "custom-radial":
                            "radial-gradient(at center center, #331174 0%, #070000 100%)",
                        "custom-linear":
                            "linear-gradient(180deg, #CE6E4E26 0%, #E928581C 100%)",
                    },
                },
            },
        }
    </script>
</head>

<body>
    <section class="form flex flex-col justify-center items-center gap-4">
        <div class="bg-black text-orange-400  w-full">
            <h1 class="font-bold text-xl py-4 text-center px-8">CONGRATS! YOU ARE JUST ONE STEP AWAY FROM MASTERING
                POWER BI</h1>
        </div>
        <div>
            <h3 class="text-gray-700 text-center font-bold">Anyone from any field can attend this workshop.</h3>
        </div>
        <div>
            <h3 class="font-semibold text-center text-2xl md:text-3xl">Simply Pay <span class="text-red-600 font-bold">₹
                    99 +
                    GST</span> and Get Started</h3>
        </div>

        <div class="bg-[#030a21] text-white w-80  p-4 rounded-3xl">
            <div class="flex items-center justify-center mb-4">
                <img src="images/logo.png" alt="" class="h-20 w-40 p-2">
            </div>
            <h3 class="text-left font-semibold mb-2">Data Science Workshop</h3>
            <p class="text-left text-lg mb-2">₹99.21 <span class="line-through">₹1999</span></p>
            <p class="text-left text-gray-400 font-bold">+ GST</p>
        </div>

        <div class="w-80">
            <form method="post" action="connect.php" class="flex flex-col gap-4">
                <div class="flex flex-col gap-2">
                    <label for="" class="text-sm font-semibold">Full Name<span class="text-red-700">*</span></label>
                    <input type="text" name="full_name" id="" placeholder="Your Name"
                        class="border-[1px] border-gray-400 rounded-lg p-2">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="" class="text-sm font-semibold">Email Address<span class="text-red-700">*</span></label>
                    <input type="text" name="email" id="" placeholder="example@example.com"
                        class="border-[1px] border-gray-400 rounded-lg p-2">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="" class="text-sm font-semibold">Mobile Number (WhatsApp Number)<span
                            class="text-red-700">*</span></label>
                    <div class="flex items-center">
                        <button id="dropdown-phone-button" data-dropdown-toggle="dropdown-phone"
                            class="flex-shrink-0 border-[1px] border-gray-400 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 "
                            type="button">
                            <img src="images/india.png" alt="" class="h-5 pe-2">
                            <span>+91</span>
                            </svg>
                        </button>
                        
                        <label for="phone-input" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Phone
                            number:</label>
                        <div class="relative w-full">
                            <input type="text" name="mobile" id="phone-input"
                                class="border-[1px] border-gray-400 block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-0 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="XXXXXXXXXX" required />
                        </div>
                    </div>
                </div>
                <div class="flex gap-2 items-center font-semibold text-gray-600">
                    <p>You will get updates on your Whatsapp </p><img src="images/wtsp.svg" alt="" class="h-6">
                </div>
                <div>
                    <button class="bg-[#030a21] text-white w-full rounded-full py-4">Next</button>
                </div>

                <div>
                    <p class="text-[11px] text-center text-gray-600">By proceeding you agree to our Terms,Privacy &Refund Policy</p>
                </div>
            </form>
        </div>

        <div>
            <div class="mx-auto max-w-7xl">
                <div id="base-text" class="text-center">
                    <h1 class="font-semibold text-gray-800 md:text-3xl md:font-bold ">Also, register before the deadline to unlock
                        Bonuses worth ₹<!-- --> <!-- -->10,500<!-- -->!</h1>
                </div>
                <div class="m-3 grid grid-cols-1 justify-center gap-4 p-3 text-center md:grid-cols-3" id="bonuses">
                    <div class="mt-4 flex justify-center ">
                        <div class="flex h-auto w-[350px] flex-col items-center rounded-lg border-2 border-black p-2">
                            <p class="h-15 m-2 rounded-lg bg-black p-2 font-bold text-green-500 md:m-3 md:text-xl">Bonus 1</p>
                            <p class=" m-1  whitespace-normal p-1 text-gray-500 md:text-lg">Access to 3 hours Value Packed Live
                                Workshop on Excel using ChatGPT and AI Tools &amp; 30+ MS Excel Automation Templates</p>
                            <p class="m-1 p-1 font-semibold text-red-600 md:text-xl">Value: ₹ <!-- -->4,000</p>
                        </div>
                    </div>
                    <div class="mt-4 flex justify-center ">
                        <div class="flex h-auto w-[350px] flex-col items-center rounded-lg border-2 border-black p-2">
                            <p class="h-15 m-2 rounded-lg bg-black p-2 font-bold text-green-500 md:m-3 md:text-xl">Bonus 2</p>
                            <p class=" m-1  whitespace-normal p-1 text-gray-500 md:text-lg">Complete MS Office Essential Shortcuts
                                Guide to Work 10X Faster in MS Office</p>
                            <p class="m-1 p-1 font-semibold text-red-600 md:text-xl">Value: ₹ <!-- -->3,000</p>
                        </div>
                    </div>
                    <div class="mt-4 flex justify-center ">
                        <div class="flex h-auto w-[350px] flex-col items-center rounded-lg border-2 border-black p-2">
                            <p class="h-15 m-2 rounded-lg bg-black p-2 font-bold text-green-500 md:m-3 md:text-xl">Bonus 3</p>
                            <p class=" m-1  whitespace-normal p-1 text-gray-500 md:text-lg">2 Power BI Practice Projects for Your
                                Resume</p>
                            <p class="m-1 p-1 font-semibold text-red-600 md:text-xl">Value: ₹ <!-- -->3,500</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="m-3 flex flex-col items-center p-3">
            <h1 class="text-center font-normal text-gray-800 md:text-xl md:font-medium ">By the end of this 3-hour certified
                PowerBI Domination Workshop, you will also get a completion certificate by Office Master.</h1>
        </div>

        <div
            class="mx-auto grid max-w-[1400px] grid-cols-1 items-center overflow-hidden bg-gray-50 pb-7 lg:grid-cols-4 lg:px-40">
            <div class="mb-4 flex flex-grow flex-col items-center sm:mr-4">
                <div class="m-1 p-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                        color="#808080" style="color:#808080" height="55px" width="55px" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M376 186h-20v-40c0-55-45-100-100-100S156 91 156 146v40h-20c-22.002 0-40 17.998-40 40v200c0 22.002 17.998 40 40 40h240c22.002 0 40-17.998 40-40V226c0-22.002-17.998-40-40-40zM256 368c-22.002 0-40-17.998-40-40s17.998-40 40-40 40 17.998 40 40-17.998 40-40 40zm62.002-182H193.998v-40c0-34.004 28.003-62.002 62.002-62.002 34.004 0 62.002 27.998 62.002 62.002v40z">
                        </path>
                    </svg></div><span class="m-1 p-1 text-gray-500 md:text-sm">Your Data is Safe With Us</span>
            </div>
            <div class="mb-4 flex flex-grow flex-col items-center md:mr-4">
                <div class="m-1 p-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                        color="#808080" style="color:#808080" height="48px" width="48px" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M479.07 111.36a16 16 0 00-13.15-14.74c-86.5-15.52-122.61-26.74-203.33-63.2a16 16 0 00-13.18 0C168.69 69.88 132.58 81.1 46.08 96.62a16 16 0 00-13.15 14.74c-3.85 61.11 4.36 118.05 24.43 169.24A349.47 349.47 0 00129 393.11c53.47 56.73 110.24 81.37 121.07 85.73a16 16 0 0012 0c10.83-4.36 67.6-29 121.07-85.73a349.47 349.47 0 0071.5-112.51c20.07-51.19 28.28-108.13 24.43-169.24zm-131 75.11l-110.8 128a16 16 0 01-11.41 5.53h-.66a16 16 0 01-11.2-4.57l-49.2-48.2a16 16 0 1122.4-22.86l37 36.29 99.7-115.13a16 16 0 0124.2 20.94z">
                        </path>
                    </svg></div><span class="m-1 p-1 font-medium text-gray-500 md:text-sm">We Protect Your Privacy</span>
            </div>
            <div class="mb-4 flex flex-grow flex-col items-center md:mr-4">
                <div class="m-1 p-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                        color="#808080" style="color:#808080" height="50px" width="50px" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.38 14.72H7.67L6 13H3.53L3 12.5V10.08L1.31 8.36004V7.65004L3 5.93004V3.50004L3.53 3.00004H6L7.67 1.29004H8.38L10.1 3.00004H12.53L13.03 3.49004V5.93004L14.74 7.65004V8.36004L13 10.08V12.5L12.5 13H10.1L8.38 14.72ZM6.73004 10.4799H7.44004L11.21 6.71L10.5 6L7.09004 9.41991L5.71 8.03984L5 8.74984L6.73004 10.4799Z">
                        </path>
                    </svg></div><span class="m-1 p-1 text-center font-medium text-gray-500 md:text-sm">100% Satisfaction
                    Guaranteed</span>
            </div>
            <div class="grid grid-cols-1 place-items-center justify-items-center  p-4 md:p-0 lg:grid-cols-3"><img alt="me"
                    loading="lazy" width="100" height="100" decoding="async" data-nimg="1" class="" style="color:transparent"
                    src="images/ssl.png">
                <div class="h-100 col-span-2 items-start overflow-auto text-center">
                    <h1 class="text-center font-bold text-red-600 sm:mb-0 md:text-sm">100% Secure Transaction.</h1><span
                        class="w-full text-sm font-medium tracking-wider text-gray-500 sm:w-44 ">All orders are through
                        Razorpay, a very secure network. Your credit card information is never stored in any way. We respect
                        your privacy.</span>
                </div>
            </div>
        </div>
    </section>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html>