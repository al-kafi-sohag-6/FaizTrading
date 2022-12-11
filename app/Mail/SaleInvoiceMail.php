<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SaleInvoiceMail extends Mailable
{
    use Queueable, SerializesModels;
public $html_content;
public $transaction;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($html_content,$transaction)
    {
        $this->html_content=$html_content;
        $this->transaction=$transaction;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Faiztrading: New Reciept Arrived ('.$this->transaction['invoice_no'].')')
                    ->view('emails.saleInvoice');
    }
}
