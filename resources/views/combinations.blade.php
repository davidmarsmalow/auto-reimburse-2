<x-layouts.app>
	<div class="text-center mb-6 text-gray-600 dark:text-gray-400">
		<a href="{{ route('home') }}">Back to Home</a>
	</div>
	<div class="grid grid-cols-4 gap-6 p-4">
		@foreach ($combinations as $combination)
			<div class="bg-white rounded-lg shadow p-6 flex items-start">
				<span class="text-gray-800 text-lg font-medium">{{ $loop->iteration }}</span>
				<div class="ml-4">
					@foreach ($combination['items'] as $item)
						<div class="text-gray-600 text-sm mb-1">
							{{ $item['name'] }} ({{ number_format($item['price'], 0, ',', '.') }})
						</div>
					@endforeach
					<div class="text-gray-800 font-semibold mt-2">
						Total: Rp {{ number_format($combination['total'], 0, ',', '.') }}
					</div>
				</div>
			</div>
		@endforeach
	</div>
</x-layouts.app>
