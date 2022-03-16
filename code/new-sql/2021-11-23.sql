alter table box_setting add column `send_coin` int(11) default 0 comment '注册送n金币';


alter table box_coin_record change type `type` enum('pay_box','recharge','from_balance','refund','pay_delivery','retail','box_exchange','register') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '变更类型:pay_box=支付盲盒,recharge=充值,from_balance=余额转入,refund=库存不足，支付返回,pay_delivery=支付运费,retail=分销佣金,box_exchange=回收盲盒,register=注册';