<?php

//$timeflash = '1614171600'

//DATA AKUN
$useragent = 'user-agent: Mozilla/5.0 (Linux; Android 10; M2003J15SC) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.101 Mobile Safari/537.36';
$xcsrftoken = 'x-csrftoken: TCGpCQVp9CXnLBQoeGYuYMpLEnjWmqiN';
$contentype = 'content-type: application/json';


// DATA FLASH SALE 
// YANG DIBUBAH PERTAMA
// UBAH MULAI DARI HTTPS
$referprduk = "referer: https://shopee.co.id/product/28824240/4571424033/";

// UBAH PERTAMA KEDUA
// COPY SHOPID DAN ITEMID DARI REFER
$flashsalettime = "https://shopee.co.id/api/v2/item/get?itemid=4571424033&shopid=28824240";

// YANG DI UBAH KETIGA 
// SHOPID, ITEMID, MODELID
// JALANKAN SAVE.PHP UNTUK MENDAPATKAN
$dataaddtocart = '{
  "quantity": 1,
  "checkout": true,
  "update_checkout_only": false,
  "donot_add_quantity": false,
  "source": "",
  "client_source": 1,
  "shopid": 28824240,
  "itemid": 4571424033,
  "modelid": 23529511420
}';

// YANG DI UBAH KE EMPAT
// SHOPID, ITEMID, MODELID, PRICE BARANG
$selectedorder = '{
  "selected_shop_order_ids": [
    {
      "shopid": 28824240,
      "item_briefs": [
        {
          "itemid": 4571424033,
          "modelid": 23529511420,
          "item_group_id": null,
          "applied_promotion_id": 1218184872,
          "offerid": null,
          "price": 332500000,
          "quantity": 1,
          "is_add_on_sub_item": null,
          "add_on_deal_id": null,
          "status": 1,
          "cart_item_change_time": 1612620545
        }
      ],
      "shop_vouchers": []
    }
  ],
  "platform_vouchers": [],
  "free_shipping_voucher_info": {
    "free_shipping_voucher_id": 0
  },
  "use_coins": false
}';

