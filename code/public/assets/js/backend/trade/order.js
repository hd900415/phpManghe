define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'trade/order/index' + location.search,
                    add_url: 'trade/order/add',
                    edit_url: 'trade/order/edit',
                    del_url: 'trade/order/del',
                    multi_url: 'trade/order/multi',
                    import_url: 'trade/order/import',
                    table: 'order',
                }
            });

            var table = $("#table");
            var sidebarNUmber = Config.sidebar_number.all;

            table.on('load-success.bs.table',function(e, data){
                var tabdom = $('.panel-heading ul[data-field] li.active a[data-toggle="tab"]');
                $('#money').text(data.totalmoney);
                $(tabdom.find('small')).text('');
                var tabvalue = tabdom.data('value');
                switch (tabvalue) {
                    case '':
                        table.bootstrapTable('showColumn', 'pay_method');
                        table.bootstrapTable('showColumn', 'out_trade_no');
                        table.bootstrapTable('hideColumn', 'pay_time');
                        break;
                    case 'unpay':
                        table.bootstrapTable('hideColumn', 'pay_method');
                        table.bootstrapTable('hideColumn', 'out_trade_no');
                        table.bootstrapTable('hideColumn', 'pay_time');
                        sidebarNUmber -= Config.sidebar_number.unpay;
                        break;
                    case 'used':
                        table.bootstrapTable('showColumn', 'pay_method');
                        table.bootstrapTable('showColumn', 'out_trade_no');
                        table.bootstrapTable('showColumn', 'pay_time');
                        sidebarNUmber -= Config.sidebar_number.used;
                        break;
                    case 'unused':
                        table.bootstrapTable('showColumn', 'pay_method');
                        table.bootstrapTable('showColumn', 'out_trade_no');
                        table.bootstrapTable('showColumn', 'pay_time');
                        sidebarNUmber -= Config.sidebar_number.unused;
                        break;
                    case 'refund':
                        table.bootstrapTable('showColumn', 'pay_method');
                        table.bootstrapTable('showColumn', 'out_trade_no');
                        table.bootstrapTable('showColumn', 'pay_time');
                        sidebarNUmber -= Config.sidebar_number.refund;
                        break;
                }
                Backend.api.sidebar({
                    'trade/order': [sidebarNUmber,'yellow'],
                });
            });


            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'order.id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'box_name', title: __('Box_name'), operate: 'LIKE'},
                        {field: 'image', title: __('Image'), operate: false, events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'rmb_price', title: __('Rmb_price'), operate:'BETWEEN'},
                        {field: 'num', title: __('Num')},
                        {field: 'rmb_amount', title: __('Rmb_amount'), operate:'BETWEEN'},
                        {field: 'user.nickname', title: __('User nickname'), visible:false, operate: "LIKE"},
                        {field: 'nickname', title: __('User nickname'), operate: false},
                        {field: 'avatar', title: __('User avatar'), operate: false, events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'pay_method', title: __('Pay_method'), searchList: {"coin":__('Pay_method coin'),"wechat":__('Pay_method wechat'),"alipay":__('Pay_method alipay')}, formatter: Table.api.formatter.normal},
                        {field: 'out_trade_no', title: __('Out_trade_no'), operate: 'LIKE'},
                        {field: 'pay_time', title: __('Pay_time'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'order.status', title: __('Status'), searchList: {"used":__('Status used'),"refund":__('Status refund'),"unused":__('Status unused')}, formatter: Table.api.formatter.status, visible: false},
                        {field: 'status', title: __('Status'), searchList: {"unpay":__('Status unpay'),"used":__('Status used'),"refund":__('Status refund'),"unused":__('Status unused')}, formatter: Table.api.formatter.status, operate: false},
                        {
                            field: 'buttons',
                            title: __('订单详情'),
                            table: table,
                            events: Table.api.events.operate,
                            buttons: [
                                {
                                    name: 'show',
                                    text: __('订单详情'),
                                    classname: 'btn btn-xs btn-info btn-dialog',
                                    icon: 'fa fa-list',
                                    url: 'trade/order/edit?ids={id}',
                                    extend: "data-area='[\"60%\",\"90%\"]'"
                                }
                            ],
                            operate: false,
                            formatter: Table.api.formatter.buttons
                        },
                        {field: 'create_time', title: __('Create_time'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
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