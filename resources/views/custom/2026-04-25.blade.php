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
                        <td class="py-2 px-3 border-1">30 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">2</td>
                        <td class="py-2 px-3 border-1">30 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">3</td>
                        <td class="py-2 px-3 border-1">31 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 39.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">4</td>
                        <td class="py-2 px-3 border-1">31 Mar 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">5</td>
                        <td class="py-2 px-3 border-1">1 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">6</td>
                        <td class="py-2 px-3 border-1">1 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">7</td>
                        <td class="py-2 px-3 border-1">6 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 39.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">7</td>
                        <td class="py-2 px-3 border-1">6 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">8</td>
                        <td class="py-2 px-3 border-1">7 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">9</td>
                        <td class="py-2 px-3 border-1">7 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">10</td>
                        <td class="py-2 px-3 border-1">8 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">11</td>
                        <td class="py-2 px-3 border-1">8 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 18.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">12</td>
                        <td class="py-2 px-3 border-1">9 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 25.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">13</td>
                        <td class="py-2 px-3 border-1">9 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">14</td>
                        <td class="py-2 px-3 border-1">10 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 27.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">15</td>
                        <td class="py-2 px-3 border-1">10 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">16</td>
                        <td class="py-2 px-3 border-1">13 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">17</td>
                        <td class="py-2 px-3 border-1">13 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 18.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">18</td>
                        <td class="py-2 px-3 border-1">14 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 23.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">19</td>
                        <td class="py-2 px-3 border-1">14 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 14.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">20</td>
                        <td class="py-2 px-3 border-1">15 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">21</td>
                        <td class="py-2 px-3 border-1">15 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 18.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">22</td>
                        <td class="py-2 px-3 border-1">16 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">23</td>
                        <td class="py-2 px-3 border-1">16 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 18.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">24</td>
                        <td class="py-2 px-3 border-1">17 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">25</td>
                        <td class="py-2 px-3 border-1">17 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">26</td>
                        <td class="py-2 px-3 border-1">21 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">27</td>
                        <td class="py-2 px-3 border-1">21 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 18.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">28</td>
                        <td class="py-2 px-3 border-1">22 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">29</td>
                        <td class="py-2 px-3 border-1">22 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">30</td>
                        <td class="py-2 px-3 border-1">23 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 40.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">31</td>
                        <td class="py-2 px-3 border-1">23 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 14.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">32</td>
                        <td class="py-2 px-3 border-1">24 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Lunch</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 29.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="border-1">
                        <td class="py-2 px-3 border-1">33</td>
                        <td class="py-2 px-3 border-1">24 Apr 2026</td>
                        <td class="py-2 px-3 border-1">Parkir</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 16.000</td>
                        <td class="py-2 px-3 border-1"></td>
                    </tr>
                    <tr class="font-bold">
                        <td class="py-2 px-3 border-1 text-right uppercase" colspan="3">TOTAL</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 900.000</td>
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

    <div class="max-w-4xl mx-auto bg-white p-6 break-before-page">
        <ul>
            <li class="my-3">30 Mar 2026 - 24 Apr 2026</li>

            <div class="flex flex-wrap gap-3 select-none">
                <div class="">
                    <img class="w-[144px] object-cover" src="{{ asset('storage/parkir/2026-04-25/parkir-1.jpeg') }}" alt="Parkir Daily Image">
                </div>
                <div class="">
                    <img class="w-[144px] object-cover" src="{{ asset('storage/parkir/2026-04-25/parkir-2.jpeg') }}" alt="Parkir Daily Image">
                </div>
                <div class="">
                    <img class="w-[144px] object-cover" src="{{ asset('storage/parkir/2026-04-25/parkir-3.jpeg') }}" alt="Parkir Daily Image">
                </div>
                <div class="">
                    <img class="w-[144px] object-cover" src="{{ asset('storage/parkir/2026-04-25/parkir-4.jpeg') }}" alt="Parkir Daily Image">
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">

            <div class="break-inside-avoid">
                <li class="my-3">30 Mar 2026</li>
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
                                    <div class="text-[20px] font-extrabold">Rp18.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260330-3G9J-3D3K9A</p>
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
                                        <p class="font-medium">30 Mar 2026, 12:46 WIB</p>
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
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1n2xlez95148</p>
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
                                    <div class="text-[20px] font-extrabold">Rp22.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260330-HVYR-KJH4R3</p>
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
                                        <p class="font-medium">30 Mar 2026, 15:04 WIB</p>
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
                                        <p class="font-medium">1n31gfl58683</p>
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
                <li class="my-3">31 Mar 2026</li>
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
                                            KEDAI AYAGUL
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">Jakarta Pusat (</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        KA
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
                                            <p class="font-medium">260331-BEKW-4RLCHD</p>
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
                                        <p class="font-medium">31 Mar 2026, 13:34 WIB</p>
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
                                        <p class="font-medium">9360000801694302993</p>
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
                                        <p class="font-medium">1n42yj601536</p>
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
                                    <div class="text-[20px] font-extrabold">Rp16.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260331-D9TJ-RTLJ9N</p>
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
                                        <p class="font-medium">31 Mar 2026, 14:25 WIB</p>
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
                                        <p class="font-medium">1n44dik72925</p>
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
                <li class="my-3">1 April 2026</li>
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
                                    <div class="text-[20px] font-extrabold">Rp24.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260401-AVT3-KBUGJN</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">01 Apr 2026, 12:01 WIB</p>
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
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1n54dm641986</p>
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
                                            Elzah Coffee n Smoothie,
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA SELATAN</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        ES
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
                                            <p class="font-medium">260401-P4AK-2NKDQF</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">1 Apr 2026, 15:53 WIB</p>
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
                                        <p class="font-medium">9360091438549205491</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1n5asmn83809</p>
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
                <li class="my-3">6 Apr 2026</li>
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
                                        <p class="text-gray-400 text-[11px]">Jakarta Pusat (</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        SD
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
                                            <p class="font-medium">260406-8CNE-LQLQK8</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">06 Apr 2026, 12:46 WIB</p>
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
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1napmcq91228</p>
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
                                    <div class="text-[20px] font-extrabold">Rp16.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260406-E4PQ-Z39W3A</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">06 Apr 2026, 14:09 WIB</p>
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
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1narxcz71956</p>
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
                <li class="my-3">7 Apr 2026</li>
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
                                    <div class="text-[20px] font-extrabold">Rp27.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260407-NREL-KFJBVY</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">07 Apr 2026, 13:06 WIB</p>
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
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A02</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1nbu6g782149</p>
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
                                    <div class="text-[20px] font-extrabold">Rp18.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260407-DLFY-EV947H</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">07 Apr 2026, 15:48 WIB</p>
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
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1nbyoh360929</p>
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
                <li class="my-3">8 Apr 2026</li>
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
                                    <div class="text-[20px] font-extrabold">Rp40.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260408-C3ZD-B7PUJA</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">08 Mar 2026, 13:59 WIB</p>
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
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A02</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1nczmkf66944</p>
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
                <li class="my-3">9 Apr 2026</li>
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
                                        <p class="text-gray-400 text-[11px]">Jakarta Pusat (</p>
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
                                            <p class="font-medium">260409-GHQX-7W7Q9P</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">09 Apr 2026, 13:10 WIB</p>
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
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1ne2ao358310</p>
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
                <li class="my-3">10 Apr 2026</li>
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
                                    <div class="text-[20px] font-extrabold">Rp27.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260410-PCRJ-8QX8Y4</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">10 Apr 2026, 10:41 WIB</p>
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
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1nf240r18729</p>
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
                <li class="my-3">13 Apr 2026</li>
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
                                            GADO GADO UJANG
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        GU
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp17.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260413-CZME-6M2EU2</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">13 Apr 2026, 12:52 WIB</p>
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
                                        <p class="font-medium">9360054810000127221</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1nihsc066848</p>
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
                                    <div class="text-[20px] font-extrabold">Rp24.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260413-8NJZ-4QXQQY</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">13 Apr 2026, 15:13 WIB</p>
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
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1niloch59425</p>
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
                <li class="my-3">14 Apr 2026</li>
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
                                        <p class="text-gray-400 text-[11px]">Jakarta Pusat (</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        SD
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
                                            <p class="font-medium">260414-79PU-32T8A8</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">14 Apr 2026, 12:51 WIB</p>
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
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1njlqft52059</p>
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
                <li class="my-3">15 Apr 2026</li>
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
                                    <div class="text-[20px] font-extrabold">Rp23.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260415-PZE7-WLQPN4</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">15 Apr 2026, 11:47 WIB</p>
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
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A02</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1nknzjb13213</p>
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
                                    <div class="text-[20px] font-extrabold">Rp26.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260415-A3A9-PFP8G7</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">15 Apr 2026, 16:22 WIB</p>
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
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1nkvmjb83938</p>
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
                <li class="my-3">16 Apr 2026</li>
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
                                            WARKOP LAMRI
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        WL
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
                                            <p class="font-medium">260416-JFBC-DQ92NJ</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">16 Apr 2026, 11:29 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">BSI</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360045100006254787</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">0000181015</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1nlrhmf49573</p>
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
                                    <div class="text-[20px] font-extrabold">Rp24.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260416-YW4P-8DDUZG</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">16 Apr 2026, 15:05 WIB</p>
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
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1nlxgn266592</p>
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
                <li class="my-3">17 Apr 2026</li>
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
                                            Masakan SEHATi
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">Jakarta Selatan</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        MS
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
                                            <p class="font-medium">260417-W9KF-VVEL2N</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">17 Apr 2026, 12:12 WIB</p>
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
                                        <p class="font-medium">9360000801778234138</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1nmwoqa33692</p>
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
                                    <div class="text-[20px] font-extrabold">Rp18.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260417-XPKU-Z2WLLV</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">17 Apr 2026, 16:12 WIB</p>
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
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1nn3cr417968</p>
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
                <li class="my-3">21 Apr 2026</li>
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
                                            Bakso Mang Ili Paspampres
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        BP
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
                                            <p class="font-medium">260421-K6PN-NX3AUM</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">21 Apr 2026, 12:50 WIB</p>
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
                                        <p class="font-medium">9360091433646823353</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A02</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1nrdpfb39147</p>
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
                                    <div class="text-[20px] font-extrabold">Rp27.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260421-FC64-X4RPYK</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">21 Apr 2026, 14:32 WIB</p>
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
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1nrgjfz00565</p>
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
                <li class="my-3">22 Apr 2026</li>
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
                                            Ayam Kremes 52
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        A5
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp28.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260422-G7TN-HREZPT</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">22 Apr 2026, 13:01 WIB</p>
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
                                        <p class="font-medium">9360000802061448120</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1nsi1jb51608</p>
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
                                            RIMA SITI MARIAM FOOD
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        RF
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
                                            <p class="font-medium">260422-H8AB-HF28N2</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">22 Apr 2026, 16:04 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">BSI</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360045100006254118</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">0000519991</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1nsn4jh99004</p>
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
                <li class="my-3">23 Apr 2026</li>
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
                                    <div class="text-[20px] font-extrabold">Rp27.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260423-J87K-ZDRMYH</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">23 Apr 2026, 10:37 WIB</p>
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
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1nti0lz77083</p>
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
                                    <div class="text-[20px] font-extrabold">Rp27.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260423-QXZJ-UT7C2T</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">23 Apr 2026, 16:15 WIB</p>
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
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1ntrend29641</p>
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
                <li class="my-3">24 Apr 2026</li>
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
                                            WARKOP LAMRI
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        WL
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
                                            <p class="font-medium">260424-4VM2-MV93JL</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">24 Apr 2026, 11:01 WIB</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Acquirer Name</p>
                                        <p class="font-medium">BSI</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Fee</p>
                                        <p class="font-medium">Free</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Merchant PAN</p>
                                        <p class="font-medium">9360045100006254787</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">0000181015</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1numoqr61298</p>
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
                                            raja es kelapa muda 46
                                        </h1>
                                        <p class="text-gray-400 text-[11px]">JAKARTA SELATAN</p>
                                    </div>

                                    <div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
                                        R4
                                    </div>
                                </div>

                                <hr class="border-dashed border-gray-300 my-1">

                                <!-- Amount -->
                                <div class="flex justify-between items-center mb-3">
                                    <div class="text-[20px] font-extrabold">Rp11.000</div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-700 text-[11px]">
                                    <div class="flex justify-between items-center mb-3">
                                        <div>
                                            <p class="text-gray-400">Transaction ID</p>
                                            <p class="font-medium">260424-WTCF-7W7NTR</p>
                                        </div>
                                        <span class="px-2 py-1 rounded-full bg-green-100 text-green-600 font-semibold text-[10px]">
                                            Success
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Account Source</p>
                                        <p class="font-medium">
                                            KRISTOFORUS DAVID RENALDY<br>
                                            Jago 103583111591
                                        </p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Source Of Fund</p>
                                        <p class="font-medium">103583111591</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Transaction date & time</p>
                                        <p class="font-medium">24 Apr 2026, 13:47 WIB</p>
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
                                        <p class="font-medium">93600008001409630902</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Customer PAN</p>
                                        <p class="font-medium">9360054213583111599</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Terminal ID</p>
                                        <p class="font-medium">A01</p>
                                    </div>

                                    <div>
                                        <p class="text-gray-400">Reference Number</p>
                                        <p class="font-medium">1nurbri16619</p>
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
