@if ($getPosts = \App\Helpers::frontendCatePosts($skip))
    @foreach ($getPosts as $post)
        @include('frontend.partials.one_post', ['post' => $post])
    @endforeach
@endif
