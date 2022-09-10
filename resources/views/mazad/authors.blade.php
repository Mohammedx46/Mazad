<x-layout :heading="$heading" >
    <x-container.section class="top-author-section pt-110 pb-110">
        <div class="row gy-4 mb-50 d-flex justify-content-center">
            @unless ($authors->isEmpty())
                @foreach ($authors as $author)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 ">
                        <div data-wow-duration="0.5s" data-wow-delay="0.2s" class="eg-card author-card1 wow fadeInDown">
                            <div class="author-img">
                                <img src=" {{$author->user_image_location ? 
                                    asset('storage/'.$author->user_image_location) :
                                    asset('storage/images/author/t-author2.png') }} " alt="" 
                                    height="200" style="object-fit: contain;" /> 
                            </div>
                            <div class="author-content">
                                <div class="t-author">
                                    <img src=" {{$author->user_image_location ? 
                                        asset('storage/'.$author->user_image_location) :
                                        asset('storage/images/auction/cate1.png') }} " alt="">
                                        
                                    <h5><a href="#">{{$author->name}} {{$author->last_name}}</a></h5>
                                    {{-- <span>@cameron20</span> --}}
                                </div>
                                <div class="t-author-buttons">
                                    <a href="#" class="top-author-btn">تفاصيل</a>
                                    <a href="#" class="follow-btn">متابعة</a>
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