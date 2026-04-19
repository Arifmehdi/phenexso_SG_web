@extends('website.layouts.sungoods')

@section('title', $page->name_en ?? 'Page')

@section('content')

<section class="page-header bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="mb-2">{{ $page->name_en }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ $page->name_en }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="page-content py-5">
    <div class="container">
        <div class="row">
            @forelse ($page->pageItems as $item)
                <div class="col-lg-12 mb-5">
                    @if($item->name_en)
                    <h3 class="mb-3">{{ $item->name_en }}</h3>
                    @endif
                    <div class="content">
                        {!! $item->description_en !!}
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p>No content found</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

@push('styles')
<style>
.page-header {
    background-color: #f8f9fa;
    border-bottom: 1px solid #eee;
}
.page-header h1 {
    font-size: 2rem;
    font-weight: 600;
    color: #333;
}
.page-content .content {
    line-height: 1.8;
    color: #555;
}
.page-content .content img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 15px 0;
}
.page-content .content h1, 
.page-content .content h2, 
.page-content .content h3, 
.page-content .content h4, 
.page-content .content h5, 
.page-content .content h6 {
    color: #333;
    margin-top: 20px;
    margin-bottom: 15px;
}
.page-content .content p {
    margin-bottom: 15px;
}
.page-content .content ul, 
.page-content .content ol {
    margin-bottom: 15px;
    padding-left: 25px;
}
.breadcrumb {
    background: transparent;
    padding: 0;
    margin: 0;
}
.breadcrumb-item a {
    color: #333;
}
.breadcrumb-item.active {
    color: #999;
}
</style>
@endpush

@endsection
