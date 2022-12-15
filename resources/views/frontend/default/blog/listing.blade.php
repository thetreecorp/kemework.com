@extends('frontend.default.layouts.app')

@section('content')

<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">{{ translate('Blog')}}</h1>
            </div>
        </div>
    </div>
</section>

<section class="pb-4">
    <div class="container">
        <div class="card-columns">
            @foreach($blogs as $blog)
                <div class="card mb-3 overflow-hidden rounded-2 border-gray-light hov-box">
                    <a href="{{ route('blog.details', $blog->slug) }}" class="text-reset d-block">
                        <img
                            src="{{ custom_asset($blog->banner) }}"
                            alt="{{ $blog->title }}"
                            class="img-fluid lazyload h-220px"
                        >
                    </a>
                    <div class="p-4">
                        <h2 class="fs-18 fw-600 mb-1">
                            <a href="{{ route('blog.details', $blog->slug) }}" class="text-dark fs-16 fw-700" title="{{ $blog->title }}">
                                {{ \Illuminate\Support\Str::limit($blog->title, 70, $end = '...') }}
                            </a>
                        </h2>
                        @if($blog->category != null)
                        <div class="mt-3 text-primary fs-14 fw-700">
                            {{ $blog->category->category_name }}
                        </div>
                        @endif
                        <p class="mb-4 fs-14 text-secondary opacity-70">{{ $blog->created_at ? date('d.m.Y',strtotime($blog->created_at)) : '' }}</p>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="aiz-pagination aiz-pagination-center mt-4">
            {{ $blogs->links() }}
        </div>
    </div>
</section>
@endsection
