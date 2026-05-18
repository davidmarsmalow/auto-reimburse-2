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

                    <tr class="font-bold">
                        <td class="py-2 px-3 border-1 text-right uppercase" colspan="3">TOTAL</td>
                        <td class="py-2 px-3 border-1 text-right">Rp. 698.000</td>
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

    

</body>

</html>
