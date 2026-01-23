<x-layouts.app>
	<div
		class="max-w-[335px] w-full bg-white dark:bg-[#161615] text-white rounded-lg shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] border border-[#e3e3e0] dark:border-[#3E3E3A] p-6"
	>
		<form method="POST" action="{{ route('generate') }}" enctype="multipart/form-data">
			@csrf
			<h2 class="text-xl font-medium mb-4 text-center">Reimbursement</h2>
			<div class="mb-4">
				<label for="date_makan" class="block text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Makan</label>
				<input
					type="text"
					name="date_makan"
					id="date_makan"
					class="w-full border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm px-5 py-2 text-sm bg-[#FDFDFC] dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:border-black dark:focus:border-white transition-all"
				>
				@error('date_makan')
					<span class="text-red-500 text-xs">{{ $message }}</span>
				@enderror
			</div>
			<div class="mb-4">
				<label for="date_bensin" class="block text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Bensin</label>
				<input
					type="text"
					name="date_bensin"
					id="date_bensin"
					class="w-full border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm px-5 py-2 text-sm bg-[#FDFDFC] dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:border-black dark:focus:border-white transition-all"
				>
				@error('date_bensin')
					<span class="text-red-500 text-xs">{{ $message }}</span>
				@enderror
			</div>
			<div class="mb-4">
				<label for="date_parkir" class="block text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Parkir</label>
				<input
					type="text"
					name="date_parkir"
					id="date_parkir"
					class="w-full border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm px-5 py-2 text-sm bg-[#FDFDFC] dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:border-black dark:focus:border-white transition-all"
				>
				@error('date_parkir')
					<span class="text-red-500 text-xs">{{ $message }}</span>
				@enderror
			</div>
			<div class="mb-4">
				<label for="date_parkir_daily" class="block text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Parkir Daily</label>
				<input
					type="text"
					name="date_parkir_daily"
					id="date_parkir_daily"
					class="w-full border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm px-5 py-2 text-sm bg-[#FDFDFC] dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:border-black dark:focus:border-white transition-all"
				>
				@error('date_parkir_daily')
					<span class="text-red-500 text-xs">{{ $message }}</span>
				@enderror
			</div>
			<div class="mb-4">
				<label for="date_parkir_daily_image" class="block text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Parkir Daily Image</label>
				<input
					type="file"
					name="date_parkir_daily_image[]"
					id="date_parkir_daily_image"
					multiple
					accept="image/*"
					class="w-full border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm px-5 py-2 text-sm bg-[#FDFDFC] dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:border-black dark:focus:border-white transition-all"
				>
				@error('date_parkir_daily_image')
					<span class="text-red-500 text-xs">{{ $message }}</span>
				@enderror
				@error('date_parkir_daily_image.*')
					<span class="text-red-500 text-xs">{{ $message }}</span>
				@enderror
			</div>
			<div class="mb-4">
				<label for="date_overtime" class="block text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Overtime</label>
				<input
					type="text"
					name="date_overtime"
					id="date_overtime"
					class="w-full border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm px-5 py-2 text-sm bg-[#FDFDFC] dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:border-black dark:focus:border-white transition-all"
				>
				@error('date_overtime')
					<span class="text-red-500 text-xs">{{ $message }}</span>
				@enderror
			</div>
			<button type="submit"
				class="w-full py-2 rounded-sm bg-[#1b1b18] dark:bg-[#EDEDEC] text-white dark:text-[#1b1b18] font-medium transition-all hover:bg-black dark:hover:bg-white"
			>Submit</button>
		</form>

		<div class="mt-6 text-center text-sm text-gray-600 dark:text-gray-400">
			<a href="{{ route('combinations') }}">See all combinations</a>
		</div>
	</div>

	@push('script')
		<script>
			$('#date_makan').flatpickr({
				altInput: true,
				altFormat: "j F Y",
				dateFormat: "Y-m-d",
				mode: "multiple",
				locale: {
					firstDayOfWeek: 1
				}
			});

			$('#date_bensin').flatpickr({
				altInput: true,
				altFormat: "j F Y",
				dateFormat: "Y-m-d",
				mode: "multiple",
				locale: {
					firstDayOfWeek: 1
				}
			});

			$('#date_parkir').flatpickr({
				altInput: true,
				altFormat: "j F Y",
				dateFormat: "Y-m-d",
				mode: "multiple",
				locale: {
					firstDayOfWeek: 1
				}
			});

			$('#date_overtime').flatpickr({
				altInput: true,
				altFormat: "j F Y",
				dateFormat: "Y-m-d",
				mode: "multiple",
				locale: {
					firstDayOfWeek: 1
				}
			});
		</script>
	@endpush
</x-layouts.app>
