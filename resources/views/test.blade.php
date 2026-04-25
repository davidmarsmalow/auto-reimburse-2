<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-[8px]">
    <div class="max-w-xs mx-auto p-4 break-before-page select-none">

        <!-- Logo -->
        <div class="text-center mb-4">
            <img class="w-[90px] mx-auto" src="/img/jago.png" alt="Jago Logo">
        </div>

        <!-- Receipt Card -->
        <div class="relative rounded-xl border border-gray-200 shadow-md p-4 bg-white overflow-hidden">
            <!-- Background -->
            <div class="absolute inset-0 opacity-50 pointer-events-none" style="
                    background-image: url('/img/jago-backdrop.png');
                    background-size: 650px;
                    background-repeat: repeat;
                "></div>

            <div class="relative z-10">
                <!-- Header -->
                <div class="flex justify-between items-start mb-3">
                    <div>
                        <h1 class="text-[15px] font-bold leading-tight">
                            Cinto Minang, Kebon Sirih
                        </h1>
                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                    </div>

                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                        CS
                    </div>
                </div>

                <hr class="border-dashed border-gray-300 my-1">

                <!-- Amount -->
                <div class="flex justify-between items-center mb-3">
                    <div class="text-[20px] font-extrabold">Rp25.000</div>
                </div>

                <!-- Details -->
                <div class="space-y-2 text-gray-700 text-[11px]">
                    <div class="flex justify-between items-center mb-3">
                        <div>
                            <p class="text-gray-400">Transaction ID</p>
                            <p class="font-medium">260119-6Q6R-H4Y79V</p>
                        </div>
                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                            Success
                        </span>
                    </div>

                    <div>
                        <p class="text-gray-400">Account Source</p>
                        <p class="font-medium">
                            KRISTOFORUS DAVID RENALDY<br>
                            Jago 100395736072
                        </p>
                    </div>

                    <div>
                        <p class="text-gray-400">Source Of Fund</p>
                        <p class="font-medium">100395736072</p>
                    </div>

                    <div>
                        <p class="text-gray-400">Transaction date & time</p>
                        <p class="font-medium">19 Jan 2026, 13:05 WIB</p>
                    </div>

                    <div>
                        <p class="text-gray-400">Acquirer Name</p>
                        <p class="font-medium">Bank Mandiri</p>
                    </div>

                    <div>
                        <p class="text-gray-400">Fee</p>
                        <p class="font-medium">Free</p>
                    </div>

                    <div>
                        <p class="text-gray-400">Merchant PAN</p>
                        <p class="font-medium">9360091435401764656</p>
                    </div>

                    <div>
                        <p class="text-gray-400">Customer PAN</p>
                        <p class="font-medium">9360054210395736076</p>
                    </div>

                    <div>
                        <p class="text-gray-400">Reference Number</p>
                        <p class="font-medium">3dveq3lno3oy</p>
                    </div>
                </div>

                <hr class="border-dashed border-gray-300 mt-4 mb-3">

                <!-- Footer -->
                <div class="text-center text-gray-500 text-[10px] my-1">
                    <p>This receipt is legitimate proof of transaction</p>
                    <p class="text-gray-700 my-1">Have a question?</p>
                    <span class="font-bold">Ask Tanya Jago 24/7</span>
                </div>
            </div>
        </div>
    </div>
</body>
