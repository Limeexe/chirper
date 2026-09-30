<x-layout>
    <x-slot:title>
        Welcome to Chirper!
    </x-slot:title>
    <div class="mx-auto max-w-2x1">
        @foreach ($chirps as $chirp)
        <div class="mt-8 shadow card bg-base-100">
            <div class="card-body">
                <div>
                    <div class="font-semibold">{{ $chirp['author'] }}</div>
                    <p class="mt-1">{{ $chirp['message'] }}</p>
                    <p class="mt-2 text-sm text-gray-500">{{ $chirp['timestamp'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>
