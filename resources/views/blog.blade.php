@extends('layouts._layout')
@section('title')
Ретро - мероприятия
@endsection
@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <h2>Мероприятия</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-30 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="fitness-blog-posts">
                    @foreach($posts as $post)
                        <!-- Single Post Start -->
                            <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                                <!-- Post Thumb -->
                                <div class="blog-post-thumb mb-30">
                                    <img src="{{ $post->image }}" alt="">
                                </div>
                                <!-- Post Title -->
                                <a href="#" class="post-title">{{ $post->title }}</a>
                                <!-- Post Meta -->
                                <div class="post-meta d-flex justify-content-between">
                                    <div class="post-date">
                                        <p>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} by <a href="#">{{ $post->name }}</p>
                                    </div>
                                    <!-- Comments -->
                                    <p class="comments"><a href="#">3 comments</a></p>
                                </div>
                                <!-- bg gradients -->
                                <div class="bg-gradients mb-30 w-25"></div>
                                <!-- Post Excerpt -->
                                <p>{!! \Illuminate\Support\Str::words($post->description, 30, '...') !!}</p>
                                <!-- Read More -->
                                <a href="#" class="read-more-btn">Read more</a>
                            </div>
                    @endforeach


                    {{--@foreach($posts as $post)--}}
                    {{--<div class="blog-post">--}}
                    {{--<h2 class="blog-post-title">{{ $post->title }}</h2>--}}
                    {{--<p class="blog-post-meta"><small><i>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} by <a href="#">{{ $post->name }}</a></i></small></p>--}}

                    {{--<p>{!! \Illuminate\Support\Str::words($post->description, 30, '...') !!}</p>--}}
                    {{--<blockquote>--}}
                    {{--<p>--}}
                    {{--<a href="{{ route('post.read', ['post_id' => $post->id]) }}" class="btn btn-primary btn-sm">Learn more</a> </p>--}}
                    {{--</blockquote>--}}
                    {{--</div><!-- /.blog-post -->--}}
                    {{--@endforeach--}}
                        <!-- Single Post Start -->
                       <!-- <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">

                            <div class="blog-post-thumb mb-30">
                                <img src="img/blog-img/1.jpg" alt="">
                            </div>
                            <a href="#" class="post-title">10 Best Festival that you should’t miss this summer</a>

                            <div class="post-meta d-flex justify-content-between">
                                <div class="post-date">
                                    <p>May 22, 2018</p>
                                </div>
                                <p class="comments"><a href="#">3 comments</a></p>
                            </div>
                            <div class="bg-gradients mb-30 w-25"></div>

                            <p>Sed dapibus varius massa vel auctor. Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor, suscipit non elit ut, imperdiet ornare erat. Vestibulum vel lorem eget risus pulvinar sollicitudin in a erat. Quisque mattis ultricies arcu, ac venenatis nisl. Sed dapibus varius massa vel auctor. Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis.</p>

                            <a href="#" class="read-more-btn">Read more</a>
                        </div>-->


                        <!-- Pagination -->
                        <div class="musica-pagination-area wow fadeInUp" data-wow-delay="700ms">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item active">{{ $posts->links() }}</li>
                                {{--<ul class="pagination">--}}
                                    {{--<li class="page-item active"><a class="page-link" href="#">01.</a></li>--}}
                                    {{--<li class="page-item"><a class="page-link" href="#">02.</a></li>--}}
                                    {{--<li class="page-item"><a class="page-link" href="#">03.</a></li>--}}
                                {{--</ul>--}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->
@endsection