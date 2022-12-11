<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DuetransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $totalpaid = $this->total_paid == null ? 0 : $this->total_paid;
        $dueremain = intval($this->final_total) - $totalpaid;
        return [
            "id"=> $this->id,
            'contact_id' => $this->contact_id,
            "document"=> $this->document,
            "final_total"=> $this->final_total,
            "invoice_no"=> $this->invoice_no,
            "is_direct_sale"=>$this->is_direct_sale,
            "mobile"=> $this->mobile,
            "name"=> $this->name,
            "total_paid"=> $totalpaid,
            "transaction_date"=> date("Y-m-d h:i a", strtotime($this->transaction_date)),
            "type"=> $this->type,
            "due_remian" => $dueremain
        ];
    }
}
