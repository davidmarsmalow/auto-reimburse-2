<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.bunny.net">
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
				<img src="img/image2.png" class="w-[250px]">
			</div>
		</div>

		<div class="flex justify-between text-[8px]">
			<!-- Basic Information Section -->
			<div class="grid grid-cols-2 gap-x-8 gap-y-4 mb-6">
				<!-- Name -->
				<div class="flex items-center">
					<label for="name" class=" font-medium text-gray-700 mr-2 whitespace-nowrap">Name:</label>
					<input
						type="text"
						id="name"
						value="Kristoforus David R"
						class="border-b border-gray-300"
					>
				</div>
				<!-- Project Name -->
				<div class="flex items-center">
					<label for="project-name" class=" font-medium text-gray-700 mr-2 whitespace-nowrap">Project Name:</label>
					<input
						type="text"
						id="project-name"
						value="CMS BSI"
						class="border-b border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
					>
				</div>
				<!-- Dept -->
				<div class="flex items-center">
					<label for="dept" class=" font-medium text-gray-700 mr-2 whitespace-nowrap">Dept:</label>
					<input
						type="text"
						id="dept"
						class="border-b border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
					>
				</div>
				<!-- Client -->
				<div class="flex items-center w-full sm:w-1/2 mb-2 sm:mb-0">
					<label for="client" class=" font-medium text-gray-700 mr-2 whitespace-nowrap">Client:</label>
					<input
						type="text"
						id="client"
						value="BSI"
						class="border-b border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
					>
				</div>
			</div>

			<!-- No -->
			<div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
				<div class="flex items-center w-full sm:w-1/2">
					<label for="no" class=" font-medium text-gray-700 mr-2 whitespace-nowrap">No:</label>
					<input
						type="text"
						id="no"
						value="______ /FR/_______ /20"
						class="border-b border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
					>
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
					@php
						$total = 0;
					@endphp
					@foreach ($table_data as $row)
						@php
							$total += $row['total'];
						@endphp
						<tr class="border-1">
							<td class="py-2 px-3 border-1">{{ $loop->iteration }}</td>
							<td class="py-2 px-3 border-1">{{ Carbon\Carbon::createFromFormat('Y-m-d', $row['date'])->format('d F Y') }}
							</td>
							<td class="py-2 px-3 border-1">{{ $row['type'] }}</td>
							<td class="py-2 px-3 border-1 text-right">Rp. {{ number_format($row['total'], 0, ',', '.') }}</td>
							<td class="py-2 px-3 border-1"></td>
						</tr>
					@endforeach
					<tr class="font-bold">
						<td colspan="3" class="py-2 px-3 border-1 text-right uppercase">TOTAL</td>
						<td class="py-2 px-3 border-1 text-right">Rp. {{ number_format($total, 0, ',', '.') }}</td>
						<td class="py-2 px-3 border-1"></td>
					</tr>
					<tr class="font-bold">
						<td class="py-2 px-3 border-1">Notes</td>
						<td colspan="4" class="py-2 px-3 border-1">
							<input type="text" class="mt-1 block w-full h-4 rounded-md" />
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="grid grid-cols-4 gap-0 text-center">
			<div class="flex flex-col border-1 p-1">
				<p class="font-semibold text-left">Requested By (pemohon) :</p>
				<img src="img/image1.png" class="w-[100px] m-auto">
				<p>(<input
						type="text"
						id="name"
						value="Kristoforus David R"
						class="border-b border-gray-300 text-center"
					>)</p>
				<p class="mt-1">Date : <input
						type="text"
						value="{{ today()->format(' d M Y') }}"
						class="inline-block w-24 text-center border-b border-gray-300"
					></p>
			</div>
			<div class="flex flex-col justify-between border-1 p-1">
				<p class="font-semibold text-left">Approved By (Koord/Team Ldr) :</p>
				<div>
					<p>(<input
							type="text"
							id="name"
							value="Diki"
							class="border-b border-gray-300 text-center"
						>)</p>
					<p class="mt-1">Date : <input type="text" class="inline-block w-24 text-center border-b border-gray-300">
					</p>
				</div>
			</div>
			<div class="flex flex-col justify-between border-1 p-1">
				<p class="font-semibold text-left">Plafon & Doc Checked (Adm):</p>
				<div>
					<p class="font-semibold">(_____________________)</p>
					<p class="mt-1">Date : <input type="text" class="inline-block w-24 text-center border-b border-gray-300">
					</p>
				</div>
			</div>
			<div class="flex flex-col justify-between border-1 p-1">
				<p class="font-semibold text-left">Paid By (Finance):</p>
				<div>
					<p class="font-semibold">(_____________________)</p>
					<p class="mt-1">Date : <input type="text" class="inline-block w-24 text-center border-b border-gray-300">
					</p>
				</div>
			</div>
		</div>

	</div>

	<div class="max-w-4xl mx-auto bg-white p-6 break-before-page">
		<ul>
			@if (!empty($attachments))
				<li class="my-3">{{ Carbon\Carbon::createFromFormat('Y-m-d', $firstDate)->format('j F Y') . ' - ' . Carbon\Carbon::createFromFormat('Y-m-d', $lastDate)->format('j F Y') }}</li>

				<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
					@foreach ($attachments as $file)
						<div class="">
							<img
								src="{{ asset('storage/' . $file['path']) }}"
								alt="Parkir Daily Image"
								class="w-full object-cover"
							>
						</div>
					@endforeach
				</div>
			@endif

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

			@foreach ($table_bill as $date => $bills)
				<div class="break-inside-avoid">
					<li class="my-3">{{ Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('j F Y') }}</li>
					<div class="flex flex-wrap gap-3 select-none">
						@foreach ($bills as $bill)
							@if (in_array($bill['type'], ['food', 'drink', 'snack', 'dinner']))
								@if (config('reimbursement.receipt') == 'detail')
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
															{{ $bill['name'] }}
														</h1>
														<p class="text-gray-400 text-[11px]">JAKARTA PUSAT</p>
													</div>

													<div class="flex items-center justify-center bg-amber-500 text-white rounded-full font-bold" style="width:36px;height:36px;font-size:14px;">
														{{ collect(explode(' ', $bill['name']))->map(fn($w) => strtoupper($w[0]))->only([0, count(explode(' ', $bill['name']))-1])->implode('') }}
													</div>
												</div>

												<hr class="border-dashed border-gray-300 my-1">

												<!-- Amount -->
												<div class="flex justify-between items-center mb-3">
													<div class="text-[20px] font-extrabold">Rp{{ number_format($bill['price'], 0, ',', '.') }}</div>
												</div>

												<!-- Details -->
												<div class="space-y-2 text-gray-700 text-[11px]">
													<div class="flex justify-between items-center mb-3">
														<div>
															<p class="text-gray-400">Transaction ID</p>
															<p class="font-medium">{{ Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('ymd') . generateTransactionId() }}</p>
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
														<p class="font-medium">{{ Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('d M Y, H:i') }} WIB</p>
													</div>

													<div>
														<p class="text-gray-400">Acquirer Name</p>
														<p class="font-medium">{{ $bill['acquirer'] }}</p>
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
														<p class="font-medium">{{ $bill['id'] }}</p>
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
								@else
									<div class="bg-white w-[300px] mx-auto">
										<div class="mb-6 text-center">
											<img
												src="/img/jago.png"
												alt="Jago Logo"
												class="w-[80px] mx-auto mb-12 mt-4"
											>
										</div>

										<div class="mt-4 mb-1">
											<h1 class="text-[10px] font-bold mb-1">Hello David,</h1>
											<p class="text-[9px]">
												Thank you for trusting Jago! You have made a payment, and here are the details:
											</p>
										</div>

										<div class="bg-gray-50 rounded-lg p-4 flex items-center justify-between">
											<div class="">
												<h2 class="text-[6px] text-gray-400 uppercase mb-3">Transaction Summary</h2>

												<div class="grid grid-cols-1 gap-y-1">
													<div class="flex items-center">
														<span class="text-gray-600 w-20">From</span>
														<span class="font-bold text-gray-800">DC • 100395736072</span>
													</div>
													<div class="flex items-center">
														<span class="text-gray-600 w-20">To</span>
														<span class="font-bold text-gray-800">{{ $bill['name'] }}</span>
													</div>
													<div class="flex items-center">
														<span class="text-gray-600 w-20"></span>
														<span class="font-bold text-gray-700">{{ $bill['id'] }}</span>
													</div>
													<div class="flex items-center mt-2">
														<span class="text-gray-600 w-20">Amount</span>
														<span class="font-bold text-gray-900">Rp{{ number_format($bill['price'], 0, ',', '.') }}</span>
													</div>
													<div class="flex items-center">
														<span class="text-gray-600 w-20">Transaction Date</span>
														<span
															class="font-bold text-gray-700">{{ Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('d F Y') }}
															@if (in_array($bill['type'], ['food', 'drink', 'snack']))
																{{ random_int(11, 14) }}:{{ str_pad(random_int(0, 59), 2, '0', STR_PAD_LEFT) }} WIB
															@elseif ($bill['type'] === 'dinner')
																{{ random_int(18, 21) }}:{{ str_pad(random_int(0, 59), 2, '0', STR_PAD_LEFT) }} WIB
															@endif
														</span>
													</div>
												</div>
											</div>

											<div class="">
												<img src="/img/jago_illustration.png" class="w-[65px] h-[65px] rounded-lg object-contain">
											</div>
										</div>
									</div>
								@endif
							@elseif ($bill['type'] === 'Bensin')
								<div class="p-2 inline-block bg-[#f8f9fa]">
									<div class="min-w-[300px] bg-white rounded-[12px] shadow p-3 my-3 mx-1 font-inter">
										<div class="flex items-center mb-1">
											<img src="{{ URL::asset('img/pertalite.png') }}" class="h-[50px] mr-2">
											<h6 class="mb-0 ml-2 font-medium text-base">{{ $bill['name'] }}</h6>
											<span class="ml-auto font-light text-sm" id="struk-liter">{{ $bill['total'] / 10000 }} Liter</span>
										</div>
										<hr class="my-2 border-t border-[#e0e0e0]">
										<div class="flex justify-between text-gray-600 text-sm">
											<span>Harga</span>
											<span class="font-light" id="struk-harga">Rp {{ number_format($bill['total'], 0, ',', '.') }}</span>
										</div>
										<hr class="my-2 border-t border-[#e0e0e0]">
										<div class="flex flex-col text-sm font-medium">
											<div class="flex justify-between mt-1">
												<span>SPBU</span>
												<span>{{ $bill['id'] }}</span>
											</div>
											<div class="flex justify-between mt-1">
												<span>Waktu</span>
												<span id="struk-tanggal">{{ Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('j F Y') }}
													{{ str_pad(random_int(8, 9), 2, '0', STR_PAD_LEFT) }}.{{ str_pad(random_int(0, 59), 2, '0', STR_PAD_LEFT) }}
													AM</span>
											</div>
										</div>
									</div>
								</div>
							@elseif ($bill['type'] === 'Parkir')
								<div class="bg-white rounded-lg w-full max-w-md p-6">
									<div class="flex justify-between items-center mb-6">
										<button class="text-gray-500 hover:text-gray-700">
											<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
											</svg>
										</button>
										<button class="text-gray-500 hover:text-gray-700">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
												<circle cx="12" cy="12" r="10" />
												<path d="M9.09 9a3 3 0 1 1 3.41 3.41c-.33.33-.5.76-.5 1.18v.41" />
												<line x1="12" y1="17" x2="12" y2="17" />
											</svg>
										</button>
									</div>

									<div class="flex flex-col items-center mb-6">
										<div class="rounded-full mb-3">
											<img src="img/gopay_tenant.png" class="w-[50px]">
										</div>
										<p class="text-3xl font-semibold text-gray-800 mb-1">{{ 'Rp'.number_format($bill['total'], 0, ',', '.') }}</p>
										<p class="text-gray-500 uppercase tracking-wide text-sm">{{ $bill['name'] }}</p>
									</div>

									<div class="border-t border-gray-200 mt-6"></div>

									<div class="mt-6">
										<div class="flex justify-between items-center mb-4">
											<p class="font-semibold text-lg text-gray-800">Transaction Detail</p>
											<button class="text-gray-500 hover:text-gray-700">
												<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
													<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
												</svg>
											</button>
										</div>

										<div class="space-y-4 text-sm">
											<div class="flex justify-between items-center">
												<p class="text-gray-600">Status</p>
												<p class="text-green-500 font-medium">Completed</p>
											</div>
											<div class="flex justify-between items-center">
												<p class="text-gray-600">Payment method</p>
												<div class="flex items-center space-x-2">
													<img src="img/gopay.png" class="w-[20px]">
													<p class="text-gray-800 font-medium">GoPay Saldo</p>
												</div>
											</div>
											<div class="flex justify-between items-center">
												<p class="text-gray-600">Time</p>
												<p class="text-gray-800 font-medium">{{ str_pad(random_int(7, 18), 2, '0', STR_PAD_LEFT) }}.{{ str_pad(random_int(0, 59), 2, '0', STR_PAD_LEFT) }}</p>
											</div>
											<div class="flex justify-between items-center">
												<p class="text-gray-600">Date</p>
												<p class="text-gray-800 font-medium">{{ Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('j M Y') }}</p>
											</div>
											<div class="flex justify-between items-center">
												<p class="text-gray-600">Transaction ID</p>
												<div class="flex items-center space-x-2">
													<p class="text-gray-800 font-medium">{{ 'A220' . Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('ymd') . date('His') . substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 2) . '...' }}</p>
													<button class="text-gray-400 hover:text-gray-600">
														<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="#4CAF50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
															<rect x="7" y="5" width="10" height="12" rx="2" ry="2"/>
															<path d="M5 15H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1"/>
														</svg>
													</button>
												</div>
											</div>
											<div class="flex justify-between items-center">
												<p class="text-gray-600">Order ID</p>
												<div class="flex items-center space-x-2">
													<p class="text-gray-800 font-medium">{{ 'mbrs--' . bin2hex(random_bytes(4)) . '-' . bin2hex(random_bytes(2)) . '...' }}</p>
													<button class="text-gray-400 hover:text-gray-600">
														<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="#4CAF50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
															<rect x="7" y="5" width="10" height="12" rx="2" ry="2"/>
															<path d="M5 15H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1"/>
														</svg>
													</button>
												</div>
											</div>
											<div class="flex justify-between items-center">
												<p class="text-gray-600">Amount</p>
												<p class="text-gray-800 font-medium">{{ 'Rp'.number_format($bill['total'], 0, ',', '.') }}</p>
											</div>
										</div>
									</div>

									<div class="border-t border-gray-200 my-6"></div>

									<div class="flex justify-between items-center">
										<p class="font-semibold text-lg text-gray-800">Total</p>
										<p class="font-semibold text-lg text-gray-800">{{ 'Rp'.number_format($bill['total'], 0, ',', '.') }}</p>
									</div>

								</div>
							@endif
						@endforeach
					</div>
				</div>
				<hr class="my-4 border-t border-gray-300">
			@endforeach
		</ul>
	</div>

</body>

</html>
