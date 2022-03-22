@extends('layouts.blog-category')
@section('content')
    <section class="catagory-welcome-post-area section_padding_100">
        <div class="container">
            <div class="row">
                @foreach($category->posts as $post)
                    <div class="col-12 col-md-4">
                        <!-- Gazette Welcome Post -->
                        <div class="gazette-welcome-post">
                            <!-- Post Tag -->
                            <div class="gazette-post-tag">
                                @foreach($post->categories as $postcategories)
                                    <a href="#">{{$postcategories->name}}</a>
                                @endforeach
                            </div>
                            <h2 class="font-pt">{{$post->title}}</h2>
                            <p class="gazette-post-date">{{$post->created_at->diffForHumans()}}</p>
                            <!-- Post Thumbnail -->
                            <div class="blog-post-thumbnail my-5">
                                <img class="img-fluid" src="{{asset($post->photo ? $post->photo->file : 'http://via.placeholder.com/400')}}" alt="post-thumb">
                            </div>
                            <!-- Post Excerpt -->
                            <p>{{$post->body}}</p>
                            <!-- Reading More -->
                            <div class="post-continue-reading-share mt-30">
                                <div class="post-continue-btn">
                                    <a href="#" class="font-pt">Continue Reading <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                {{$category->links()}}
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="gazette-pagination-area">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
