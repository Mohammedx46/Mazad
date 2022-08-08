

<x-container.items-container>
    <!-- First Section Hot Collection  -->
    <!-- ---------------------------------------- -->
    @unless ($authors->isEmpty())
        @foreach ($authors as $author)

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 ">
                <div data-wow-duration="0.5s" data-wow-delay="0.4s" class="eg-card author-card1 wow fadeInDown">
                    <div class="author-img">
                        <img src="{{asset('storage/images/author/t-author2.png')}}" alt="">
                    </div>

                    <div class="author-content">

                        <div class="t-author">
                            <img src="{{asset('storage/images/feature/fa6.png')}}" alt="">
                            <h5><a href="/authors">{{$author->first_name . ' ' . $author->last_name}}</a></h5>
                            {{-- <h5><a href="author/{{$author->id}}">{{$author->first_name . ' ' . $author->last_name}}</a></h5> --}}
                            <span>@ٌrush</span>
                        </div>

                        <div class="t-author-buttons">
                            <a href="/authors" class="top-author-btn">تفاصيل</a>
                            {{-- <a href="author/{{$author->id}}" class="top-author-btn">تفاصيل</a> --}}
                            {{-- <a href="#" class="follow-btn">متابعة</a> --}}
                        </div>

                    </div>
                </div>
            </div>

        @endforeach
    @endunless
</x-container.items-container>