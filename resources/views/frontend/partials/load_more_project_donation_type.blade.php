@if ($getProjects = \App\Helpers::frontendIndexProjects($donationType, $start, $end))
    @foreach ($getProjects as $project)
        @include('frontend.partials.index_project', ['project' => $project])
    @endforeach
@endif
