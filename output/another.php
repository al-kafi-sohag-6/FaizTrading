<?php

Illuminate\Database\Eloquent\Collection {#2595
    #items: array:50 [
      0 => App\Transaction {#2601
        #guarded: array:1 [
          0 => "id"
        ]
        #casts: array:3 [
          "purchase_order_ids" => "array"
          "sales_order_ids" => "array"
          "export_custom_fields_info" => "array"
        ]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [
          "id" => 179
          "transaction_date" => "2022-03-18 09:59:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000120"
          "invoice_no_text" => "000120"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "105.0000"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "105.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/18"
          "added_by" => "Mr Farhan "
          "total_paid" => "105.0000"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 1
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "1.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #original: array:50 [
          "id" => 179
          "transaction_date" => "2022-03-18 09:59:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000120"
          "invoice_no_text" => "000120"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "105.0000"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "105.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/18"
          "added_by" => "Mr Farhan "
          "total_paid" => "105.0000"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 1
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "1.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [
          "payment_lines" => Illuminate\Database\Eloquent\Collection {#2698 …1}
        ]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      1 => App\Transaction {#2602
        #guarded: array:1 [
          0 => "id"
        ]
        #casts: array:3 [
          "purchase_order_ids" => "array"
          "sales_order_ids" => "array"
          "export_custom_fields_info" => "array"
        ]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [
          "id" => 180
          "transaction_date" => "2022-03-18 11:21:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000121"
          "invoice_no_text" => "000121"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "105.0000"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "105.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/18"
          "added_by" => "Mr Farhan "
          "total_paid" => "105.0000"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 1
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "1.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #original: array:50 [
          "id" => 180
          "transaction_date" => "2022-03-18 11:21:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000121"
          "invoice_no_text" => "000121"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "105.0000"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "105.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/18"
          "added_by" => "Mr Farhan "
          "total_paid" => "105.0000"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 1
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "1.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [
          "payment_lines" => Illuminate\Database\Eloquent\Collection {#2600 …1}
        ]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      2 => App\Transaction {#2603
        #guarded: array:1 [
          0 => "id"
        ]
        #casts: array:3 [
          "purchase_order_ids" => "array"
          "sales_order_ids" => "array"
          "export_custom_fields_info" => "array"
        ]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [
          "id" => 186
          "transaction_date" => "2022-03-20 13:39:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000126"
          "invoice_no_text" => "000126"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "105.0000"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "105.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/20"
          "added_by" => "Mr Farhan "
          "total_paid" => "105.0000"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 1
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "1.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #original: array:50 [
          "id" => 186
          "transaction_date" => "2022-03-20 13:39:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000126"
          "invoice_no_text" => "000126"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "105.0000"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "105.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/20"
          "added_by" => "Mr Farhan "
          "total_paid" => "105.0000"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 1
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "1.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [
          "payment_lines" => Illuminate\Database\Eloquent\Collection {#2591 …1}
        ]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      3 => App\Transaction {#2604
        #guarded: array:1 [
          0 => "id"
        ]
        #casts: array:3 [
          "purchase_order_ids" => "array"
          "sales_order_ids" => "array"
          "export_custom_fields_info" => "array"
        ]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [
          "id" => 188
          "transaction_date" => "2022-03-21 00:26:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000128"
          "invoice_no_text" => "000128"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "15.7500"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "15.7500"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/21"
          "added_by" => "Mr. Shah Riaz "
          "total_paid" => "15.7500"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 1
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "1.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #original: array:50 [
          "id" => 188
          "transaction_date" => "2022-03-21 00:26:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000128"
          "invoice_no_text" => "000128"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "15.7500"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "15.7500"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/21"
          "added_by" => "Mr. Shah Riaz "
          "total_paid" => "15.7500"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 1
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "1.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [
          "payment_lines" => Illuminate\Database\Eloquent\Collection {#2593 …1}
        ]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      4 => App\Transaction {#2605
        #guarded: array:1 [
          0 => "id"
        ]
        #casts: array:3 [
          "purchase_order_ids" => "array"
          "sales_order_ids" => "array"
          "export_custom_fields_info" => "array"
        ]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [
          "id" => 189
          "transaction_date" => "2022-03-21 00:52:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000129"
          "invoice_no_text" => "000129"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "151.0000"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "150.9900"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/21"
          "added_by" => "Mr. Shah Riaz "
          "total_paid" => "151.0000"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 4
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "4.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #original: array:50 [
          "id" => 189
          "transaction_date" => "2022-03-21 00:52:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000129"
          "invoice_no_text" => "000129"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "151.0000"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "150.9900"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/21"
          "added_by" => "Mr. Shah Riaz "
          "total_paid" => "151.0000"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 4
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "4.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [
          "payment_lines" => Illuminate\Database\Eloquent\Collection {#2594 …1}
        ]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      5 => App\Transaction {#2606
        #guarded: array:1 [
          0 => "id"
        ]
        #casts: array:3 [
          "purchase_order_ids" => "array"
          "sales_order_ids" => "array"
          "export_custom_fields_info" => "array"
        ]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [
          "id" => 190
          "transaction_date" => "2022-03-21 08:32:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000130"
          "invoice_no_text" => "000130"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "265.0000"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "265.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/21"
          "added_by" => "Mr Farhan "
          "total_paid" => "265.0000"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 1
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "1.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #original: array:50 [
          "id" => 190
          "transaction_date" => "2022-03-21 08:32:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000130"
          "invoice_no_text" => "000130"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "265.0000"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "265.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/21"
          "added_by" => "Mr Farhan "
          "total_paid" => "265.0000"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 1
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "1.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [
          "payment_lines" => Illuminate\Database\Eloquent\Collection {#2592 …1}
        ]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      6 => App\Transaction {#2607
        #guarded: array:1 [
          0 => "id"
        ]
        #casts: array:3 [
          "purchase_order_ids" => "array"
          "sales_order_ids" => "array"
          "export_custom_fields_info" => "array"
        ]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [
          "id" => 191
          "transaction_date" => "2022-03-21 08:32:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000131"
          "invoice_no_text" => "000131"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "105.0000"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "105.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/21"
          "added_by" => "Mr Farhan "
          "total_paid" => "105.0000"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 1
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "1.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #original: array:50 [
          "id" => 191
          "transaction_date" => "2022-03-21 08:32:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000131"
          "invoice_no_text" => "000131"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "105.0000"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "105.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/21"
          "added_by" => "Mr Farhan "
          "total_paid" => "105.0000"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 1
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "1.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [
          "payment_lines" => Illuminate\Database\Eloquent\Collection {#2590 …1}
        ]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      7 => App\Transaction {#2608
        #guarded: array:1 [
          0 => "id"
        ]
        #casts: array:3 [
          "purchase_order_ids" => "array"
          "sales_order_ids" => "array"
          "export_custom_fields_info" => "array"
        ]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [
          "id" => 192
          "transaction_date" => "2022-03-21 08:39:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000132"
          "invoice_no_text" => "000132"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "105.0000"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "105.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/21"
          "added_by" => "Mr Farhan "
          "total_paid" => "105.0000"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 1
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "1.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #original: array:50 [
          "id" => 192
          "transaction_date" => "2022-03-21 08:39:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000132"
          "invoice_no_text" => "000132"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "105.0000"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "105.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/21"
          "added_by" => "Mr Farhan "
          "total_paid" => "105.0000"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 1
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "1.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [
          "payment_lines" => Illuminate\Database\Eloquent\Collection {#2589 …1}
        ]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      8 => App\Transaction {#2609
        #guarded: array:1 [
          0 => "id"
        ]
        #casts: array:3 [
          "purchase_order_ids" => "array"
          "sales_order_ids" => "array"
          "export_custom_fields_info" => "array"
        ]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [
          "id" => 193
          "transaction_date" => "2022-03-21 08:39:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000133"
          "invoice_no_text" => "000133"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "122.0000"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "122.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/21"
          "added_by" => "Mr Farhan "
          "total_paid" => "122.0000"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 2
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "2.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #original: array:50 [
          "id" => 193
          "transaction_date" => "2022-03-21 08:39:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000133"
          "invoice_no_text" => "000133"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "122.0000"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "122.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/21"
          "added_by" => "Mr Farhan "
          "total_paid" => "122.0000"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 2
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "2.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [
          "payment_lines" => Illuminate\Database\Eloquent\Collection {#2588 …1}
        ]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      9 => App\Transaction {#2610
        #guarded: array:1 [
          0 => "id"
        ]
        #casts: array:3 [
          "purchase_order_ids" => "array"
          "sales_order_ids" => "array"
          "export_custom_fields_info" => "array"
        ]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [
          "id" => 194
          "transaction_date" => "2022-03-21 08:43:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000134"
          "invoice_no_text" => "000134"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "370.0000"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "370.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/21"
          "added_by" => "Mr Farhan "
          "total_paid" => "370.0000"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 2
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "2.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #original: array:50 [
          "id" => 194
          "transaction_date" => "2022-03-21 08:43:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000134"
          "invoice_no_text" => "000134"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "370.0000"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "370.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/21"
          "added_by" => "Mr Farhan "
          "total_paid" => "370.0000"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 2
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "2.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [
          "payment_lines" => Illuminate\Database\Eloquent\Collection {#2587 …1}
        ]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      10 => App\Transaction {#2611
        #guarded: array:1 [
          0 => "id"
        ]
        #casts: array:3 [
          "purchase_order_ids" => "array"
          "sales_order_ids" => "array"
          "export_custom_fields_info" => "array"
        ]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [
          "id" => 197
          "transaction_date" => "2022-03-21 09:02:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000135"
          "invoice_no_text" => "000135"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "492.7500"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "492.7500"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/21"
          "added_by" => "Mr Farhan "
          "total_paid" => "492.7500"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 4
          "waiter" => "  "
          "table_name" => null
          "so_qty_remaining" => "4.0000"
          "is_export" => 0
          "is_recurring" => 0
          "recur_parent_id" => null
        ]
        #original: array:50 [
          "id" => 197
          "transaction_date" => "2022-03-21 09:02:00"
          "type" => "sell"
          "is_direct_sale" => 0
          "invoice_no" => "000135"
          "invoice_no_text" => "000135"
          "name" => "Walk-In Customer"
          "mobile" => ""
          "contact_id" => "CO0001"
          "supplier_business_name" => null
          "status" => "final"
          "payment_status" => "paid"
          "final_total" => "492.7500"
          "tax_amount" => "0.0000"
          "discount_amount" => "0.0000"
          "discount_type" => "percentage"
          "total_before_tax" => "492.7500"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "rp_earned" => 0
          "types_of_service_id" => null
          "shipping_status" => null
          "pay_term_number" => null
          "pay_term_type" => null
          "additional_notes" => null
          "staff_note" => null
          "shipping_details" => null
          "document" => null
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "sale_date" => "2022/03/21"
          "added_by" => "Mr Farhan "
          "total_paid" => "492.7500"
          "business_location" => "Faiz Trading LLC"
          "return_exists" => 0
          "return_paid" => null
          "amount_return" => "0.0000"
          "return_transaction_id" => null
          "types_of_service_name" => null
          "service_custom_field_1" => null
          "total_items" => 4
          "waiter" => "  "
          "table_name" => null
           …4
        ]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      11 => App\Transaction {#2612
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      12 => App\Transaction {#2613
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      13 => App\Transaction {#2614
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      14 => App\Transaction {#2615
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      15 => App\Transaction {#2616
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      16 => App\Transaction {#2617
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      17 => App\Transaction {#2618
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      18 => App\Transaction {#2619
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      19 => App\Transaction {#2620
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      20 => App\Transaction {#2621
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      21 => App\Transaction {#2622
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      22 => App\Transaction {#2623
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      23 => App\Transaction {#2624
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      24 => App\Transaction {#2625
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      25 => App\Transaction {#2626
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      26 => App\Transaction {#2627
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      27 => App\Transaction {#2628
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      28 => App\Transaction {#2629
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      29 => App\Transaction {#2630
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      30 => App\Transaction {#2631
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      31 => App\Transaction {#2632
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      32 => App\Transaction {#2633
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      33 => App\Transaction {#2634
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      34 => App\Transaction {#2635
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      35 => App\Transaction {#2636
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      36 => App\Transaction {#2637
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      37 => App\Transaction {#2638
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      38 => App\Transaction {#2639
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      39 => App\Transaction {#2640
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      40 => App\Transaction {#2641
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      41 => App\Transaction {#2642
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      42 => App\Transaction {#2643
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      43 => App\Transaction {#2644
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      44 => App\Transaction {#2645
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      45 => App\Transaction {#2646
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      46 => App\Transaction {#2647
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      47 => App\Transaction {#2648
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      48 => App\Transaction {#2649
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      49 => App\Transaction {#2650
        #guarded: array:1 [ …1]
        #casts: array:3 [ …3]
        #table: "transactions"
        #connection: "mysql"
        #primaryKey: "id"
        #keyType: "int"
        +incrementing: true
        #with: []
        #withCount: []
        #perPage: 15
        +exists: true
        +wasRecentlyCreated: false
        #attributes: array:50 [ …50]
        #original: array:50 [ …50]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: array:1 [ …1]
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
    ]
  }