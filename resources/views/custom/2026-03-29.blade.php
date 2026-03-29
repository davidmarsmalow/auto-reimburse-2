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
                        <td class="py-2 px-3 border-1">23 Feb 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">2</td>
                        <td class="py-2 px-3 border-1">23 Feb 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 14.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">3</td>
                        <td class="py-2 px-3 border-1">23 Feb 2026</td>
                        <td class="py-2 px-3 border-1">Bensin</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 65.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">4</td>
                        <td class="py-2 px-3 border-1">24 Feb 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 15.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">5</td>
                        <td class="py-2 px-3 border-1">24 Feb 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 14.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">6</td>
                        <td class="py-2 px-3 border-1">25 Feb 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 27.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">7</td>
                        <td class="py-2 px-3 border-1">25 Feb 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 14.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">8</td>
                        <td class="py-2 px-3 border-1">26 Feb 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">9</td>
                        <td class="py-2 px-3 border-1">26 Feb 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 14.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">10</td>
                        <td class="py-2 px-3 border-1">27 Feb 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 24.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">11</td>
                        <td class="py-2 px-3 border-1">27 Feb 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 14.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">12</td>
                        <td class="py-2 px-3 border-1">2 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">13</td>
                        <td class="py-2 px-3 border-1">2 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 20.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">14</td>
                        <td class="py-2 px-3 border-1">2 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Bensin</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 65.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">15</td>
                        <td class="py-2 px-3 border-1">3 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 14.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">16</td>
                        <td class="py-2 px-3 border-1">4 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 14.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">17</td>
                        <td class="py-2 px-3 border-1">5 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 20.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">18</td>
                        <td class="py-2 px-3 border-1">5 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">19</td>
                        <td class="py-2 px-3 border-1">6 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">20</td>
                        <td class="py-2 px-3 border-1">9 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 20.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">21</td>
                        <td class="py-2 px-3 border-1">9 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">22</td>
                        <td class="py-2 px-3 border-1">9 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Bensin</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 65.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">23</td>
                        <td class="py-2 px-3 border-1">10 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 23.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">24</td>
                        <td class="py-2 px-3 border-1">10 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 12.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">25</td>
                        <td class="py-2 px-3 border-1">12 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">27</td>
                        <td class="py-2 px-3 border-1">13 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">28</td>
                        <td class="py-2 px-3 border-1">16 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 30.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">29</td>
                        <td class="py-2 px-3 border-1">16 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 14.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">30</td>
                        <td class="py-2 px-3 border-1">25 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 25.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">31</td>
                        <td class="py-2 px-3 border-1">25 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 12.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">32</td>
                        <td class="py-2 px-3 border-1">26 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 31.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">33</td>
                        <td class="py-2 px-3 border-1">26 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 14.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">34</td>
                        <td class="py-2 px-3 border-1">27 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">35</td>
                        <td class="py-2 px-3 border-1">27 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 18.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="font-bold">
                        <td class="py-2 px-3 border-1 text-right uppercase" colspan="3">TOTAL</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 838.000</td>
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
            <li class="my-3">23 Feb 2026 - 27 Mar 2026</li>

            <div class="flex flex-wrap gap-3 select-none">
                <div class="">
                    <img class="w-[144px] object-cover" src="{{ asset('storage/parkir/2026-03-29/Parkir 1.jpeg') }}" alt="Parkir Daily Image">
                </div>
                <div class="">
                    <img class="w-[144px] object-cover" src="{{ asset('storage/parkir/2026-03-29/Parkir 2.jpeg') }}" alt="Parkir Daily Image">
                </div>
                <div class="">
                    <img class="w-[144px] object-cover" src="{{ asset('storage/parkir/2026-03-29/Parkir 3.jpeg') }}" alt="Parkir Daily Image">
                </div>
                <div class="">
                    <img class="w-[144px] object-cover" src="{{ asset('storage/parkir/2026-03-29/Parkir 4.jpeg') }}" alt="Parkir Daily Image">
                </div>
                <div class="">
                    <img class="w-[144px] object-cover" src="{{ asset('storage/parkir/2026-03-29/Parkir 5.jpeg') }}" alt="Parkir Daily Image">
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">23 Feb 2026</li>
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
                                            Pondok Bunda, Cempaka Put
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        PP
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
                                            <p class="font-medium">260223-L3JT-KT7X3V</p>
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
                                        <p class="font-medium">23 Feb 2026, 16:45 WIB</p>
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
                                        <p class="font-medium">9360091439520772970</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1m08hm765582</p>
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
                                            AYAM TALIWANG OM YUSRIL
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        AY
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
                                            <p class="font-medium">260223-6CA3-P28GCA</p>
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
                                        <p class="font-medium">23 Feb 2026, 12:43 WIB</p>
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
                                        <p class="font-medium">9360000915040766683</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1m01ilf99630</p>
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
                    
                    <div class="">
                        <img class="w-[144px] object-cover" src="{{ asset('storage/bensin/2026-03-29/Bensin 1.jpeg') }}">
                    </div>

                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">24 Feb 2026</li>
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
                                            WARTEG SEDERHANA 6 SABANG
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">Jakarta Pusat (</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        WS
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
                                            <p class="font-medium">260224-LMMF-R97LW4</p>
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
                                        <p class="font-medium">24 Feb 2026, 12:10 WIB</p>
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
                                        <p class="font-medium">9360000801562381046</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1m14mor29569</p>
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
                <li class="my-3">25 Feb 2026</li>
                <div class="flex flex-wrap gap-3 select-none">

                    <div class="">
                        <img class="w-[144px] object-cover" src="{{ asset('storage/makan/2026-03-29/Transfer 1.jpeg') }}">
                    </div>
                    
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">26 Feb 2026</li>
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
                                            KEBAB SELAMET MARDANI,Ja
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        KJ
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp32.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260226-9PHR-D9YW8A</p>
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
                                        <p class="font-medium">26 Feb 2026, 17:42 WIB</p>
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
                                        <p class="font-medium">9360091438105807656</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1m3lt3r04051</p>
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
                                            Warteg Sederhana 6 Sabang
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        WS
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
                                            <p class="font-medium">260226-UMDB-WYZB86</p>
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
                                        <p class="font-medium">26 Feb 2026, 13:22 WIB</p>
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
                                        <p class="font-medium">9360091433640288850</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A02</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1m3el2s90678</p>
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
                <li class="my-3">27 Feb 2026</li>
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
                                            Warteg Sederhana 6 Sabang
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        WS
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp24.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260227-784A-2FE2BT</p>
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
                                        <p class="font-medium">27 Feb 2026, 12:52 WIB</p>
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
                                        <p class="font-medium">9360091433640288850</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1m4hs6421459</p>
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
                <li class="my-3">2 Mar 2026</li>
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
                                            Warteg Sederhana 6 Sabang
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        WS
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp24.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260302-M4GG-FDEA29</p>
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
                                        <p class="font-medium">02 Mar 2026, 12:38 WIB</p>
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
                                        <p class="font-medium">9360091433640288850</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A02</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1m7tehh13052</p>
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
                                        <p class="text-gray-400 text-[11px]">Jakarta Pusat (</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        RL
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
                                            <p class="font-medium">260302-DHWA-R67RXT</p>
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
                                        <p class="font-medium">02 Mar 2026, 12:58 WIB</p>
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
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1m7tyh078812</p>
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

                    <div class="">
                        <img class="w-[144px] object-cover" src="{{ asset('storage/bensin/2026-03-29/Bensin 2.jpeg') }}">
                    </div>
                    
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">5 Mar 2026</li>
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
                                            Rujak buah jus 3 lanang
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">Jakarta Pusat (</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        RL
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
                                            <p class="font-medium">260305-U4GP-R4GVCH</p>
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
                                        <p class="font-medium">05 Mar 2026, 13:53 WIB</p>
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
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1m7tyh078812</p>
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
                <li class="my-3">9 Mar 2026</li>
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
                                            Gado Gado Reyhan 70
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        G7
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
                                            <p class="font-medium">260309-6UKG-HM97JJ</p>
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
                                        <p class="font-medium">9 Mar 2026, 13:27 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">Bank Nobu</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360050322500000977</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1mfmret98733</p>
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

                    <div class="">
                        <img class="w-[144px] object-cover" src="{{ asset('storage/bensin/2026-03-29/Bensin 3.jpeg') }}">
                    </div>
                    
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">10 Mar 2026</li>
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
                                            Ayamlunak AA
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">Jakarta Pusat (</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        FS
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
                                            <p class="font-medium">260310-W2BZ-ZHN234</p>
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
                                        <p class="font-medium">10 Mar 2026, 13:10 WIB</p>
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
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1mgqaj264904</p>
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
                <li class="my-3">16 Mar 2026</li>
                <div class="flex flex-wrap gap-3 select-none">

                    <div class="">
                        <img class="w-[144px] object-cover" src="{{ asset('storage/makan/2026-03-29/Transfer 2.jpeg') }}">
                    </div>
                    
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">25 Mar 2026</li>
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
                                            Rujak buah jus 3 lanang
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">Jakarta Pusat (</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        RL
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
                                            <p class="font-medium">260325-HXPC-QUAN6H</p>
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
                                        <p class="font-medium">25 Mar 2026, 12:27 WIB</p>
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
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1mxd2q546460</p>
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
                <li class="my-3">26 Mar 2026</li>
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
                                            Warteg Sederhana 6 Sabang
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        WS
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp31.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260326-ZHTM-P6YLF4</p>
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
                                        <p class="font-medium">26 Mar 2026, 11:51 WIB</p>
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
                                        <p class="font-medium">9360091433640288850</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A02</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1myg21o64234</p>
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
                <li class="my-3">27 Mar 2026</li>
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
                                            FMI PURI MATARI 2
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA SELATAN</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        F2
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp42.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260327-GET2-2A2G8F</p>
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
                                        <p class="font-medium">27 Mar 2026, 15:54 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">BANK MAS</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360054810000078564</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054210395736076</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1mzqu5s36738</p>
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
