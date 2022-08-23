
<div class="tab-pane fade" id="pills-bid" role="tabpanel" aria-labelledby="pills-bid-tab">
    <div class="bid-list-area">
        <h6>آخر المزايدات</h6>
        <ul class="bid-list">
            @unless($auctionUsers->isEmpty())
                {{-- @php
                    $reverse = array_reverse($auctionUsers, true);
                @endphp --}}
                @foreach ($auctionUsers as $auctionUser)
                    <li>
                        <div class="row d-flex align-items-center">
                            <div class="col-7">
                                <div class="bidder-area">
                                    <div class="bidder-img">
                                        <img src="assets/images/bg/bidder1.png" alt="">
                                    </div>
                                    <div class="bidder-content">
                                        <a href="#">
                                            <h6>{{$auctionUser->user->name}} {{$auctionUser->user->last_name}} </h6>
                                        </a>
                                        <p>{{$auctionUser->user_price}} $</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 text-end">
                                <div class="bid-time">
                                    {{-- <p>4 أربع ساعات</p> --}}
                                    <p> 
                                        <span>{{$auctionUser->created_at->format('jS F Y ')}}</span> 
                                        <span style="margin-left: 2em">{{$auctionUser->created_at->format('h:i:s A')}}</span> 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach

            @else
                    <li style="font-size: 1.5em;font-weight:bold; cursor: pointer;" ><a href="#bid">كن أنت أول مزايد </a> </li>
            @endunless

        </ul>
    </div>
</div>