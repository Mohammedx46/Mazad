<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\BillData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    // Show all Products
    public function index()
    {
        $count = BillData::count();
        $bills = BillData::latest()->paginate(9);
        return view('mazad_admin.bills.bills', [
            "heading" => "فواتير",
            "bills" => $bills,
            "allBillsCount" => $count,
        ]);
    }

    // Show Edit Form
    public function edit(Bill $bill)
    {
        $bill->is_bill_payed == 0 ?
            $formField['is_bill_payed'] = 1 :
            $formField['is_bill_payed'] = 0 ;
        $bill->update($formField);
        return redirect('/bill/billsShow')->with('success', 'تم تعديل  حالة الفاتورة بنجاح');

    }
}
