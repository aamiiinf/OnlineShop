@extends('front.layout.app')

@section('main')

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">News</a></li>
                    <li class="breadcrumb-item active">Search Results</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Single News Start-->
        <div class="container">
          <div class="row py-5">
          @if($posts->isNotEmpty())
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <div>
                            <img style="width: 100%" src="{{ asset($post->image) }}" height="250" />
                            <div class="mn-title pt-2 pb-5 text-right" style="font-size:19px">
                                <a class="" href="{{ route('post_page', $post->id) }}">{{ $post->body }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="mn-title pt-2 pb-5 text-right" style="font-size:19px">
                <h3>نتیجه ای یافت نشد</h3>
                </div>
            @endif
          </div>
        </div>
        <!-- Single News End-->

    </body>
</html>
@endsection