// JANGAN LUPA DI UBAH PLACE ORDER 
// HARGA
// TOTAL HARGA 1632500000 332500000
// TOTAL HARGA + 1000
// SHOPID , ITEMID , MODELID
$datacheckout = '{
  "status": 200,
  "headers": {},
  "cart_type": 0,
  "shipping_orders": [
    {
      "selected_logistic_channelid": 80023,
      "cod_fee": 0,
      "order_total": 1632500000,
      "shipping_id": 1,
      "shopee_shipping_discount_id": 246193,
      "selected_logistic_channelid_with_warning": null,
      "shipping_fee_discount": 0,
      "shipping_group_description": "",
      "selected_preferred_delivery_time_option_id": 0,
      "buyer_remark": null,
      "buyer_address_data": {
        "tax_address": "",
        "error_status": "",
        "address_type": 0,
        "addressid": 27179898
      },
      "order_total_without_shipping": 332500000,
      "tax_payable": 0,
      "amount_detail": {
        "BASIC_SHIPPING_FEE": 1300000000,
        "SELLER_ESTIMATED_INSURANCE_FEE": 0,
        "SHOPEE_OR_SELLER_SHIPPING_DISCOUNT": -1300000000,
        "VOUCHER_DISCOUNT": 0,
        "SHIPPING_DISCOUNT_BY_SELLER": 0,
        "SELLER_ESTIMATED_BASIC_SHIPPING_FEE": 0,
        "SHIPPING_DISCOUNT_BY_SHOPEE": 1300000000,
        "INSURANCE_FEE": 0,
        "ITEM_TOTAL": 332500000,
        "TAX_EXEMPTION": 0,
        "shop_promo_only": true,
        "COD_FEE": 0,
        "TAX_FEE": 0,
        "SELLER_ONLY_SHIPPING_DISCOUNT": 0
      },
      "buyer_ic_number": null,
      "fulfillment_info": {
        "fulfillment_flag": 64,
        "fulfillment_source": "",
        "managed_by_sbs": false,
        "order_fulfillment_type": 2,
        "warehouse_address_id": 0
      },
      "voucher_wallet_checking_channel_ids": [
        80014,
        80023
      ],
      "shoporder_indexes": [
        0
      ],
      "shipping_fee": 1300000000,
      "tax_exemption": 0,
      "shipping_group_icon": ""
    }
  ],
  "disabled_checkout_info": {
    "auto_popup": false,
    "description": "",
    "error_infos": []
  },
  "timestamp": 1614146560,
  "checkout_price_data": {
    "shipping_subtotal": 1300000000,
    "shipping_discount_subtotal": 0,
    "shipping_subtotal_before_discount": 1300000000,
    "bundle_deals_discount": null,
    "group_buy_discount": 0,
    "merchandise_subtotal": 332500000,
    "tax_payable": 0,
    "buyer_txn_fee": 0,
    "credit_card_promotion": null,
    "promocode_applied": null,
    "shopee_coins_redeemed": null,
    "total_payable": 1632500000,
    "tax_exemption": 0
  },
  "client_id": 0,
  "promotion_data": {
    "promotion_msg": "",
    "price_discount": 0,
    "can_use_coins": true,
    "voucher_info": {
      "coin_earned": 0,
      "promotionid": 0,
      "discount_percentage": 0,
      "discount_value": 0,
      "voucher_code": null,
      "reward_type": 0,
      "coin_percentage": 0,
      "used_price": 0
    },
    "coin_info": {
      "coin_offset": 7400000,
      "coin_earn": 0,
      "coin_earn_by_voucher": 0,
      "coin_used": 74
    },
    "free_shipping_voucher_info": {
      "free_shipping_voucher_id": 0,
      "disabled_reason": null,
      "free_shipping_voucher_code": ""
    },
    "applied_voucher_code": null,
    "shop_voucher_entrances": [
      {
        "status": false,
        "shopid": 28824240
      }
    ],
    "card_promotion_enabled": false,
    "invalid_message": null,
    "card_promotion_id": null,
    "voucher_code": null,
    "use_coins": false
  },
  "dropshipping_info": {
    "phone_number": "",
    "enabled": false,
    "name": ""
  },
  "selected_payment_channel_data": {
    "channel_id": 8001400,
    "channel_item_option_info": {},
    "version": 2
  },
  "shoporders": [
    {
      "shop": {
        "remark_type": 0,
        "support_ereceipt": false,
        "images": "",
        "is_official_shop": false,
        "cb_option": false,
        "shopid": 28824240,
        "shop_name": "Linda \u0026 Anne"
      },
      "buyer_remark": null,
      "shipping_fee": 1300000000,
      "order_total": 1632500000,
      "shipping_id": 1,
      "buyer_ic_number": null,
      "items": [
        {
          "itemid": 4571424033,
          "is_add_on_sub_item": false,
          "image": "855a9a98a6af95ccc5d1905543eddae6",
          "shopid": 28824240,
          "opc_extra_data": {
            "slash_price_activity_id": 0
          },
          "promotion_id": 1218139271,
          "add_on_deal_id": 0,
          "modelid": 23529511420,
          "offerid": 0,
          "source": "",
          "checkout": true,
          "item_group_id": 0,
          "service_by_shopee_flag": false,
          "none_shippable_full_reason": "",
          "price": 332500000,
          "is_flash_sale": true,
          "categories": [
            {
              "catids": [
                38,
                1143,
                7331
              ]
            }
          ],
          "shippable": true,
          "name": "［Bayar di Tempat］Korean Fashion Bulat Mata Kucing Kacamata Hitam Wanita/Pria Sunglasses",
          "none_shippable_reason": "",
          "is_pre_order": false,
          "stock": 0,
          "model_name": "13-2 #1 Hitam",
          "quantity": 1
        }
      ],
      "selected_preferred_delivery_time_option_id": 0,
      "selected_logistic_channelid": 80023,
      "cod_fee": 0,
      "tax_payable": 0,
      "buyer_address_data": {
        "tax_address": "",
        "error_status": "",
        "address_type": 0,
        "addressid": 27179898
      },
      "shipping_fee_discount": 0,
      "order_total_without_shipping": 332500000,
      "tax_exemption": 0,
      "amount_detail": {
        "BASIC_SHIPPING_FEE": 1300000000,
        "COD_FEE": 0,
        "SHOPEE_OR_SELLER_SHIPPING_DISCOUNT": -1300000000,
        "VOUCHER_DISCOUNT": 0,
        "SHIPPING_DISCOUNT_BY_SELLER": 0,
        "SELLER_ESTIMATED_INSURANCE_FEE": 0,
        "SELLER_ESTIMATED_BASIC_SHIPPING_FEE": 0,
        "SHIPPING_DISCOUNT_BY_SHOPEE": 1300000000,
        "INSURANCE_FEE": 0,
        "ITEM_TOTAL": 332500000,
        "TAX_EXEMPTION": 0,
        "shop_promo_only": true,
        "TAX_FEE": 0,
        "SELLER_ONLY_SHIPPING_DISCOUNT": 0
      },
      "ext_ad_info_mappings": []
    }
  ],
  "can_checkout": true,
  "order_update_info": {},
  "buyer_txn_fee_info": {
    "learn_more_url": "",
    "description": "Besar biaya penanganan adalah Rp 0 dari total transaksi.",
    "title": "Biaya Penanganan"
  }
}';











