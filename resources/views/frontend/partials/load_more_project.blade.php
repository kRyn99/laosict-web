@if ($getProjects = \App\Helpers::frontendCateProjects($categoryId, $start, $end))
    @foreach ($getProjects as $project)
        @include('frontend.partials.index_project', ['project' => $project])
    @endforeach
@endif
