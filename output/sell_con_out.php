<?php 
Illuminate\Database\Eloquent\Collection {#2114
    #items: array:79 [
      0 => App\Transaction {#2115
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
        #attributes: array:98 [
          "id" => 136
          "business_id" => 1
          "location_id" => 1
          "res_table_id" => null
          "res_waiter_id" => null
          "res_order_status" => null
          "type" => "sell"
          "sub_type" => null
          "status" => "final"
          "sub_status" => null
          "is_quotation" => 0
          "payment_status" => "paid"
          "adjustment_type" => null
          "contact_id" => 1
          "customer_group_id" => null
          "invoice_no" => "000084"
          "ref_no" => ""
          "source" => null
          "subscription_no" => null
          "subscription_repeat_on" => null
          "transaction_date" => "2021-10-23 20:36:00"
          "total_before_tax" => "52.0000"
          "tax_id" => 1
          "tax_amount" => "2.6000"
          "discount_type" => "percentage"
          "discount_amount" => "0.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "shipping_details" => null
          "shipping_address" => null
          "shipping_status" => null
          "delivered_to" => null
          "shipping_charges" => "0.0000"
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "additional_notes" => null
          "staff_note" => null
          "is_export" => 0
          "export_custom_fields_info" => null
          "round_off_amount" => "0.0000"
          "additional_expense_key_1" => null
          "additional_expense_value_1" => "0.0000"
          "additional_expense_key_2" => null
          "additional_expense_value_2" => "0.0000"
          "additional_expense_key_3" => null
          "additional_expense_value_3" => "0.0000"
          "additional_expense_key_4" => null
          "additional_expense_value_4" => "0.0000"
          "final_total" => "54.6000"
          "expense_category_id" => null
          "expense_for" => null
          "commission_agent" => null
          "document" => null
          "is_direct_sale" => 0
          "is_suspend" => 0
          "exchange_rate" => "1.000"
          "total_amount_recovered" => null
          "transfer_parent_id" => null
          "return_parent_id" => null
          "opening_stock_product_id" => null
          "created_by" => 2
          "prefer_payment_method" => null
          "prefer_payment_account" => null
          "sales_order_ids" => null
          "purchase_order_ids" => null
          "custom_field_1" => null
          "custom_field_2" => null
          "custom_field_3" => null
          "custom_field_4" => null
          "import_batch" => null
          "import_time" => null
          "types_of_service_id" => null
          "packing_charge" => "0.0000"
          "packing_charge_type" => null
          "service_custom_field_1" => null
          "service_custom_field_2" => null
          "service_custom_field_3" => null
          "service_custom_field_4" => null
          "service_custom_field_5" => null
          "service_custom_field_6" => null
          "is_created_from_api" => 0
          "rp_earned" => 0
          "order_addresses" => null
          "is_recurring" => 0
          "recur_interval" => 1.0
          "recur_interval_type" => "days"
          "recur_repetitions" => 0
          "recur_stopped_on" => null
          "recur_parent_id" => null
          "invoice_token" => null
          "pay_term_number" => 60
          "pay_term_type" => "days"
          "selling_price_group_id" => null
          "created_at" => "2021-10-24 06:40:31"
          "updated_at" => "2021-10-24 06:40:31"
        ]
        #original: array:98 [
          "id" => 136
          "business_id" => 1
          "location_id" => 1
          "res_table_id" => null
          "res_waiter_id" => null
          "res_order_status" => null
          "type" => "sell"
          "sub_type" => null
          "status" => "final"
          "sub_status" => null
          "is_quotation" => 0
          "payment_status" => "paid"
          "adjustment_type" => null
          "contact_id" => 1
          "customer_group_id" => null
          "invoice_no" => "000084"
          "ref_no" => ""
          "source" => null
          "subscription_no" => null
          "subscription_repeat_on" => null
          "transaction_date" => "2021-10-23 20:36:00"
          "total_before_tax" => "52.0000"
          "tax_id" => 1
          "tax_amount" => "2.6000"
          "discount_type" => "percentage"
          "discount_amount" => "0.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "shipping_details" => null
          "shipping_address" => null
          "shipping_status" => null
          "delivered_to" => null
          "shipping_charges" => "0.0000"
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "additional_notes" => null
          "staff_note" => null
          "is_export" => 0
          "export_custom_fields_info" => null
          "round_off_amount" => "0.0000"
          "additional_expense_key_1" => null
          "additional_expense_value_1" => "0.0000"
          "additional_expense_key_2" => null
          "additional_expense_value_2" => "0.0000"
          "additional_expense_key_3" => null
          "additional_expense_value_3" => "0.0000"
          "additional_expense_key_4" => null
          "additional_expense_value_4" => "0.0000"
          "final_total" => "54.6000"
          "expense_category_id" => null
          "expense_for" => null
          "commission_agent" => null
          "document" => null
          "is_direct_sale" => 0
          "is_suspend" => 0
          "exchange_rate" => "1.000"
          "total_amount_recovered" => null
          "transfer_parent_id" => null
          "return_parent_id" => null
          "opening_stock_product_id" => null
          "created_by" => 2
          "prefer_payment_method" => null
          "prefer_payment_account" => null
          "sales_order_ids" => null
          "purchase_order_ids" => null
          "custom_field_1" => null
          "custom_field_2" => null
          "custom_field_3" => null
          "custom_field_4" => null
          "import_batch" => null
          "import_time" => null
          "types_of_service_id" => null
          "packing_charge" => "0.0000"
          "packing_charge_type" => null
          "service_custom_field_1" => null
          "service_custom_field_2" => null
          "service_custom_field_3" => null
          "service_custom_field_4" => null
          "service_custom_field_5" => null
          "service_custom_field_6" => null
          "is_created_from_api" => 0
          "rp_earned" => 0
          "order_addresses" => null
          "is_recurring" => 0
          "recur_interval" => 1.0
          "recur_interval_type" => "days"
          "recur_repetitions" => 0
          "recur_stopped_on" => null
          "recur_parent_id" => null
          "invoice_token" => null
          "pay_term_number" => 60
          "pay_term_type" => "days"
          "selling_price_group_id" => null
          "created_at" => "2021-10-24 06:40:31"
          "updated_at" => "2021-10-24 06:40:31"
        ]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      1 => App\Transaction {#2116
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
        #attributes: array:98 [
          "id" => 137
          "business_id" => 1
          "location_id" => 1
          "res_table_id" => null
          "res_waiter_id" => null
          "res_order_status" => null
          "type" => "sell"
          "sub_type" => null
          "status" => "final"
          "sub_status" => null
          "is_quotation" => 0
          "payment_status" => "paid"
          "adjustment_type" => null
          "contact_id" => 1
          "customer_group_id" => null
          "invoice_no" => "000085"
          "ref_no" => ""
          "source" => null
          "subscription_no" => null
          "subscription_repeat_on" => null
          "transaction_date" => "2021-10-23 20:40:00"
          "total_before_tax" => "300.0000"
          "tax_id" => 1
          "tax_amount" => "15.0000"
          "discount_type" => "percentage"
          "discount_amount" => "0.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "shipping_details" => null
          "shipping_address" => null
          "shipping_status" => null
          "delivered_to" => null
          "shipping_charges" => "0.0000"
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "additional_notes" => null
          "staff_note" => null
          "is_export" => 0
          "export_custom_fields_info" => null
          "round_off_amount" => "0.0000"
          "additional_expense_key_1" => null
          "additional_expense_value_1" => "0.0000"
          "additional_expense_key_2" => null
          "additional_expense_value_2" => "0.0000"
          "additional_expense_key_3" => null
          "additional_expense_value_3" => "0.0000"
          "additional_expense_key_4" => null
          "additional_expense_value_4" => "0.0000"
          "final_total" => "315.0000"
          "expense_category_id" => null
          "expense_for" => null
          "commission_agent" => null
          "document" => null
          "is_direct_sale" => 0
          "is_suspend" => 0
          "exchange_rate" => "1.000"
          "total_amount_recovered" => null
          "transfer_parent_id" => null
          "return_parent_id" => null
          "opening_stock_product_id" => null
          "created_by" => 2
          "prefer_payment_method" => null
          "prefer_payment_account" => null
          "sales_order_ids" => null
          "purchase_order_ids" => null
          "custom_field_1" => null
          "custom_field_2" => null
          "custom_field_3" => null
          "custom_field_4" => null
          "import_batch" => null
          "import_time" => null
          "types_of_service_id" => null
          "packing_charge" => "0.0000"
          "packing_charge_type" => null
          "service_custom_field_1" => null
          "service_custom_field_2" => null
          "service_custom_field_3" => null
          "service_custom_field_4" => null
          "service_custom_field_5" => null
          "service_custom_field_6" => null
          "is_created_from_api" => 0
          "rp_earned" => 0
          "order_addresses" => null
          "is_recurring" => 0
          "recur_interval" => 1.0
          "recur_interval_type" => "days"
          "recur_repetitions" => 0
          "recur_stopped_on" => null
          "recur_parent_id" => null
          "invoice_token" => null
          "pay_term_number" => 60
          "pay_term_type" => "days"
          "selling_price_group_id" => null
          "created_at" => "2021-10-24 06:41:22"
          "updated_at" => "2021-10-24 06:41:22"
        ]
        #original: array:98 [
          "id" => 137
          "business_id" => 1
          "location_id" => 1
          "res_table_id" => null
          "res_waiter_id" => null
          "res_order_status" => null
          "type" => "sell"
          "sub_type" => null
          "status" => "final"
          "sub_status" => null
          "is_quotation" => 0
          "payment_status" => "paid"
          "adjustment_type" => null
          "contact_id" => 1
          "customer_group_id" => null
          "invoice_no" => "000085"
          "ref_no" => ""
          "source" => null
          "subscription_no" => null
          "subscription_repeat_on" => null
          "transaction_date" => "2021-10-23 20:40:00"
          "total_before_tax" => "300.0000"
          "tax_id" => 1
          "tax_amount" => "15.0000"
          "discount_type" => "percentage"
          "discount_amount" => "0.0000"
          "rp_redeemed" => 0
          "rp_redeemed_amount" => "0.0000"
          "shipping_details" => null
          "shipping_address" => null
          "shipping_status" => null
          "delivered_to" => null
          "shipping_charges" => "0.0000"
          "shipping_custom_field_1" => null
          "shipping_custom_field_2" => null
          "shipping_custom_field_3" => null
          "shipping_custom_field_4" => null
          "shipping_custom_field_5" => null
          "additional_notes" => null
          "staff_note" => null
          "is_export" => 0
          "export_custom_fields_info" => null
          "round_off_amount" => "0.0000"
          "additional_expense_key_1" => null
          "additional_expense_value_1" => "0.0000"
          "additional_expense_key_2" => null
          "additional_expense_value_2" => "0.0000"
          "additional_expense_key_3" => null
          "additional_expense_value_3" => "0.0000"
          "additional_expense_key_4" => null
          "additional_expense_value_4" => "0.0000"
          "final_total" => "315.0000"
          "expense_category_id" => null
          "expense_for" => null
          "commission_agent" => null
          "document" => null
          "is_direct_sale" => 0
          "is_suspend" => 0
          "exchange_rate" => "1.000"
          "total_amount_recovered" => null
          "transfer_parent_id" => null
          "return_parent_id" => null
          "opening_stock_product_id" => null
          "created_by" => 2
          "prefer_payment_method" => null
           …33
        ]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      2 => App\Transaction {#2117
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      3 => App\Transaction {#2118
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      4 => App\Transaction {#2119
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      5 => App\Transaction {#2120
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      6 => App\Transaction {#2121
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      7 => App\Transaction {#2122
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      8 => App\Transaction {#2123
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      9 => App\Transaction {#2124
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      10 => App\Transaction {#2125
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      11 => App\Transaction {#2126
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      12 => App\Transaction {#2127
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      13 => App\Transaction {#2128
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      14 => App\Transaction {#2129
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      15 => App\Transaction {#2130
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      16 => App\Transaction {#2131
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      17 => App\Transaction {#2132
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      18 => App\Transaction {#2133
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      19 => App\Transaction {#2134
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      20 => App\Transaction {#2135
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      21 => App\Transaction {#2136
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      22 => App\Transaction {#2137
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      23 => App\Transaction {#2138
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      24 => App\Transaction {#2139
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      25 => App\Transaction {#2140
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      26 => App\Transaction {#2141
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      27 => App\Transaction {#2142
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      28 => App\Transaction {#2143
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      29 => App\Transaction {#2144
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      30 => App\Transaction {#2145
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      31 => App\Transaction {#2146
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      32 => App\Transaction {#2147
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      33 => App\Transaction {#2148
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      34 => App\Transaction {#2149
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      35 => App\Transaction {#2150
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      36 => App\Transaction {#2151
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      37 => App\Transaction {#2152
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      38 => App\Transaction {#2153
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      39 => App\Transaction {#2154
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      40 => App\Transaction {#2155
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      41 => App\Transaction {#2156
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      42 => App\Transaction {#2157
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      43 => App\Transaction {#2158
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      44 => App\Transaction {#2159
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      45 => App\Transaction {#2160
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      46 => App\Transaction {#2161
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      47 => App\Transaction {#2162
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      48 => App\Transaction {#2163
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      49 => App\Transaction {#2164
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      50 => App\Transaction {#2165
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      51 => App\Transaction {#2166
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      52 => App\Transaction {#2167
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      53 => App\Transaction {#2168
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      54 => App\Transaction {#2169
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      55 => App\Transaction {#2170
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      56 => App\Transaction {#2171
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      57 => App\Transaction {#2172
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      58 => App\Transaction {#2173
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      59 => App\Transaction {#2174
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      60 => App\Transaction {#2175
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      61 => App\Transaction {#2176
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      62 => App\Transaction {#2177
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      63 => App\Transaction {#2178
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      64 => App\Transaction {#2179
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      65 => App\Transaction {#2180
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      66 => App\Transaction {#2181
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      67 => App\Transaction {#2182
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      68 => App\Transaction {#2183
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      69 => App\Transaction {#2184
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      70 => App\Transaction {#2185
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      71 => App\Transaction {#2186
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      72 => App\Transaction {#2187
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      73 => App\Transaction {#2188
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      74 => App\Transaction {#2189
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      75 => App\Transaction {#2190
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      76 => App\Transaction {#2191
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      77 => App\Transaction {#2192
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
      78 => App\Transaction {#2193
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
        #attributes: array:98 [ …98]
        #original: array:98 [ …98]
        #changes: []
        #dates: []
        #dateFormat: null
        #appends: []
        #dispatchesEvents: []
        #observables: []
        #relations: []
        #touches: []
        +timestamps: true
        #hidden: []
        #visible: []
        #fillable: []
      }
    ]
  }


// from line 104 
// out of request()->all();
// array:16 [
    // "draw" => "1"
    // "columns" => array:22 [
    //     0 => array:3 [
    //     "data" => "action"
    //     "searchable" => "false"
    //     "orderable" => "false"
    //     ]
    //     1 => array:1 [
    //     "data" => "transaction_date"
    //     ]
    //     2 => array:1 [
    //     "data" => "invoice_no"
    //     ]
    //     3 => array:1 [
    //     "data" => "conatct_name"
    //     ]
    //     4 => array:2 [
    //     "data" => "mobile"
    //     "name" => "contacts.mobile"
    //     ]
    //     5 => array:2 [
    //     "data" => "business_location"
    //     "name" => "bl.name"
    //     ]
    //     6 => array:1 [
    //     "data" => "payment_status"
    //     ]
    //     7 => array:4 [
    //     "data" => "payment_methods"
    //     "name" => null
    //     "searchable" => "false"
    //     "orderable" => "false"
    //     ]
    //     8 => array:1 [
    //     "data" => "final_total"
    //     ]
    //     9 => array:2 [
    //     "data" => "total_paid"
    //     "searchable" => "false"
    //     ]
    //     10 => array:1 [
    //     "data" => "total_remaining"
    //     ]
    //     11 => array:4 [
    //     "data" => "return_due"
    //     "name" => null
    //     "searchable" => "false"
    //     "orderable" => "false"
    //     ]
    //     12 => array:1 [
    //     "data" => "shipping_status"
    //     ]
    //     13 => array:2 [
    //     "data" => "total_items"
    //     "searchable" => "false"
    //     ]
    //     14 => array:2 [
    //     "data" => "types_of_service_name"
    //     "name" => "tos.name"
    //     ]
    //     15 => array:1 [
    //     "data" => "service_custom_field_1"
    //     ]
    //     16 => array:2 [
    //     "data" => "added_by"
    //     "name" => "u.first_name"
    //     ]
    //     17 => array:1 [
    //     "data" => "additional_notes"
    //     ]
    //     18 => array:1 [
    //     "data" => "staff_note"
    //     ]
    //     19 => array:1 [
    //     "data" => "shipping_details"
    //     ]
    //     20 => array:2 [
    //     "data" => "table_name"
    //     "name" => "tables.name"
    //     ]
    //     21 => array:2 [
    //     "data" => "waiter"
    //     "name" => "ss.first_name"
    //     ]
    // ]
    // "order" => array:1 [
    //     0 => array:2 [
    //     "column" => "1"
    //     "dir" => "desc"
    //     ]
    // ]
    // "start" => "0"
    // "length" => "25"
    // "search" => array:1 [
    //     "value" => null
    // ]
    // "start_date" => "2022-01-01"
    // "end_date" => "2022-12-31"
    // "is_direct_sale" => "0"
    // "location_id" => null
    // "customer_id" => null
    // "payment_status" => null
    // "created_by" => null
    // "sales_cmsn_agnt" => null
    // "shipping_status" => null
    // "_" => "1651275451603"
    // ]














