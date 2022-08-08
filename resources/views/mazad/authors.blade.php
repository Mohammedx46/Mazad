<x-layout>
    <x-container.section class="top-author-section pt-110 pb-110">
        <div class="row gy-4 mb-50 d-flex justify-content-center">
            @unless ($authors->isEmpty())
                @foreach ($authors as $author)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 ">
                        <div data-wow-duration="0.5s" data-wow-delay="0.2s" class="eg-card author-card1 wow fadeInDown">
                            <div class="author-img">
                                <img src="{{asset('storage/images/author/t-author2.png')}}" alt="">
                            </div>
                            <div class="author-content">
                                <div class="t-author">
                                    <img src="{{asset('storage/images/feature/fa2.png')}}" alt="">
                                    <h5><a href="author-details.html">Cameron Williamson</a></h5>
                                    <span>@cameron20</span>
                                </div>
                                <div class="t-author-buttons">
                                    <a href="author-details.html" class="top-author-btn">Details</a>
                                    <a href="#" class="follow-btn">Follow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endunless
        </div>

        {{$authors->links('pagination')}}
    </x-container.section>
</x-layout>