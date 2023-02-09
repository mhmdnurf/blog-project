@extends('user.partials.app')
@section('content')
    <div class="container">
        <div class="row">
            <!-- Latest Posts -->
            <main class="posts-listing col-lg-8">
                <div class="container">
                    <div class="row">
                        <!-- post -->
                        @foreach ($blogs as $blog)
                            <div class="post col-xl-6">
                                <div class="post-thumbnail"><a href="/blog/{{ $blog->id }}"><img
                                            src="{{$blog->gambar}}" alt="..." class="img-fluid"></a></div>
                                <div class="post-details">
                                    <div class="post-meta d-flex justify-content-between">
                                        <div class="date meta-last">{{ $blog->created_at->diffForHumans() }}</div>
                                        <div class="category"><a href="#">{{ $blog->kategori }}</a></div>
                                    </div><a href="/blog/{{ $blog->id }}">
                                        <h3 class="h4">{{ $blog->judul }}</h3>
                                    </a>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore.</p>
                                    <div class="post-footer d-flex align-items-center"><a href="#"
                                            class="author d-flex align-items-center flex-wrap">
                                            <div class="avatar"><img src="user/img/avatar-1.jpg" alt="..."
                                                    class="img-fluid"></div>
                                            <div class="title"><span>{{ $blog->penulis }}</span></div>
                                        </a>
                                        <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                                        <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-template d-flex justify-content-center">
                            <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="page-item"><a href="#" class="page-link active">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </main>
            <aside class="col-lg-4">
                <!-- Widget [Search Bar Widget]-->
                <div class="widget search">
                    <header>
                        <h3 class="h6">Search the blog</h3>
                    </header>
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <input type="search" placeholder="What are you looking for?">
                            <button type="submit" class="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
                <!-- Widget [Latest Posts Widget]        -->
                <div class="widget latest-posts">
                    <header>
                        <h3 class="h6">Latest Posts</h3>
                    </header>
                    <div class="blog-posts"><a href="/blog/{id}">
                            <div class="item d-flex align-items-center">
                                <div class="image"><img src="user/img/small-thumbnail-1.jpg" alt="..."
                                        class="img-fluid"></div>
                                <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                                    <div class="d-flex align-items-center">
                                        <div class="views"><i class="icon-eye"></i> 500</div>
                                        <div class="comments"><i class="icon-comment"></i>12</div>
                                    </div>
                                </div>
                            </div>
                        </a><a href="/blog/{id}">
                            <div class="item d-flex align-items-center">
                                <div class="image"><img src="user/img/small-thumbnail-2.jpg" alt="..."
                                        class="img-fluid"></div>
                                <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                                    <div class="d-flex align-items-center">
                                        <div class="views"><i class="icon-eye"></i> 500</div>
                                        <div class="comments"><i class="icon-comment"></i>12</div>
                                    </div>
                                </div>
                            </div>
                        </a><a href="/blog/{id}">
                            <div class="item d-flex align-items-center">
                                <div class="image"><img src="user/img/small-thumbnail-3.jpg" alt="..."
                                        class="img-fluid"></div>
                                <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                                    <div class="d-flex align-items-center">
                                        <div class="views"><i class="icon-eye"></i> 500</div>
                                        <div class="comments"><i class="icon-comment"></i>12</div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                </div>
                <!-- Widget [Categories Widget]-->
                <div class="widget categories">
                    <header>
                        <h3 class="h6">Categories</h3>
                    </header>
                    <div class="item d-flex justify-content-between"><a href="#">Growth</a><span>12</span></div>
                    <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
                    <div class="item d-flex justify-content-between"><a href="#">Sales</a><span>8</span></div>
                    <div class="item d-flex justify-content-between"><a href="#">Tips</a><span>17</span></div>
                    <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
                </div>
                <!-- Widget [Tags Cloud Widget]-->
                <div class="widget tags">
                    <header>
                        <h3 class="h6">Tags</h3>
                    </header>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" class="tag">#Business</a></li>
                        <li class="list-inline-item"><a href="#" class="tag">#Technology</a></li>
                        <li class="list-inline-item"><a href="#" class="tag">#Fashion</a></li>
                        <li class="list-inline-item"><a href="#" class="tag">#Sports</a></li>
                        <li class="list-inline-item"><a href="#" class="tag">#Economy</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
@endsection
