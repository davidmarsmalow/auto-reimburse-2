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

    <div class="max-w-4xl mx-auto bg-white p-6 sm:p-8 shadow-md border rounded-none">
        <div class="flex justify-between">
            <div class="mb-6 w-full">
                <h1 class="text-[14px] font-bold underline">Reimbursement Form Project</h1>
                <p class="text-[8px] font-semibold mb-1">as Petty Cash Voucher (sekaligus sebagai bukti pengeluaran petty cash)</p>
                <hr class="mb-1">
                <p class="text-[6px]">Untuk parkir di client, akomodasi proyek, dan keperluan sehubungan dgn fase proyek lainnya.
                </p>
                <p class="text-[6px]">Harus disertai bon/kwitansi. Tanpa bon/kwitansi aseli tidak akan di reimbursh.</p>
            </div>

            <div class="mb-6">
                <img class="w-[250px]" src="img/image2.png">
            </div>
        </div>

        <div class="flex justify-between text-[8px]">
            <!-- Basic Information Section -->
            <div class="grid grid-cols-2 gap-x-8 gap-y-4 mb-6">
                <!-- Name -->
                <div class="flex items-center">
                    <label class=" font-medium text-gray-700 mr-2 whitespace-nowrap" for="name">Name:</label>
                    <input class="border-b border-gray-300" id="name" type="text" value="Kristoforus David R">
                </div>
                <!-- Project Name -->
                <div class="flex items-center">
                    <label class=" font-medium text-gray-700 mr-2 whitespace-nowrap" for="project-name">Project Name:</label>
                    <input class="border-b border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" id="project-name" type="text" value="CMS BSI">
                </div>
                <!-- Dept -->
                <div class="flex items-center">
                    <label class=" font-medium text-gray-700 mr-2 whitespace-nowrap" for="dept">Dept:</label>
                    <input class="border-b border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" id="dept" type="text">
                </div>
                <!-- Client -->
                <div class="flex items-center w-full sm:w-1/2 mb-2 sm:mb-0">
                    <label class=" font-medium text-gray-700 mr-2 whitespace-nowrap" for="client">Client:</label>
                    <input class="border-b border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" id="client" type="text" value="BSI">
                </div>
            </div>

            <!-- No -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
                <div class="flex items-center w-full sm:w-1/2">
                    <label class=" font-medium text-gray-700 mr-2 whitespace-nowrap" for="no">No:</label>
                    <input class="border-b border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" id="no" type="text" value="______ /FR/_______ /20">
                </div>
            </div>
        </div>

        <div class="mb-6 overflow-x-auto">
            <table class="min-w-full bg-white border-1 border-black table-fixed">
                <thead>
                    <tr>
                        <th class="py-2 px-3 font-semibold w-12 border-1 border-black">No</th>
                        <th class="py-2 px-3 font-semibold w-32 border-1 border-black">Date</th>
                        <th class="py-2 px-3 font-semibold w-auto border-1 border-black">Description of Expenses</th>
                        <th class="py-2 px-3 font-semibold w-32 border-1 border-black">Amount</th>
                        <th class="py-2 px-3 font-semibold w-20 border-1 border-black"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">1</td>
                        <td class="py-2 px-3 border-1">26 January 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">2</td>
                        <td class="py-2 px-3 border-1">26 January 2026</td>
                        <td class="py-2 px-3 border-1">Bensin</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 65.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">3</td>
                        <td class="py-2 px-3 border-1">26 January 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 18.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">4</td>
                        <td class="py-2 px-3 border-1">27 January 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">5</td>
                        <td class="py-2 px-3 border-1">27 January 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 12.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">6</td>
                        <td class="py-2 px-3 border-1">28 January 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">7</td>
                        <td class="py-2 px-3 border-1">28 January 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">8</td>
                        <td class="py-2 px-3 border-1">29 January 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">9</td>
                        <td class="py-2 px-3 border-1">29 January 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">10</td>
                        <td class="py-2 px-3 border-1">02 February 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">11</td>
                        <td class="py-2 px-3 border-1">02 February 2026</td>
                        <td class="py-2 px-3 border-1">Bensin</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 65.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">12</td>
                        <td class="py-2 px-3 border-1">02 February 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 20.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">13</td>
                        <td class="py-2 px-3 border-1">03 February 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">14</td>
                        <td class="py-2 px-3 border-1">03 February 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">15</td>
                        <td class="py-2 px-3 border-1">04 February 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">16</td>
                        <td class="py-2 px-3 border-1">04 February 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">17</td>
                        <td class="py-2 px-3 border-1">05 February 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">18</td>
                        <td class="py-2 px-3 border-1">05 February 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">19</td>
                        <td class="py-2 px-3 border-1">09 February 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">20</td>
                        <td class="py-2 px-3 border-1">09 February 2026</td>
                        <td class="py-2 px-3 border-1">Bensin</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 60.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">21</td>
                        <td class="py-2 px-3 border-1">09 February 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 18.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">22</td>
                        <td class="py-2 px-3 border-1">10 February 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">23</td>
                        <td class="py-2 px-3 border-1">10 February 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 14.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">24</td>
                        <td class="py-2 px-3 border-1">11 February 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">25</td>
                        <td class="py-2 px-3 border-1">11 February 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">26</td>
                        <td class="py-2 px-3 border-1">12 February 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">27</td>
                        <td class="py-2 px-3 border-1">12 February 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">28</td>
                        <td class="py-2 px-3 border-1">13 February 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">29</td>
                        <td class="py-2 px-3 border-1">13 February 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="font-bold">
                        <td class="py-2 px-3 border-1 text-right uppercase" colspan="3">TOTAL</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 920.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="font-bold">
                        <td class="py-2 px-3 border-1">Notes</td>
                        <td class="py-2 px-3 border-1" colspan="4">
                            <input class="mt-1 block w-full h-4 rounded-md" type="text" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="grid grid-cols-4 gap-0 text-center">
            <div class="flex flex-col border-1 p-1">
                <p class="font-semibold text-left">Requested By (pemohon) :</p>
                <img class="w-[100px] m-auto" src="img/image1.png">
                <p>(<input class="border-b border-gray-300 text-center" id="name" type="text" value="Kristoforus David R">)</p>
                <p class="mt-1">Date : <input class="inline-block w-24 text-center border-b border-gray-300" type="text" value="{{ today()->format(' d M Y') }}"></p>
            </div>
            <div class="flex flex-col justify-between border-1 p-1">
                <p class="font-semibold text-left">Approved By (Koord/Team Ldr) :</p>
                <div>
                    <p>(<input class="border-b border-gray-300 text-center" id="name" type="text" value="Diki">)</p>
                    <p class="mt-1">Date : <input class="inline-block w-24 text-center border-b border-gray-300" type="text">
                    </p>
                </div>
            </div>
            <div class="flex flex-col justify-between border-1 p-1">
                <p class="font-semibold text-left">Plafon & Doc Checked (Adm):</p>
                <div>
                    <p class="font-semibold">(_____________________)</p>
                    <p class="mt-1">Date : <input class="inline-block w-24 text-center border-b border-gray-300" type="text">
                    </p>
                </div>
            </div>
            <div class="flex flex-col justify-between border-1 p-1">
                <p class="font-semibold text-left">Paid By (Finance):</p>
                <div>
                    <p class="font-semibold">(_____________________)</p>
                    <p class="mt-1">Date : <input class="inline-block w-24 text-center border-b border-gray-300" type="text">
                    </p>
                </div>
            </div>
        </div>

    </div>

    @php
        function randomString($length)
        {
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $result = '';
            $max = strlen($characters) - 1;

            for ($i = 0; $i < $length; $i++) {
                $result .= $characters[random_int(0, $max)];
            }

            return $result;
        }

        function generateTransactionId()
        {
            $date = date('dmy');

            $part1 = randomString(4);
            $part2 = randomString(6);

            return "-$part1-$part2";
        }

        function generateReferenceNo($length = 12)
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
            $result = '';
            $max = strlen($characters) - 1;

            for ($i = 0; $i < $length; $i++) {
                $result .= $characters[random_int(0, $max)];
            }

            return $result;
        }
    @endphp

    <div class="max-w-4xl mx-auto bg-white p-6 break-before-page">
        <ul>
            <li class="my-3">26 January 2026 - 13 January 2026</li>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <div class="">
                    <img class="w-full object-cover" src="{{ asset('storage/parkir/daily/b6lAeNan2dGaRb6glv91IpwuB0qInXVaz0iqEWeI.jpg') }}" alt="Parkir Daily Image">
                </div>
                <div class="">
                    <img class="w-full object-cover" src="{{ asset('storage/parkir/daily/ldf6Op3g2YX0inBfuGv7JfqqyCEpZz2RzPUlSDdt.jpg') }}" alt="Parkir Daily Image">
                </div>
                <div class="">
                    <img class="w-full object-cover" src="{{ asset('storage/parkir/daily/vKqTvMGgP6uAvTBzNo6fLtsr0998lqrWrZXikYO1.jpg') }}" alt="Parkir Daily Image">
                </div>
            </div>

            <div class="break-inside-avoid">
                <li class="my-3">26 January 2026</li>
                <div class="flex flex-wrap gap-3 select-none">
                    
                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            Sate pak jamal madura
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        SM
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
                                            <p class="font-medium">260126{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">26 Jan 2026, 13:23 WIB</p>
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
                                        <p class="font-medium">9360000801168886588</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            WARKOP ANEKA JUS 75
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        WJ
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp15.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260126{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">26 Jan 2026, 14:39 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">Bank DKI</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360011100019886898</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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
                    
                    <div class="p-2 inline-block self-start bg-[#f8f9fa]" style="zoom:0.8">
                        <div class="min-w-[300px] bg-white rounded-[12px] shadow p-3 my-3 mx-1 font-inter">
                            <div class="flex items-center mb-1">
                                <img src="{{ URL::asset('img/pertalite.png') }}" class="h-[50px] mr-2">
                                <h6 class="mb-0 ml-2 font-medium text-base">Pertalite</h6>
                                <span class="ml-auto font-light text-sm" id="struk-liter">6.5 Liter</span>
                            </div>
                            <hr class="my-2 border-t border-[#e0e0e0]">
                            <div class="flex justify-between text-gray-600 text-sm">
                                <span>Harga</span>
                                <span class="font-light" id="struk-harga">Rp 65.000</span>
                            </div>
                            <hr class="my-2 border-t border-[#e0e0e0]">
                            <div class="flex flex-col text-sm font-medium">
                                <div class="flex justify-between mt-1">
                                    <span>SPBU</span>
                                    <span>3410605</span>
                                </div>
                                <div class="flex justify-between mt-1">
                                    <span>Waktu</span>
                                    <span id="struk-tanggal">26 January 2026 08.24 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">27 January 2026</li>
                <div class="flex flex-wrap gap-3 select-none">

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            SOP Iga Ibu IS
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        SI
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp30.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260127{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">27 Jan 2026, 11:20 WIB</p>
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
                                        <p class="font-medium">9360000801132350349</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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
                    
                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            BATAGOR BANG ACIL
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        BA
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp15.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260127{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">27 Jan 2026, 13:43 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">BRI</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360000200416000458</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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
                    
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">28 January 2026</li>
                <div class="flex flex-wrap gap-3 select-none">

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            Gorengan Jangan Pernah Bo
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        GB
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp15.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260128{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">28 Jan 2026, 12:20 WIB</p>
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
                                        <p class="font-medium">9360000801478847767</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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
                    
                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            Kantin Akifah 76
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        KA
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
                                            <p class="font-medium">260128{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">28 Jan 2026, 13:11 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">GoPay</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360091436936842363</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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
                    
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">29 January 2026</li>
                <div class="flex flex-wrap gap-3 select-none">

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            SOTO MIE KANG DOMANG
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        SD
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp20.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260129{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">29 Jan 2026, 11:59 WIB</p>
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
                                        <p class="font-medium">9360000801862604600</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            Rujak buah jus 3 lanang
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        RL
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp22.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260129{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">29 Jan 2026, 12:35 WIB</p>
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
                                        <p class="font-medium">9360000801598423416</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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
                    
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">2 February 2026</li>
                <div class="flex flex-wrap gap-3 select-none">

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            <p class="font-medium">260202{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">2 Feb 2026, 11:44 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">GoPay</p>
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
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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
                    
                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            BATAGOR BANG ACIL
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        BA
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp15.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260202{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">2 Feb 2026, 13:10 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">BRI</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360000200416000458</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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
                    
                    <div class="p-2 inline-block self-start bg-[#f8f9fa]" style="zoom:0.8">
                        <div class="min-w-[300px] bg-white rounded-[12px] shadow p-3 my-3 mx-1 font-inter">
                            <div class="flex items-center mb-1">
                                <img src="{{ URL::asset('img/pertalite.png') }}" class="h-[50px] mr-2">
                                <h6 class="mb-0 ml-2 font-medium text-base">Pertalite</h6>
                                <span class="ml-auto font-light text-sm" id="struk-liter">6.5 Liter</span>
                            </div>
                            <hr class="my-2 border-t border-[#e0e0e0]">
                            <div class="flex justify-between text-gray-600 text-sm">
                                <span>Harga</span>
                                <span class="font-light" id="struk-harga">Rp 65.000</span>
                            </div>
                            <hr class="my-2 border-t border-[#e0e0e0]">
                            <div class="flex flex-col text-sm font-medium">
                                <div class="flex justify-between mt-1">
                                    <span>SPBU</span>
                                    <span>3410605</span>
                                </div>
                                <div class="flex justify-between mt-1">
                                    <span>Waktu</span>
                                    <span id="struk-tanggal">2 February 2026 08.42 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">3 February 2026</li>
                <div class="flex flex-wrap gap-3 select-none">

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            Kantin Akifah 76
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        KA
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
                                            <p class="font-medium">260203{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">3 Feb 2026, 11:37 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">GoPay</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360091436936842363</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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
                    
                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            FamilyMart Sabang Kebon S
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        FS
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp16.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260203{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">3 Feb 2026, 11:43 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">DANA</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360091507281300262</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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
                    
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">4 February 2026</li>
                <div class="flex flex-wrap gap-3 select-none">

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            BATAGOR BANG ACIL
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        BA
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp15.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260204{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">4 Feb 2026, 11:46 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">BRI</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360000200416000458</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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
                    
                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            <p class="font-medium">260204{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">4 Feb 2026, 14:36 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">GoPay</p>
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
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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
                    
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">5 February 2026</li>
                <div class="flex flex-wrap gap-3 select-none">

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                    <div class="text-[20px] font-extrabold">Rp22.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260205{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">5 Feb 2026, 13:18 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">GoPay</p>
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
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            Rujak buah jus 3 lanang
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        RL
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp22.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260205{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">5 Feb 2026, 13:27 WIB</p>
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
                                        <p class="font-medium">9360000801598423416</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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
                    
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">9 February 2026</li>
                <div class="flex flex-wrap gap-3 select-none">

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            FamilyMart Sabang Kebon S
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        FS
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp18.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260209{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">9 Feb 2026, 14:53 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">DANA</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360091507281300262</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                    <div class="text-[20px] font-extrabold">Rp22.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260209{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">9 Feb 2026, 12:53 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">GoPay</p>
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
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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
                    
                    <div class="p-2 inline-block self-start bg-[#f8f9fa]" style="zoom:0.8">
                        <div class="min-w-[300px] bg-white rounded-[12px] shadow p-3 my-3 mx-1 font-inter">
                            <div class="flex items-center mb-1">
                                <img src="{{ URL::asset('img/pertalite.png') }}" class="h-[50px] mr-2">
                                <h6 class="mb-0 ml-2 font-medium text-base">Pertalite</h6>
                                <span class="ml-auto font-light text-sm" id="struk-liter">6 Liter</span>
                            </div>
                            <hr class="my-2 border-t border-[#e0e0e0]">
                            <div class="flex justify-between text-gray-600 text-sm">
                                <span>Harga</span>
                                <span class="font-light" id="struk-harga">Rp 60.000</span>
                            </div>
                            <hr class="my-2 border-t border-[#e0e0e0]">
                            <div class="flex flex-col text-sm font-medium">
                                <div class="flex justify-between mt-1">
                                    <span>SPBU</span>
                                    <span>3410605</span>
                                </div>
                                <div class="flex justify-between mt-1">
                                    <span>Waktu</span>
                                    <span id="struk-tanggal">9 February 2026 08.52 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">10 February 2026</li>
                <div class="flex flex-wrap gap-3 select-none">

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            <p class="font-medium">260210{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">10 Feb 2026, 13:21 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">GoPay</p>
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
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            BATAGOR BANG ACIL
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        BA
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp15.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260210{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">10 Feb 2026, 14:42 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">BRI</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360000200416000458</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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
                    
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">11 February 2026</li>
                <div class="flex flex-wrap gap-3 select-none">

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            Kantin Akifah 76
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        KA
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
                                            <p class="font-medium">260211{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">11 Feb 2026, 12:10 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">GoPay</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360091436936842363</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            FamilyMart Sabang Kebon S
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        FS
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp18.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260211{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">11 Feb 2026, 13:24 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">DANA</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360091507281300262</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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
                    
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">12 February 2026</li>
                <div class="flex flex-wrap gap-3 select-none">

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            Kantin Akifah 76
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        KA
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
                                            <p class="font-medium">260212{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">12 Feb 2026, 11:56 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">GoPay</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360091436936842363</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            BATAGOR BANG ACIL
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        FS
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp15.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260212{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">12 Feb 2026, 13:22 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">BRI</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360000200416000458</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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
                    
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">13 February 2026</li>
                <div class="flex flex-wrap gap-3 select-none">

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            FamilyMart Sabang Kebon S
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        FS
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp18.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260213{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">13 Feb 2026, 12:20 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">DANA</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360091507281300262</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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

                    <div class="w-[300px] break-inside-avoid" style="zoom:0.6">
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
                                            Ayam Lunak kremesan
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        AK
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp23.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260213{{ generateTransactionId() }}</p>
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
                                        <p class="font-medium">13 Feb 2026, 14:00 WIB</p>
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
                                        <p class="font-medium">9360000801688988740</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">{{ generateReferenceNo() }}</p>
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
                    
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

        </ul>
    </div>

</body>

</html>
