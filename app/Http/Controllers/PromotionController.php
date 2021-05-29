<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
// use RealRashid\SweetAlert\Facades\Alert;


class PromotionController extends Controller
{
    public function addCoupon(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo"<pre>"; print_r($data);die;
            $coupon = new Promotion;
            $coupon->code_promo = $data['coupon_code'];
            $coupon->pourcentage = $data['coupon_percent'];

            $coupon->save();
            return redirect('/admin/view-coupons')->with('flash_message_success', 'Coupon has been added Successfully');
        }
        return view('admin.promotions.add_coupon');
    }

    public function viewCoupons()
    {
        $coupons = Promotion::get();
        return view('admin.promotions.view_coupons')->with(compact('coupons'));
    }

    public function editCoupon(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $coupon = Promotion::find($id);
            $coupon->code_promo = $data['coupon_code'];
            $coupon->pourcentage = $data['coupon_percent'];

            $coupon->save();
            return redirect('/admin/view-coupons')->with('flash_message_success', 'Coupon has been Updated Successfully');
        }
        $couponDetails = Promotion::find($id);
        return view('admin/promotions/edit_coupon')->with(compact('couponDetails'));
    }

    public function deleteCoupon($id = null)
    {
        Promotion::where(['id' => $id])->delete();
        // Alert::success('Deleted', 'Success Message');
        return redirect()->back();
    }
}
