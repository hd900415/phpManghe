define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'trade/rechargeorder/index' + location.search,
                    add_url: 'trade/rechargeorder/add',
                    edit_url: 'trade/rechargeorder/edit',
                    del_url: 'trade/rechargeorder/del',
                    multi_url: 'trade/rechargeorder/multi',
                    import_url: 'trade/rechargeorder/import',
                    table: 'recharge_order',
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
                        break;
                    case 'unpay':
                        table.bootstrapTable('hideColumn', 'pay_method');
                        table.bootstrapTable('hideColumn', 'out_trade_no');
                        table.bootstrapTable('hideColumn', 'pay_time');
                        sidebarNUmber -= Config.sidebar_number.unpay;
                        break;
                    case 'paid':
                        table.bootstrapTable('showColumn', 'pay_method');
                        table.bootstrapTable('showColumn', 'out_trade_no');
                        table.bootstrapTable('showColumn', 'pay_time');
                        sidebarNUmber -= Config.sidebar_number.refund;
                        break;
                }
                Backend.api.sidebar({
                    'trade/rechargeorder': [sidebarNUmber,'yellow'],
                });
            });

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'user.nickname', title: __('User nickname'), visible:false, operate: "LIKE"},
                        {field: 'nickname', title: __('User nickname'), operate: false},
                        {field: 'avatar', title: __('User avatar'), operate: false, events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'coin_amount', title: __('Coin_amount')},
                        {field: 'rmb_amount', title: __('Rmb_amount'), operate:'BETWEEN'},
                        {field: 'pay_method', title: __('Pay_method'), searchList: {"wechat":__('Pay_method wechat'),"alipay":__('Pay_method alipay')}, formatter: Table.api.formatter.normal},
                        {field: 'pay_rmb', title: __('Pay_rmb'), operate:'BETWEEN'},
                        {field: 'out_trade_no', title: __('Out_trade_no'), operate: 'LIKE'},
                        {field: 'pay_time', title: __('Pay_time'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'order.status', title: __('Status'), searchList: {"unpay":__('Status unpay'),"paid":__('Status paid')}, formatter: Table.api.formatter.status, visible: false},
                        {field: 'status', title: __('Status'), searchList: {"unpay":__('Status unpay'),"paid":__('Status paid')}, formatter: Table.api.formatter.status, operate: false},
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