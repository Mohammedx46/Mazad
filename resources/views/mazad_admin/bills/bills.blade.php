<x-admin-layout>

    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12 title">
                <h1><i class="fa fa-bars"></i> عرض بيانات المستخدمين </h1>
            </div>

            <div class="search-div">
                <div class="col-sm-8">
                    <a href="#"> الكل( {{$allBillsCount}} )</a>
                </div>

                <x-admin.search target="/bill/billsShow" placeholder="ابحث عن فاتورة ب اسم العميل أو رقم الفاتورة" />
            </div>
            <!------------------ End Header ------------------>
            <!------------------------------------------------>


            <div class="clearfix"></div>

            <div class="col-sm-12">
                <div class="content">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                {{-- <th width="3%"><input type="checkbox" id="select-all"> </th> --}}
                                <th width="10%">اسم العميل</th>
                                <th width="10%">المنتج</th>
                                <th width="5%">سعر المنتج</th>
                                <th width="10%">هل دفعت</th>
                                <th width="20%">ملاحظات</th>
                                <th width="10%">تاريخ الفاتورة</th>
                                <th width="10%">عملية </th>
                            </tr>
                        </thead>

                        <!----------------- Body of Table ----------------->
                        <tbody>
                            @unless ($bills->isEmpty())
                                @foreach ($bills as $bill)
                                    <tr @if($loop->odd) style="background:#ae661552;border-radius:20px" @endif>
                                        {{-- <td><input type="checkbox" name="select-cat"> </td> --}}
                                        <td>{{$bill->bill->user->name}} {{$bill->bill->user->last_name}}</td>
                                        <td>{{$bill->products->product_name}}</td>
                                        <td>{{$bill->auction_users->user_total_bidding}}</td>
                                        <td>{{$bill->bill->is_bill_payed ? "مدفوع" : "لم تدفع"}}</td>
                                        <td>{{$bill->bill->comment}}</td>
                                        <td>{{$bill->bill->created_at->format("d-m-Y")}}</td>
                                        <td>
                                            @can('Bills')
                                                <a href="/bill/{{$bill->id}}/edit"
                                                    class='btn btn-success' ><i class="fa-solid fa-pen-to-square"></i>تعديل حالة الدفع</a>                                                
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            @endunless
                        </tbody>
                        <!--------------- End Body of Table --------------->
                    </table>
                </div>
                {{ $bills->links('adminPagination') }}
            </div>

            <div class="clearfix"></div>

            <!------------------------------------------------>
            <!---------------- bottom Content ---------------->
            <!------------------------------------------------>
        </div>
    </div>
    

</x-admin-layout>