<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\OrderItem;
use App\Models\BerproductMonthly;
use App\Models\PrepaidSim;
use App\Models\TravelSim;

class SendOrderDetail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $dataCustomer;
    public function __construct($newOrder)
    {
        $this->dataCustomer = $newOrder;
    }

    public function build() 
    {
        $dataCustomer = $this->dataCustomer;
        $orderItems = OrderItem::where('order_id', $dataCustomer->id)->get();
        // dd($orderItems);
        $bermonthly = [];
        // $prepaid_sims = [];
        // $travel_sims = [];
        foreach($orderItems as $item){
            switch($item->type_id){
                case 3:
                    $bermonthly[] = BerproductMonthly::where('product_id', $item->product_id)->first();
                    break;
                // case 4:
                //     $prepaid_sims[] = PrepaidSim::find($item->product_id);
                //     break;
                // case 6:
                //     $travel_sims[] = TravelSim::find($item->product_id);
                //     break;
            }
        }
        // dd($prepaid_sims);
        return $this->subject('หมายเลขการสั่งซื้อเลขที่ '.$dataCustomer->order_number)
            ->markdown('frontend.mail.formorder', compact('orderItems', 'bermonthly'));
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: '',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
