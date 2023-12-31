<x-layout>
  <x-breadcrumbs class="mb-4"  :links="['Jobs' => route('jobs.index')]" />
  @foreach ($jobs as $job)
  {{-- insert data into slot of card.blade --}}
    <x-job-card :$job>
      <x-link-button :href="route('jobs.show', $job)">
        Show
      </x-link-button>
    </x-job-card>

  @endforeach
</x-layout>