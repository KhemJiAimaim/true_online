<?php



namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable

{

    use Queueable, SerializesModels;
    /**

     * Create a new message instance.

     *

     * @return void

     */

    public function __construct(Order $order, $webinfo)

    {
        $this->order = $order;
        $this->webinfo = $webinfo;
    }
    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()

    {
        $order = $this->order;
        $webinfo = $this->webinfo;
        return $this->subject('Restaurant Reservation')
            ->markdown('frontend.mail.index')
            ->with([
                'book' => $order,
                'web_info' => $webinfo,
            ]);
    }
}
