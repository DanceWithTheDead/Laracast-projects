<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    <div class="space-y-4">
        @foreach($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-300 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                <div>
                    <h1><strong class="text-laracasts">{{ $job['title'] }}:</strong> Pays {{ $job['salary']}} per year</h1>
                </div>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
