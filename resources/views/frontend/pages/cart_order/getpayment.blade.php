@extends('frontend.layouts.main')

@section('content')
<div class="text-left mt-[120px] max-xl:mt-[70px]">
  <form id="formPayments" method="post" action="https://www.thaiepay.com/epaylink/payment.aspx" >
    <!-- <input type="hidden" name="merchantid"    value="75917915"> -->
    <input type="hidden" name="merchantid"    value="26816389">
    <input type="hidden" name="cc"            value="00">
    <input type="hidden" name="refno"         value="{{ isset($_GET['refno'])? $_GET['refno'] : "" }}">
    <input type="hidden" name="customeremail" value="{{ isset($_GET['email'])? $_GET['email'] : "" }}" >
    <input type="hidden" name="productdetail" value="{{ isset($_GET['items'])? $_GET['items'] : "" }}">
    <input type="hidden" name="total"         value="{{ isset($_GET['netpay'])? $_GET['netpay'] : "" }}">
    <div style="font-weight: bold;text-align:start;color:black;">ชำระผ่านบัตรเครดิตออนไลน์ | เค้าเตอร์เซอวิส</div>
    <div style="display:flex;margin: 10px 0px;">
        <img style="margin:auto;width:45%;"src="https://www.berdedd.com/img/creditbank.jpg" alt="แบนเนอร์จ่ายเงิน-paysolition" style="width: 130px;">
        <img style="margin:auto;width:55%;"src="https://www.berdedd.com/img/cs2.jpg" alt="แบนเนอร์จ่ายเงิน-paysolition" style="width: 130px;">
    </div>
    <button type="submit" id="">
        <div style="font-weight: bold;text-align:center;">ชำระผ่าน Pay Solution กดที่นี่</div>
    </button>
  </form>
  <script>document.getElementById("formPayments").submit()</script>
</div>

@endsection
