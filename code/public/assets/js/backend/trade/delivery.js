define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'trade/delivery/index' + location.search,
                    add_url: 'trade/delivery/add',
                    edit_url: 'trade/delivery/edit',
                    del_url: 'trade/delivery/del',
                    multi_url: 'trade/delivery/multi',
                    import_url: 'trade/delivery/import',
                    table: 'delivery_order',
                }
            });

            var sidebarNUmber = Config.sidebar_number.all;
            var table = $("#table");

            table.on('load-success.bs.table',function(e){
                var tabdom = $('.panel-heading ul[data-field] li.active a[data-toggle="tab"]');
                $(tabdom.find('small')).text('');
                var tabvalue = tabdom.data('value');
                switch (tabvalue) {
                    case '':
                        table.bootstrapTable('showColumn', 'out_trade_no');
                        table.bootstrapTable('showColumn', 'delivery_order_no');
                        table.bootstrapTable('showColumn', 'prize_id');
                        table.bootstrapTable('showColumn', 'goods_name');
                        table.bootstrapTable('showColumn', 'goods_image');
                        table.bootstrapTable('showColumn', 'nickname');
                        table.bootstrapTable('showColumn', 'avatar');
                        table.bootstrapTable('showColumn', 'username');
                        table.bootstrapTable('showColumn', 'mobile');
                        table.bootstrapTable('showColumn', 'address');
                        table.bootstrapTable('showColumn', 'status');
                        table.bootstrapTable('showColumn', 'post_name');
                        table.bootstrapTable('showColumn', 'delivery_number');
                        table.bootstrapTable('showColumn', 'create_time');
                        table.bootstrapTable('showColumn', 'delivery_time');
                        table.bootstrapTable('showColumn', 'receive_time');
                        table.bootstrapTable('showColumn', 'delivery');


                        // table.bootstrapTable('hideColumn', 'out_trade_no');
                        // table.bootstrapTable('hideColumn', 'delivery_order_no');
                        // table.bootstrapTable('hideColumn', 'prize_id');
                        // table.bootstrapTable('hideColumn', 'goods_name');
                        // table.bootstrapTable('hideColumn', 'goods_image');
                        table.bootstrapTable('hideColumn', 'nickname');
                        table.bootstrapTable('hideColumn', 'avatar');
                        // table.bootstrapTable('hideColumn', 'username');
                        // table.bootstrapTable('hideColumn', 'mobile');
                        // table.bootstrapTable('hideColumn', 'address');
                        // table.bootstrapTable('hideColumn', 'status');
                        table.bootstrapTable('hideColumn', 'post_name');
                        table.bootstrapTable('hideColumn', 'delivery_number');
                        table.bootstrapTable('hideColumn', 'create_time');
                        table.bootstrapTable('hideColumn', 'delivery_time');
                        table.bootstrapTable('hideColumn', 'receive_time');
                        table.bootstrapTable('hideColumn', 'delivery');
                        break;
                    case 'undelivered': // 待发货
                        table.bootstrapTable('showColumn', 'out_trade_no');
                        table.bootstrapTable('showColumn', 'delivery_order_no');
                        table.bootstrapTable('showColumn', 'prize_id');
                        table.bootstrapTable('showColumn', 'goods_name');
                        table.bootstrapTable('showColumn', 'goods_image');
                        table.bootstrapTable('showColumn', 'nickname');
                        table.bootstrapTable('showColumn', 'avatar');
                        table.bootstrapTable('showColumn', 'username');
                        table.bootstrapTable('showColumn', 'mobile');
                        table.bootstrapTable('showColumn', 'address');
                        table.bootstrapTable('showColumn', 'status');
                        table.bootstrapTable('showColumn', 'post_name');
                        table.bootstrapTable('showColumn', 'delivery_number');
                        table.bootstrapTable('showColumn', 'create_time');
                        table.bootstrapTable('showColumn', 'delivery_time');
                        table.bootstrapTable('showColumn', 'receive_time');
                        table.bootstrapTable('showColumn', 'delivery');


                        // table.bootstrapTable('hideColumn', 'out_trade_no');
                        table.bootstrapTable('hideColumn', 'delivery_order_no');
                        // table.bootstrapTable('hideColumn', 'prize_id');
                        // table.bootstrapTable('hideColumn', 'goods_name');
                        // table.bootstrapTable('hideColumn', 'goods_image');
                        // table.bootstrapTable('hideColumn', 'nickname');
                        // table.bootstrapTable('hideColumn', 'avatar');
                        // table.bootstrapTable('hideColumn', 'username');
                        // table.bootstrapTable('hideColumn', 'mobile');
                        // table.bootstrapTable('hideColumn', 'address');
                        // table.bootstrapTable('hideColumn', 'status');
                        table.bootstrapTable('hideColumn', 'post_name');
                        table.bootstrapTable('hideColumn', 'delivery_number');
                        // table.bootstrapTable('hideColumn', 'create_time');
                        table.bootstrapTable('hideColumn', 'delivery_time');
                        table.bootstrapTable('hideColumn', 'receive_time');
                        // table.bootstrapTable('hideColumn', 'delivery');

                        sidebarNUmber -= Config.sidebar_number.undelivered;
                        break;
                    case 'unreceived':
                        table.bootstrapTable('showColumn', 'out_trade_no');
                        table.bootstrapTable('showColumn', 'delivery_order_no');
                        table.bootstrapTable('showColumn', 'prize_id');
                        table.bootstrapTable('showColumn', 'goods_name');
                        table.bootstrapTable('showColumn', 'goods_image');
                        table.bootstrapTable('showColumn', 'nickname');
                        table.bootstrapTable('showColumn', 'avatar');
                        table.bootstrapTable('showColumn', 'username');
                        table.bootstrapTable('showColumn', 'mobile');
                        table.bootstrapTable('showColumn', 'address');
                        table.bootstrapTable('showColumn', 'status');
                        table.bootstrapTable('showColumn', 'post_name');
                        table.bootstrapTable('showColumn', 'delivery_number');
                        table.bootstrapTable('showColumn', 'create_time');
                        table.bootstrapTable('showColumn', 'delivery_time');
                        table.bootstrapTable('showColumn', 'receive_time');
                        table.bootstrapTable('showColumn', 'delivery');


                        // table.bootstrapTable('hideColumn', 'out_trade_no');
                        // table.bootstrapTable('hideColumn', 'delivery_order_no');
                        // table.bootstrapTable('hideColumn', 'prize_id');
                        // table.bootstrapTable('hideColumn', 'goods_name');
                        // table.bootstrapTable('hideColumn', 'goods_image');
                        // table.bootstrapTable('hideColumn', 'nickname');
                        // table.bootstrapTable('hideColumn', 'avatar');
                        // table.bootstrapTable('hideColumn', 'username');
                        // table.bootstrapTable('hideColumn', 'mobile');
                        table.bootstrapTable('hideColumn', 'address');
                        // table.bootstrapTable('hideColumn', 'status');
                        // table.bootstrapTable('hideColumn', 'post_name');
                        // table.bootstrapTable('hideColumn', 'delivery_number');
                        table.bootstrapTable('hideColumn', 'create_time');
                        // table.bootstrapTable('hideColumn', 'delivery_time');
                        table.bootstrapTable('hideColumn', 'receive_time');
                        table.bootstrapTable('hideColumn', 'delivery');

                        sidebarNUmber -= Config.sidebar_number.unreceived;
                        break;
                    case 'finished':
                        table.bootstrapTable('showColumn', 'out_trade_no');
                        table.bootstrapTable('showColumn', 'delivery_order_no');
                        table.bootstrapTable('showColumn', 'prize_id');
                        table.bootstrapTable('showColumn', 'goods_name');
                        table.bootstrapTable('showColumn', 'goods_image');
                        table.bootstrapTable('showColumn', 'nickname');
                        table.bootstrapTable('showColumn', 'avatar');
                        table.bootstrapTable('showColumn', 'username');
                        table.bootstrapTable('showColumn', 'mobile');
                        table.bootstrapTable('showColumn', 'address');
                        table.bootstrapTable('showColumn', 'status');
                        table.bootstrapTable('showColumn', 'post_name');
                        table.bootstrapTable('showColumn', 'delivery_number');
                        table.bootstrapTable('showColumn', 'create_time');
                        table.bootstrapTable('showColumn', 'delivery_time');
                        table.bootstrapTable('showColumn', 'receive_time');
                        table.bootstrapTable('showColumn', 'delivery');


                        // table.bootstrapTable('hideColumn', 'out_trade_no');
                        // table.bootstrapTable('hideColumn', 'delivery_order_no');
                        // table.bootstrapTable('hideColumn', 'prize_id');
                        // table.bootstrapTable('hideColumn', 'goods_name');
                        // table.bootstrapTable('hideColumn', 'goods_image');
                        // table.bootstrapTable('hideColumn', 'nickname');
                        // table.bootstrapTable('hideColumn', 'avatar');
                        // table.bootstrapTable('hideColumn', 'username');
                        // table.bootstrapTable('hideColumn', 'mobile');
                        table.bootstrapTable('hideColumn', 'address');
                        // table.bootstrapTable('hideColumn', 'status');
                        table.bootstrapTable('hideColumn', 'post_name');
                        table.bootstrapTable('hideColumn', 'delivery_number');
                        table.bootstrapTable('hideColumn', 'create_time');
                        table.bootstrapTable('hideColumn', 'delivery_time');
                        // table.bootstrapTable('hideColumn', 'receive_time');
                        table.bootstrapTable('hideColumn', 'delivery');

                        sidebarNUmber -= Config.sidebar_number.finished;
                        break;
                }
                Backend.api.sidebar({
                    'trade/delivery': [sidebarNUmber,'yellow'],
                });
            });

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'delivery.id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'out_trade_no', title: __('Out_trade_no'), operate: 'LIKE'},
                        {field: 'delivery_order_no', title: __('Delivery_order_no'), operate: 'LIKE'},
                        {field: 'prize_id', title: __('Prize_id')},
                        {field: 'goods_name', title: __('Goods_name'), operate: 'LIKE'},
                        {field: 'goods_image', title: __('Goods_image'), operate: false, events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'user.nickname', title: __('Nickname'), operate: 'LIKE', visible: false},
                        {field: 'nickname', title: __('Nickname'), operate: false},
                        {field: 'avatar', title: __('Avatar'), operate: false, events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'user.username', title: __('Username'), operate: 'LIKE', visible: false},
                        {field: 'username', title: __('Username'), operate: false},
                        {field: 'user.mobile', title: __('Mobile'), visible: false, operate: 'LIKE'},
                        {field: 'mobile', title: __('Mobile'), operate: false},
                        {field: 'address', title: __('Address'), operate: 'LIKE'},
                        {field: 'delivery.status', title: __('Status'), searchList: {"undelivered":__('Status undelivered'),"unreceived":__('Status unreceived'),"finished":__('Status finished')}, formatter: Table.api.formatter.status, visible: false},
                        {field: 'status', title: __('Status'), searchList: {"undelivered":__('Status undelivered'),"unreceived":__('Status unreceived'),"finished":__('Status finished')}, formatter: Table.api.formatter.status,operate: false},
                        {field: 'post_name', title: __('Post_name'), operate: 'LIKE'},
                        {field: 'delivery_number', title: __('Delivery_number'), operate: 'LIKE'},
                        {field: 'create_time', title: __('Create_time'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'delivery_time', title: __('Delivery_time'), operate:false, addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'receive_time', title: __('Receive_time'), operate:false, addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {
                            field: 'delivery',
                            title: __('发货'),
                            table: table,
                            events: Table.api.events.operate,
                            buttons: [
                                {
                                    name: 'send',
                                    text: __('发货'),
                                    classname: 'btn btn-xs btn-info btn-dialog',
                                    icon: 'fa fa-truck fa-fw',
                                    url: 'trade/delivery/edit?ids={id}',
                                    extend: "data-area='[\"60%\",\"90%\"]'"
                                }
                            ],
                            operate: false,
                            formatter: Table.api.formatter.buttons
                        },
                    ]
                ],
                searchFormVisible: true,
                search:false,
                showToggle: false,
                showColumns: false
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});