<x-layout>
  @foreach ($jobs as $job)
  {{-- insert data into slot of card.blade --}}
    <x-card class='mb-4'>
      {{$job->title}}
      {{$job->description}}
      {{$job->location}}
      {{$job->created_at}}
    </x-card>

  @endforeach
</x-layout>