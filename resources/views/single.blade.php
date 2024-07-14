@section('title', 'Home')
@section('meta_description', '')
@section('meta_keywords', '')
@extends('layouts.app')
@section('content')
<section class="py-3 breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <nav aria-label=" breadcrumb">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item"><a href="/">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
  </section>
<section class="px-25">
    <div class="px-25">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8">
                    @php
                            $fullText = $blog->name;
                            $firstSpace = strpos($fullText, ' ');
                            if ($firstSpace !== false) {
                                $firstWord = substr($fullText, 0, $firstSpace);
                                $remainingText = substr($fullText, $firstSpace + 1);
                            } else {
                                $firstWord = $fullText;
                                $remainingText = '';
                            }
                        @endphp
                        <h1 class="my-2 fx-20">
                            <span class="text-green">{{ $firstWord }}</span>
                            @if($remainingText)
                                <span class="text-blue">{{ $remainingText }}</span>
                            @endif
                        </h1>
                    {{-- <h1 class="" style="margin-top: 20px;margin-bottom: 10px;font-size: 38px;line-height: 44px;font-weight: 700;">{{  $blog->name }}</h1> --}}
                    <div class="row">
                        <div class="col-4 col-sm-6">
                               {{ $blog->blogCategory->name}}
                            <div>
                                <?php
                                if($blog->created_at != null){
                                    $date = date_format($blog->created_at, 'M d, Y');
                                    echo $date;
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="{{ url($blog->image)}}" alt="" class="mt-3 border-radius" width="100%">
                            <div class="mt-4">
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        {!! $blog->description !!}
                    </div>
                </div>
                <div class="col-sm-4 py-50">
                    <div class="py-50 ms-20px">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Top viewed
                    </button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" tabindex="-1"> Recently Published</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade mt-2 active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                        {{-- ----------------------------------------- --}}
                        @foreach($most_view as $blo)
                        <div role="listitem" class="collection-item w-dyn-item mt-2">
                            <a href="{{ route('blog.single', $blo->slug) }}" class="featured-item-2 w-inline-block">
                            <div class="row">
                                <div class="col-3 col-sm-3">
                                    <img loading="lazy" src="/{{ $blo->image }}" width="80px" height="80px">
                                </div>
                                <div class="col-9 col-sm-9 d-flex align-items-center">
                                    <div class="title-small-1" style="font-size: 14px;">{{ $blo->name }}</div>

                                </div>
                            </div>
                        </a>
                        </div>
                        @endforeach
                        {{-- --------------------------------------- --}}
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        @foreach($top as $view)
                                <div role="listitem" class="collection-item w-dyn-item mt-2">
                            <a href="{{ route('blog.single', $view->slug) }}" class="featured-item-2 w-inline-block">
                            <div class="row">
                                <div class="col-3 col-sm-3">
                                    <img loading="lazy" src="{{ url($view->image)}}" width="80px" height="80px">
                                </div>
                                <div class="col-9 col-sm-9 d-flex align-items-center">
                                    <div class="title-small-1" style="font-size: 14px;">{{ $view->name }}</div>
                                </div>
                            </div>
                        </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                </div>
           </div>
            </div>
        </div>
    </div>
</section>
@endsection