<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm Order</title>
</head>

<body>
    @php 

        $dataItemList = array_map(function ($item) {
            return $item['detail'];
        }, $dataItemList);

        $list_item = implode(", ", $dataItemList);
    
    @endphp
    <table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="border-collapse:collapse;margin:0;padding:0;color:#676867;height:100%!important;width:100%!important;padding:0;background-color:#ffffff;color:#444">
        <tbody>
            <tr>
              <td align="center" valign="top" style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;padding-top:40px">
                  <table border="0" cellpadding="0" cellspacing="0" width="550" style="border-collapse:collapse;margin-left:auto;margin-right:auto;width:550px">
                      <tbody>
                          <tr>
                              <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse">
                                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
                                      <tbody>
                                          <tr>
                                              <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;width:243px;height:30px;vertical-align:top">
                                              </td>
                                              <td rowspan="3" style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;width:64px;line-height:0">
                                                  <div style="border-radius:8px;overflow:hidden">
                                                      <img src="{{ url('/upload/2024/01/29/117065089380.png') }}" style="outline:none;text-decoration:none;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;color:#f6f8f9;font-size:28px;height:64px;border:2px solid;background:#fbfbfb;border-radius:8px;background:#f6f8f994">
                                                  </div>
                                              </td>
                                              <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;width:243px;height:30px;vertical-align:top"></td>
                                          </tr>
                                          <tr>
                                              <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;height:4px;background-color:#f0f2f3"></td>
                                              <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;height:4px;background-color:#f0f2f3"></td>
                                          </tr>
                                          <tr>
                                              <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;background-color:#f6f8f9;width:243px;height:30px;vertical-align:bottom">
                                              </td>
                                              <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;background-color:#f6f8f9;width:243px;height:30px;vertical-align:bottom">
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </td>
                          </tr>
                          <tr>
                            <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;padding-top:8px;background-color:#f6f8f9;text-align:center">
                              <div style="font-weight:bold;color:#000000;font-size:16px;line-height:150%">เบอร์มงคลที่ดีที่สุดเพื่อคุณ</div>
                              <div>
                                <a href="https://www.simnetunlimited.com/" title="www.simnetunlimited.com" style="text-decoration:none;font-size:11px;line-height:150%;color:#9b9b9b"target="_blank">www.simnetunlimited.com</a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                              <td
                                  style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;padding-top:40px;padding-bottom:20px;background-color:#f6f8f9;text-align:center">
                                  <div style="font-weight:bold;font-size:24px;color:#000000">
                                      <span>สั่งซื้อเรียบร้อย</span>
                                  </div>
                                  <div style="font-size:16px;color:#9b9b9b">
                                      <span>รายการสั่งซื้อของคุณคือ</span>
                                      <a style="color:#00aeef;text-decoration:none">{{$dataCustomer->order_number}}</a>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td
                                  style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;background-color:#f0f2f3;height:2px">
                              </td>
                          </tr>
                          <tr>
                              <td
                                  style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;background-color:#f6f8f9">
                                  <table align="left" border="0" cellpadding="0" cellspacing="0"
                                      style="border-collapse:collapse">
                                      <tbody>
                                          <tr>
                                            <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;padding-top:20px;padding-bottom:42px;text-align:center;width:182px;border-right:2px #f0f2f3 solid">
                                                <div style="line-height:0">
                                                    <img src="{{ url('images/email/bag.png')}}" style="border:0;outline:none;text-decoration:none;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;color:#aaaaaa;font-size:28px;width:36px;height:36px">
                                                </div>
                                                <div style="font-weight:bold;font-size:16px;line-height:150%;color:#000000;padding-top:8px">
                                                    <span>สถานะรายการสั่งซื้อ</span>
                                                </div>
                                                <div style="color:#7cc576">
                                                    {{-- <a style="text-decoration:none;color:currentColor" href="https://pay.sn/berhoro/{{$dataCustomer->total_price}}/{{$list_item}}" target="_blank" >รอชำระเงิน</a> --}}
                                                    <a style="text-decoration:none;color:currentColor" href="https://www.simnetunlimited.com/getpayment?refno={{$dataCustomer->id}}&amp;email={{$dataCustomer->email}}&amp;items={{$list_item}}&amp;netpay={{$dataCustomer->total_price}}" target="_blank" >รอชำระเงิน</a>
                                                </div>
                                                <div style="font-size:12px;color:#9b9b9b">กรุณาชำระเงินค่าสินค้า</div>
                                            </td>
                                          </tr>
                                      </tbody>
                                  </table>
                                  <table align="left" border="0" cellpadding="0" cellspacing="0"
                                      style="border-collapse:collapse">
                                      <tbody>
                                        <tr>
                                            <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;padding-top:20px;padding-bottom:42px;text-align:center;width:182px;border-right:2px #f0f2f3 solid">
                                            <div style="line-height:0">
                                            <img src="{{ url('images/email/coins.png')}}"
                                                    style="border:0;outline:none;text-decoration:none;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;color:#aaaaaa;font-size:28px;width:36px;height:36px">
                                            </div>
                                            <div style="font-weight:bold;font-size:16px;color:#000000;padding-top:8px">
                                                {{-- <a style="text-decoration:none;color:currentColor" href="https://pay.sn/berhoro/{{$dataCustomer->total_price}}/{{$list_item}}" target="_blank">จำนวนเงินที่ต้องชำระ</a> --}}
                                                <a style="text-decoration:none;color:currentColor" href="https://www.simnetunlimited.com/getpayment?refno={{$dataCustomer->id}}&amp;email={{$dataCustomer->email}}&amp;items={{$list_item}}&amp;netpay={{$dataCustomer->total_price}}" target="_blank">จำนวนเงินที่ต้องชำระ</a>
                                            </div>
                                            <div style="font-weight:bold;font-size:14px;color:#ff8c00;padding:2px">{{number_format($dataCustomer->total_price)}}</div>
                                            <div style="font-size:12px;color:#9b9b9b"><span>ชำระผ่าน PaySolution</span></div>
                                            </td>
                                        </tr>
                                      </tbody>
                                  </table>
                                  <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
                                      <tbody>
                                          <tr>
                                                <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;padding-top:20px;padding-bottom:20px;text-align:center;width:182px">
                                                    <div style="line-height:0">
                                                    <img src="{{ url('images/email/pay.png')}}" style="border:0;outline:none;text-decoration:none;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;color:#aaaaaa;font-size:28px;width:36px;height:36px">
                                                    </div>
                                                    <div style="font-weight:bold;font-size:16px;color:#000000;padding-top:8px">
                                                        <span style="display:inline-block">
                                                        {{-- <a style="text-decoration:none;color:currentColor" href="https://pay.sn/berhoro/{{$dataCustomer->total_price}}/{{$list_item}}" target="_blank">กรุณาแจ้งชำระสินค้า</a> --}}
                                                        <a style="text-decoration:none;color:currentColor" href="https://www.simnetunlimited.com/getpayment?refno={{$dataCustomer->id}}&amp;email={{$dataCustomer->email}}&amp;items={{$list_item}}&amp;netpay={{$dataCustomer->total_price}}" target="_blank">กรุณาแจ้งชำระสินค้า</a>
                                                        </span>
                                                    </div>
                                                    <div style="font-weight:bold;font-size:14px;color:#5674b9;padding:5px">ภายใน 1 วัน</div>
                                                    <div style="font-size:12px;color:#9b9b9b"></div>
                                                </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </td>
            </tr>

            <tr>
                <td align="center" valign="top"
                    style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse">
                    <table border="0" cellpadding="0" cellspacing="0" width="550"
                        style="border-collapse:collapse;margin-left:auto;margin-right:auto;width:550px">
                        <tbody>
                            <tr>
                                <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;padding-top:40px">
                                    <div>
                                        <div style="font-size:18px;font-weight:bold;color:#000000;text-align:center">รายการสินค้า</div>
                                        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;width:550px;margin-left:auto;margin-right:auto;margin-top:20px">
                                            <tbody>
                                                <tr>
                                                    <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;color:#9b9b9b;font-size:10px;vertical-align:bottom;border-bottom:1px solid #f0f2f3">
                                                        <span>สินค้า</span>
                                                    </td>
                                                    <td align="right" style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;width:32px;color:#9b9b9b;text-align:center;font-size:10px;vertical-align:bottom;border-bottom:1px solid #f0f2f3">
                                                        <span>ราคา</span>
                                                    </td>
                                                    <td align="right" style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;width:32px;color:#9b9b9b;font-size:10px;vertical-align:bottom;border-bottom:1px solid #f0f2f3">
                                                        <span>จำนวน</span>
                                                    </td>
                                                    <td align="right" style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;width:88px;color:#9b9b9b;font-size:10px;vertical-align:bottom;border-bottom:1px solid #f0f2f3">
                                                        <span>ราคารวม (บาท)</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="padding-top:10px"></td>
                                                </tr>

                                                @foreach($orderItems as $item)
                                                    @if($item->type_id == 3)
                                                        @foreach($bermonthly as $ber)
                                                            @if($item->product_id == $ber->product_id)
                                                            <tr>
                                                                <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;padding-top:8px;padding-bottom:8px;vertical-align:top">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;vertical-align:top;width:90px">
                                                                            <span>
                                                                                <img src="{{ url($ber->thumbnail) }}" style="font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;color:#aaaaaa;font-size:28px;border:0;outline:none;text-decoration:none;width:90px">
                                                                            </span>
                                                                            </td>
                                                                            <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;vertical-align:top;padding-left:4px">
                                                                            <div style="font-size:14px;line-height:120%">
                                                                                <span style="color:#00aeef;text-decoration:none">เบอร์ {{$ber->product_phone}}</span>
                                                                                <div style="font-size:10px;color:#9b9b9b;line-height:150%;padding-top:2px">ผลรวม {{$ber->product_sumber}}</div>
                                                                                @if($ber->monthly_status == 'yes')
                                                                                <div style="font-size:10px;color:#9b9b9b;line-height:150%;padding-top:2px">{{$ber->details_pack}}</div>
                                                                                @else
                                                                                <div style="font-size:10px;color:#9b9b9b;line-height:150%;padding-top:2px">{{$ber->product_comment}}</div>
                                                                                @endif
                                                                            </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                    </table>
                                                                </td>
                                                                <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;padding-right:8px;font-size:14px;color:#9b9b9b;line-height:150%;text-align:right;vertical-align:top">
                                                                    @if($item->discount > 0)
                                                                    <div><span style="color: gray; font-size: 12px;text-decoration: line-through;">{{ number_format($item->product_price) }}</span></div>
                                                                    @endif
                                                                    <span style="display:inline-block;vertical-align:middle">{{ number_format($item->product_price - (($item->product_price * $item->discount) / 100 )) }}</span>
                                                                </td>
                                                                <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;padding-right:8px;font-size:14px;color:#9b9b9b;line-height:150%;text-align:right;vertical-align:top">
                                                                    <span style="display:inline-block;vertical-align:middle">{{$item->quantity}}</span>
                                                                </td>
                                                                <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;font-size:14px;color:#000000;line-height:150%;text-align:right;vertical-align:top">
                                                                @if($item->discount > 0)
                                                                    <div><span style="color: gray; font-size: 12px;text-decoration: line-through;">{{ number_format($item->product_price) }}</span> <span style="font-size:10px;color: gray ;text-decoration: line-through;"> บาท</span> </div>
                                                                @endif
                                                                    <div>{{ number_format($item->product_price - (($item->product_price * $item->discount) / 100 )) }} <span style="font-size:10px;color:#9b9b9b"> บาท</span> </div>
                                                                </td>
                                                            </tr>
                                                            @endif
                                                        @endforeach
                                                    @elseif($item->type_id == 4)
                                                        {{-- @if(count($prepaid_sims) > 0)
                                                            @foreach($prepaid_sims as $prepaid)
                                                            @if($item->product_id == $prepaid->id) --}}
                                                                <tr>
                                                                    <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;padding-top:8px;padding-bottom:8px;vertical-align:top">
                                                                    <table border="0" cellpadding="0" cellspacing="0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;vertical-align:top;width:90px">
                                                                                <span>
                                                                                    <img src="{{ url($item->thumbnail) }}" style="font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;color:#aaaaaa;font-size:28px;border:0;outline:none;text-decoration:none;width:90px">
                                                                                </span>
                                                                                </td>
                                                                                <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;vertical-align:top;padding-left:4px">
                                                                                <div style="font-size:14px;line-height:120%">
                                                                                    <span style="color:#00aeef;text-decoration:none">ซิมเทพเติมเงิน</span>
                                                                                    <div style="font-size:10px;color:#9b9b9b;line-height:150%;padding-top:2px">{{$item->product_name}}</div>
                                                                                </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;padding-right:8px;font-size:14px;color:#9b9b9b;line-height:150%;text-align:right;vertical-align:top">
                                                                        <span style="display:inline-block;vertical-align:middle">{{ number_format($item->product_price) }}</span>
                                                                    </td>
                                                                    <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;padding-right:8px;font-size:14px;color:#9b9b9b;line-height:150%;text-align:right;vertical-align:top">
                                                                        <span style="display:inline-block;vertical-align:middle">{{$item->quantity}}</span>
                                                                    </td>
                                                                    <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;font-size:14px;color:#000000;line-height:150%;text-align:right;vertical-align:top">
                                                                        <div>{{ number_format($item->product_price * $item->quantity) }} <span style="font-size:10px;color:#9b9b9b"> บาท</span> </div>
                                                                    </td>
                                                                </tr>
                                                            {{-- @endif
                                                            @endforeach
                                                        @endif --}}
                                                    @elseif($item->type_id == 6)
                                                        {{-- @if(count($travel_sims) > 0)
                                                            @foreach($travel_sims as $travel)
                                                            @if($item->product_id == $travel->id) --}}
                                                            <tr>
                                                                <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;padding-top:8px;padding-bottom:8px;vertical-align:top">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;vertical-align:top;width:90px">
                                                                            <span>
                                                                                <img src="{{ url($item->thumbnail) }}" style="font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;color:#aaaaaa;font-size:28px;border:0;outline:none;text-decoration:none;width:90px">
                                                                            </span>
                                                                            </td>
                                                                            <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;vertical-align:top;padding-left:4px">
                                                                            <div style="font-size:14px;line-height:120%">
                                                                                <span style="color:#00aeef;text-decoration:none">ซิมท่องเที่ยว</span>
                                                                                <div style="font-size:10px;color:#9b9b9b;line-height:150%;padding-top:2px">{{$item->product_name}}</div>
                                                                            </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                    </table>
                                                                </td>
                                                                <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;padding-right:8px;font-size:14px;color:#9b9b9b;line-height:150%;text-align:right;vertical-align:top">
                                                                    <span style="display:inline-block;vertical-align:middle">{{number_format($item->product_price)}}</span>
                                                                </td>
                                                                <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;padding-right:8px;font-size:14px;color:#9b9b9b;line-height:150%;text-align:right;vertical-align:top">
                                                                    <span style="display:inline-block;vertical-align:middle">{{$item->quantity}}</span>
                                                                </td>
                                                                <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;font-size:14px;color:#000000;line-height:150%;text-align:right;vertical-align:top">
                                                                    <div>{{ number_format($item->product_price * $item->quantity) }} <span style="font-size:10px;color:#9b9b9b"> บาท</span> </div>
                                                                </td>
                                                            </tr>
                                                            {{-- @endif
                                                            @endforeach
                                                        @endif --}}
                                                    @endif
                                                @endforeach

                                                <tr>
                                                  <td colspan="3" style="padding-top:10px"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                              <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse">
                                  <div style="width:550px;margin-left:auto;margin-right:auto;padding-top:10px;padding-bottom:10px;border-top:1px solid #f0f2f3">
                                      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;font-size:14px;color:#000000;width:100%">
                                          <tbody>
                                              <tr>
                                                  <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;text-align:right;line-height:150%;padding-top:8px;padding-bottom:4px">
                                                      <span>ค่าบริการจัดส่ง</span>
                                                  </td>
                                                  <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;width:150px;min-width:150px;text-align:right;line-height:150%;padding-top:8px;padding-bottom:4px">
                                                      <span>{{$dataCustomer->shipping_cost}}</span>
                                                      <span style="font-size:10px">บาท</span>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;text-align:right;line-height:150%;padding-top:8px;padding-bottom:4px">
                                                      <span>ราคาสินค้าทั้งหมด</span>
                                                  </td>
                                                  <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;width:150px;min-width:150px;text-align:right;line-height:150%;padding-top:8px;padding-bottom:4px">
                                                      <span>{{number_format($dataCustomer->total_price)}}</span>
                                                      <span style="font-size:10px">บาท</span>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                                <td style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse">
                                    <div style="width:550px;margin-left:auto;margin-right:auto;padding-top:30px;padding-bottom:30px;border-top:1px solid #f0f2f3">
                                        <div style="width:97%;margin-left:auto;margin-right:auto;line-height:150%">
                                            <div style="font-size:18px;font-weight:bold;color:#000000">ข้อมูลผู้ซื้อสินค้า</div>
                                            <div style="padding-left:2%;padding-top:8px;font-size:14px">
                                                <span>อีเมล:</span>
                                                <span style="font-weight:bold">
                                                    <a style="text-decoration:none;color:currentColor" href="mailto:nattapol.surinkeaw@gmail.com" target="_blank">{{$dataCustomer->email}}</a>
                                                </span>
                                            </div>
                                            <div style="padding-left:2%;padding-top:8px;font-size:14px">
                                                <span>ชื่อ: {{$dataCustomer->firstname}} {{$dataCustomer->lastname}}</span>
                                            </div>
                                            <div style="padding-left:2%;padding-top:8px;font-size:14px">
                                                <span>เบอร์มือถือ: {{$dataCustomer->phone_number}}</span>
                                            </div>
                                            <div style="padding-left:2%;padding-top:8px;font-size:14px">
                                                <span>ที่อยู่: {{$dataCustomer->address}} {{$dataCustomer->subdistrict}} {{$dataCustomer->district}} {{$dataCustomer->province}} {{$dataCustomer->zip_code}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

            <tr>
                <td align="center" valign="top" style="margin:0;padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse">
                    <table border="0" cellpadding="0" cellspacing="0" width="600" style="margin:auto;border-collapse:collapse;margin-left:auto;margin-right:auto;border-top:1px solid #fafafa">
                        <tbody>
                            <tr>
                              <td style="padding-top:10px">
                                <div style="text-align:center;padding:10px 0px;background:#f6f8f9;margin:0px 16px">
                                  <label style="font-size:bold;font-size:16px;padding-right:5px">แจ้งชำระเงิน ติดต่อ</label>
                                  <a href="tel:0832289789" style="text-decoration:none;font-size:16px;line-height:150%;color:#00aeef;margin:auto 0px;padding-right:5px" target="_blank">
                                    <img style="width:12px;height:12px" src="{{ url('images/email/tel.png')}}"> 
                                  </a>
                                  <a href="tel:0832289789" target="_blank">0832289789</a> 
                                  <a href="tel:0645695656" target="_blank">0645695656</a>
                                  <a href="https://lin.ee/heZ761Y" style="text-decoration:none;font-size:16px;line-height:150%;color:#00aeef;margin:auto 0px;padding-right:5px" target="_blank">
                                      <img style="width:12px;height:12px" src="{{ url('images/email/line.png')}}">
                                    @fibertrue </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="margin-left:auto;margin-right:auto;padding:30px 0px;border-top:1px solid #f0f2f3">
                                        <div>
                                            <div style="padding:5px 16px;font-weight:bold">ช่องทางการชำระเงิน</div>
                                            <div style="display:flex;border:1px solid gray;margin:16px;padding:7px 0px;margin-bottom:0px">
                                                <img src="https://ci3.googleusercontent.com/meips/ADKq_NbPNki_tldJaHHrUyIFHRPfmczFAcWI1YviXUllxnDfvPeGqq7SmM1Ac9KWSxub0YYfWi3nUFJkcafAddQeRpY1M11LDca57lJ6Pqqv5NodnevL3kNGOfgLD6rdk3aN=s0-d-e1-ft#https://www.berhoro.com//upload/bank/a96b3a133175049f51e2d63132b3b124.jpg" alt="รูปประกอบ-ธนาคารไทยพาณิชย์" style="width:130px;height:130px">
                                                <div>
                                                    <p>ธนาคาร : ธนาคารไทยพาณิชย์</p>
                                                    <p>บัญชี : 4281463457</p>
                                                    <p>ชื่อบัญชี : บริษัท พาณิชย์อมรกิจ จำกัด</p>
                                                </div>
                                            </div>
                                            <div style="margin-top:5px;text-align:center;padding:16px">
                                                <div style="font-weight:bold;text-align:start;color:black">ชำระผ่านบัตรเครดิตออนไลน์ | เค้าเตอร์เซอวิส</div>
                                                <div style="display:flex;margin:10px 0px">
                                                  <img style="margin:auto;width:100%;height:125px" src="{{ url('images/email/paymentway.jpg')}}" alt="แบนเนอร์จ่ายเงิน-paysolition" class="CToWUd a6T" data-bit="iit" tabindex="0">
                                                  <div class="a6S" dir="ltr" style="opacity: 0.01; left: 551.5px; top: 1351.8px;">
                                                    <div id=":146" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q"
                                                        title="ดาวน์โหลด" role="button" tabindex="0"
                                                        aria-label="ดาวน์โหลดไฟล์แนบ "
                                                        jslog="91252; u014N:cOuCgd,Kr2w4b,xr6bB; 4:WyIjbXNnLWY6MTc4NDMxOTEyNDU4MTA2MDMzNiJd"
                                                        data-tooltip-class="a1V" jsaction="JIbuQc:.CLIENT">
                                                        <div class="akn">
                                                            <div class="aSK J-J5-Ji aYr"></div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <a rel="noopener" href="https://www.simnetunlimited.com/getpayment?refno={{$dataCustomer->id}}&amp;email={{$dataCustomer->email}}&amp;items={{$list_item}}&amp;netpay={{$dataCustomer->total_price}}" target="_blank" >
                                                    <button style="color:white;background:red;padding:10px 20px;border-radius:5px;border:2px solid red;margin-top:10px; cursor: pointer;" type="submit">
                                                        <div style="font-weight:bold;text-align:center">ชำระผ่าน Pay Solution กดที่นี่</div>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <div style="text-align:center;padding:10px 0px;background:#f6f8f9;margin:0px 16px">
                                            <label style="font-size:bold;font-size:16px;padding-right:5px">แจ้งชำระเงิน ติดต่อ</label>
                                            <a href="tel:0832289789" style="text-decoration:none;font-size:16px;line-height:150%;color:#00aeef;margin:auto 0px;padding-right:5px" target="_blank">
                                              <img style="width:12px;height:12px" src="{{ url('images/email/tel.png')}}"> </a>
                                              <a href="tel:0832289789" target="_blank">0832289789</a> 
                                              <a href="tel:0645695656" target="_blank">0645695656</a>
                                            <a href="https://lin.ee/heZ761Y" style="text-decoration:none;font-size:16px;line-height:150%;color:#00aeef;margin:auto 0px;padding-right:5px" target="_blank">
                                              <img style="width:12px;height:12px" src="{{ url('images/email/line.png')}}">
                                            @fibertrue </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                              <td style="padding:0;font-family:Avenir,Helvetica,Arial,Verdana,sans-serif;border-collapse:collapse;text-align:center;font-size:16px">
                                <div>ขอขอบคุณที่อุดหนุนสินค้าจากเรา</div>
                                <font color="#888888">
                                    <div style="padding-bottom:50px">
                                        <a href="https://www.simnetunlimited.com/" style="color:#00aeef;text-decoration:none;line-height:200%" target="_blank" >www.simnetunlimited.com</a>
                                    </div>
                                </font>
                              </td>
                            </tr>

                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
