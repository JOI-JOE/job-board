<x-layout>
    <x-breadcrumbs class="mb-4"
    :links="['Jobs' => route('jobs.index'), $job->title]"
    /> 
    <x-job-card :$job>
        <p class="text-sm text-slate-400 mb-4">{!! nl2br(e($job->description)) !!}</p>
    </x-job-card>

    <x-card class="mb-4">
        Other jobs
    </x-card>

</x-layout>