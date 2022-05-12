<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
// 處理信件的
class OrderComplete extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //接收controller送來的資料
       
        $this->mydata = $data;
    }

    /**寄信
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->mydata;

        return $this->subject($data['subject'])->view('mail.order-complete',compact('data'));
    }
}
