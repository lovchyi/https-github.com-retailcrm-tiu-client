<?php
$config = array(
    /**
     * xml link (like https://my.prom.ua/cabinet/export_orders/xml/1704911?hash_tag=246d71897559a373998f55245e5a6e21
     * can be taken here: https://my.prom.ua/cabinet/export_orders
     */
    'prom_xml_url' => 'https://my.prom.ua/cabinet/export_orders/xml/1704911?hash_tag=246d71897559a373998f55245e5a6e21',

    'retailcrm_url' => 'https://salmon.retailcrm.ru',
    'retailcrm_apikey' => 'Ax696ALyGLRwXTZnYAdaVqZwD5zRE8MR',
    'retailcrm_order_chunk_size' => 50,

    /**
     * upload orders only from a certain date (Y-m-d H:i:s)
     */
    'date_from' => '',

    'order_prefix' => '', // optional
    'set_external_ids' => false, // set externalId field
    'order_method'  => 'shopping-cart',

    /**
     * delivery mapping (prom => CRM)
     * https://my.prom.ua/cms/settings/delivery
     */
    'delivery' => array(
        'Нова Пошта' => 'nova-poshta',
        'Самовывоз' => '2'
    ),

    /**
     * payment types mapping (prom => CRM)
     * https://my.prom.ua/cms/settings/payment
     */
    'payment' => array(
        'Наличными' => 'cash',
        'Наложенный платеж' => 'nalozhka'
    ),

    /**
     * order statuses (CRM => prom)
     * https://my.prom.ua/cms/order
     */
    'order_statuses' => array(
        'new' => 'opened',
        'processing' => 'accepted',
        'complete' => 'closed',
        'cancel-other' => 'declined',
    ),

    /**
     * email address for notification
     */
    'support_email' => 'info@salomon.com.ua',
    'support_email_subject' => 'Integration problem'
);