// DATA REFERAL TIDAK PERLU DI GANTI
$referplace = 'referer: https://shopee.co.id/checkout?state=H8KLCAAAAAAAAAPDnVTDi27DqyAQw70Xw5Zew5h5w5nDscKvVBHDgjBOUDFQHlHCrMKqw7%2FDnsOBGCfCvVJ1V3dzV8KGecKec2bDjCcJcgIfw5hkScOfwpzCmn3DlzVNV1fDhMOfwow1TsKAw7PCpH%2FDu1zCrsKkw49fKTDCtD52bcOXflVEBsKYckw6JV97bHbDjcOhw5Acw5vCikxGwoBaEnbDjX53OB7DjsKnU0XCmBDDlGgqwoApwprCnMOYT3rCulp9HGgqRcO6wpEpD8K5A8K9OhNtCcO%2BwohMBxlmLMO7dcKpwogyV8OpwoPDpD4hdMOAw400woEWICjCvzHCrVN%2Fw7TDqMKoFMOCHcOiDC7CtXLDoD0VLMKwwpQUw5jCo8OYSE9IRcOAOcOjKMOqEsOiaikpYcK2wrDCgFgNCcOSwq5tw5pzd8OuwrDCvgcFPGDDrwLDqgnCgsO0XV3Dr8O2SVtpwq3DlMOXwoVOw7PCkmMdwozDmBlPScK1O8K4wpnCpsOxUGPCg0RlVsO2fw3Dt8OKwoQleMOhfHnDjWAzShMKwqbCjX%2FCucKvIMKbQ8KNfTZjw5LCv0DDkMKjw4EEJMKKw608WsKQPF7CrDPCk1kCSsOFw6jCgXIjwrXDn8OGODpAaMKFw7rDnUR%2Bw4NJwqwFf8OzZsOGQno2KMOEw6%2FCgMO5w5QzEcO7wq0iw4fClUsjS8KwFAvCo3FTw7HCpT3CvcOkw53DvsODwoRHw75OXx0UdXJMc3gyYDEYw4rCrFXDs8KPw4jDlcKPw70Ew5wlwofCjVPCucKKwrxBw6t1RMKww6DCrMKTOmR7MMO6KsKiwqbCg2LDvH0wwo9sw43Ci1oGVnTDhybCnMK5w7DDnELCrsOkw6LDj0LCpT0uw53Cl8KzWMKVEMOOw5jDp8Oawq0Rw7ZmNFAdwqchwpFYw5ZeLzpvwow1wpvCisKWW8O2w6vCqzBrTsO6w6Aiw7wHP2F5w7BQHgHCjzTDtsK3w7pSwrBiwonColPDnsK9f8O%2Bw49mLMORwqI6w7Acw783wrHCvsKGwqPCsAUAAA%3D%3D';
$refernextcart = 'referer: https://shopee.co.id/cart';
$linkcart = 'https://shopee.co.id/api/v2/cart/add_to_cart';
$linkcheckout = 'https://shopee.co.id/api/v4/cart/checkout';
$linkplaceorder = 'https://shopee.co.id/api/v2/checkout/place_order';