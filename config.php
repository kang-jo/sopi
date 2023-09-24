<?php

$timeflash = '1614171599';

$useragent = 'user-agent: Mozilla/5.0 (Linux; Android 10; M2003J15SC) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.101 Mobile Safari/537.36';
$xcsrftoken = 'x-csrftoken: TCGpCQVp9CXnLBQoeGYuYMpLEnjWmqiN';
$contentype = 'content-type: application/json';

$referprduk = "referer: https://shopee.co.id/product/85791816/2053649078/";

$flashsalettime = "https://shopee.co.id/api/v2/item/get?itemid=2053649078&shopid=85791816";

$dataaddtocart = '{
  "quantity": 1,
  "checkout": true,
  "update_checkout_only": false,
  "donot_add_quantity": false,
  "source": "",
  "client_source": 1,
  "shopid": 85791816,
  "itemid": 2053649078,
  "modelid": 3681204545
}';

$selectedorder = '{
  "selected_shop_order_ids": [
    {
      "shopid": 85791816,
      "item_briefs": [
        {
          "itemid": 2053649078,
          "modelid": 3681204545,
          "item_group_id": null,
          "applied_promotion_id": 1218184872,
          "offerid": null,
          "price": 3299900000,
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

$datacheckout = '{
  "status": 200,
  "headers": {},
  "cart_type": 0,
  "shipping_orders": [
    {
      "selected_logistic_channelid": 80005,
      "cod_fee": 0,
      "order_total": 5299900000,
      "shipping_id": 1,
      "shopee_shipping_discount_id": 0,
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
      "order_total_without_shipping": 3299900000,
      "tax_payable": 0,
      "amount_detail": {
        "BASIC_SHIPPING_FEE": 2000000000,
        "SELLER_ESTIMATED_INSURANCE_FEE": 0,
        "SHOPEE_OR_SELLER_SHIPPING_DISCOUNT": 0,
        "VOUCHER_DISCOUNT": 0,
        "SHIPPING_DISCOUNT_BY_SELLER": 0,
        "SELLER_ESTIMATED_BASIC_SHIPPING_FEE": 0,
        "SHIPPING_DISCOUNT_BY_SHOPEE": 0,
        "INSURANCE_FEE": 0,
        "ITEM_TOTAL": 3299900000,
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
        80014
      ],
      "shoporder_indexes": [
        0
      ],
      "shipping_fee": 2000000000,
      "tax_exemption": 0,
      "shipping_group_icon": ""
    }
  ],
  "disabled_checkout_info": {
    "auto_popup": false,
    "description": "",
    "error_infos": []
  },
  "timestamp": 1614162190,
  "checkout_price_data": {
    "shipping_subtotal": 2000000000,
    "shipping_discount_subtotal": 0,
    "shipping_subtotal_before_discount": 2000000000,
    "bundle_deals_discount": null,
    "group_buy_discount": 0,
    "merchandise_subtotal": 3299900000,
    "tax_payable": 0,
    "buyer_txn_fee": 100000000,
    "credit_card_promotion": null,
    "promocode_applied": null,
    "shopee_coins_redeemed": null,
    "total_payable": 5399900000,
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
      "coin_earn": 299,
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
        "status": true,
        "shopid": 85791816
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
    "channel_id": 8005200,
    "channel_item_option_info": {
      "option_info": "89052001"
    },
    "version": 2
  },
  "shoporders": [
    {
      "shop": {
        "remark_type": 0,
        "support_ereceipt": false,
        "images": "",
        "is_official_shop": true,
        "cb_option": false,
        "shopid": 85791816,
        "shop_name": "Her Jewellery Official Shop"
      },
      "buyer_remark": null,
      "shipping_fee": 2000000000,
      "order_total": 5299900000,
      "shipping_id": 1,
      "buyer_ic_number": null,
      "items": [
        {
          "itemid": 2053649078,
          "is_add_on_sub_item": false,
          "image": "2660aee8f1f401e2b25cf1e03b789077",
          "shopid": 85791816,
          "opc_extra_data": {
            "slash_price_activity_id": 0
          },
          "promotion_id": 1219843395,
          "add_on_deal_id": 0,
          "modelid": 3681204545,
          "offerid": 0,
          "source": "",
          "checkout": true,
          "item_group_id": 0,
          "service_by_shopee_flag": false,
          "none_shippable_full_reason": "",
          "price": 3299900000,
          "is_flash_sale": false,
          "categories": [
            {
              "catids": [
                38,
                1141,
                7327
              ]
            }
          ],
          "shippable": true,
          "name": "Minnie Earrings embellished with Crystals from Swarovski® - Anting Minnie Lapis Emas Her Jewellery",
          "none_shippable_reason": "",
          "is_pre_order": false,
          "stock": 0,
          "model_name": "White Gold",
          "quantity": 1
        }
      ],
      "selected_preferred_delivery_time_option_id": 0,
      "selected_logistic_channelid": 80005,
      "cod_fee": 0,
      "tax_payable": 0,
      "buyer_address_data": {
        "tax_address": "",
        "error_status": "",
        "address_type": 0,
        "addressid": 27179898
      },
      "shipping_fee_discount": 0,
      "order_total_without_shipping": 3299900000,
      "tax_exemption": 0,
      "amount_detail": {
        "BASIC_SHIPPING_FEE": 2000000000,
        "COD_FEE": 0,
        "SHOPEE_OR_SELLER_SHIPPING_DISCOUNT": 0,
        "VOUCHER_DISCOUNT": 0,
        "SHIPPING_DISCOUNT_BY_SELLER": 0,
        "SELLER_ESTIMATED_INSURANCE_FEE": 0,
        "SELLER_ESTIMATED_BASIC_SHIPPING_FEE": 0,
        "SHIPPING_DISCOUNT_BY_SHOPEE": 0,
        "INSURANCE_FEE": 0,
        "ITEM_TOTAL": 3299900000,
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
    "learn_more_url": "https://shopee.co.id/events3/code/634289435/",
    "description": "Besar biaya penanganan adalah Rp 1.000 dari total transaksi.",
    "title": "Biaya Penanganan"
  }
}';

$referplace = 'referer: https://shopee.co.id/checkout?state=H8KLCAAAAAAAAAPDnVTDi27DqyAQw70Xw5Zew5h5w5nDscKvVBHDgjBOUDFQHlHCrMKqw7%2FDnsOBGCfCvVJ1V3dzV8KGecKec2bDjCcJcgIfw5hkScOfwpzCmn3DlzVNV1fDhMOfwow1TsKAw7PCpH%2FDu1zCrsKkw49fKTDCtD52bcOXflVEBsKYckw6JV97bHbDjcOhw5Acw5vCikxGwoBaEnbDjX53OB7DjsKnU0XCmBDDlGgqwoApwprCnMOYT3rCulp9HGgqRcO6wpEpD8K5A8K9OhNtCcO%2BwohMBxlmLMO7dcKpwogyV8OpwoPDpD4hdMOAw400woEWICjCvzHCrVN%2Fw7TDqMKoFMOCHcOiDC7CtXLDoD0VLMKwwpQUw5jCo8OYSE9IRcOAOcOjKMOqEsOiaikpYcK2wrDCgFgNCcOSwq5tw5pzd8OuwrDCvgcFPGDDrwLDqgnCgsO0XV3Dr8O2SVtpwq3DlMOXwoVOw7PCkmMdwozDmBlPScK1O8K4wpnCpsOxUGPCg0RlVsO2fw3Dt8OKwoQleMOhfHnDjWAzShMKwqbCjX%2FCucKvIMKbQ8KNfTZjw5LCv0DDkMKjw4EEJMKKw608WsKQPF7CrDPCk1kCSsOFw6jCgXIjwrXDn8OGODpAaMKFw7rDnUR%2Bw4NJwqwFf8OzZsOGQno2KMOEw6%2FCgMO5w5QzEcO7wq0iw4fClUsjS8KwFAvCo3FTw7HCpT3CvcOkw53DvsODwoRHw75OXx0UdXJMc3gyYDEYw4rCrFXDs8KPw4jDlcKPw70Ew5wlwofCjVPCucKKwrxBw6t1RMKww6DCrMKTOmR7MMO6KsKiwqbCg2LDvH0wwo9sw43Ci1oGVnTDhybCnMK5w7DDnELCrsOkw6LDj0LCpT0uw53Cl8KzWMKVEMOOw5jDp8Oawq0Rw7ZmNFAdwqchwpFYw5ZeLzpvwow1wpvCisKWW8O2w6vCqzBrTsO6w6Aiw7wHP2F5w7BQHgHCjzTDtsK3w7pSwrBiwonColPDnsK9f8O%2Bw49mLMORwqI6w7Acw783wrHCvsKGwqPCsAUAAA%3D%3D';
$refernextcart = 'referer: https://shopee.co.id/cart';
$linkcart = 'https://shopee.co.id/api/v2/cart/add_to_cart';
$linkcheckout = 'https://shopee.co.id/api/v4/cart/checkout';
$linkplaceorder = 'https://shopee.co.id/api/v2/checkout/place_order';
