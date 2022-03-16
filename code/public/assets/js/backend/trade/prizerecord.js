define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'trade/prizerecord/index' + location.search,
                    add_url: 'trade/prizerecord/add',
                    edit_url: 'trade/prizerecord/edit',
                    del_url: 'trade/prizerecord/del',
                    multi_url: 'trade/prizerecord/multi',
                    import_url: 'trade/prizerecord/import',
                    table: 'prize_record',
                }
            });

            var table = $("#table");

            table.on('load-success.bs.table',function(e){
                var tabdom = $('.panel-heading ul[data-field] li.active a[data-toggle="tab"]');
                $(tabdom.find('small')).text('');
                var tabvalue = tabdom.data('value');
                switch (tabvalue) {
                    case '':
                        table.bootstrapTable('showColumn', 'exchange_time');
                        table.bootstrapTable('hideColumn', 'delivery_time');
                        table.bootstrapTable('hideColumn', 'received_time');
                        table.bootstrapTable('hideColumn', 'exchange_time');
                        break;
                    case 'bag':
                        table.bootstrapTable('hideColumn', 'exchange_time');
                        table.bootstrapTable('hideColumn', 'delivery_time');
                        table.bootstrapTable('hideColumn', 'received_time');
                        break;
                    case 'exchange':
                        table.bootstrapTable('showColumn', 'exchange_time');
                        table.bootstrapTable('hideColumn', 'delivery_time');
                        table.bootstrapTable('hideColumn', 'received_time');
                        break;
                    case 'delivery':
                        table.bootstrapTable('hideColumn', 'exchange_time');
                        table.bootstrapTable('showColumn', 'delivery_time');
                        table.bootstrapTable('hideColumn', 'received_time');
                        break;
                    case 'received':
                        table.bootstrapTable('hideColumn', 'exchange_time');
                        table.bootstrapTable('hideColumn', 'delivery_time');
                        table.bootstrapTable('showColumn', 'received_time');
                        break;
                }
            });

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'prize.id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'prize.id', title: __('ID'), visible: false},
                        {field: 'id', title: __('ID'), operate: false},
                        {field: 'out_trade_no', title: __('Out_trade_no'), operate: 'LIKE'},
                        {field: 'user.nickname', title: __('Nickname'), operate: 'LIKE', visible:false},
                        {field: 'user.mobile', title: __('Mobile'), operate: 'LIKE', visible:false},
                        {field: 'nickname', title: __('Nickname'), operate:false},
                        {field: 'avatar', title: __('Avatar'), operate: false, events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'mobile', title: __('Mobile'), operate:false},
                        {field: 'goods_name', title: __('Goods_name'), operate: 'LIKE'},
                        {field: 'goods_image', title: __('Goods_image'), operate: false, events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'goods_coin_price', title: __('Goods_coin_price'), operate: false},
                        {field: 'box_coin_price', title: __('Box_coin_price'), operate: false},
                        {field: 'goods_rmb_price', title: __('Goods_rmb_price'), operate: false},
                        {field: 'box_rmb_price', title: __('Box_rmb_price'), operate: false},
                        {field: 'prize.status', title: __('Status'), searchList: {"bag":__('Status bag'),"exchange":__('Status exchange'),"delivery":__('Status delivery'),"received":__('Status received')}, formatter: Table.api.formatter.status,visible: false},
                        {field: 'status', title: __('Status'), searchList: {"bag":__('Status bag'),"exchange":__('Status exchange'),"delivery":__('Status delivery'),"received":__('Status received')}, formatter: Table.api.formatter.status, operate: false},
                        {field: 'exchange_time', title: __('Exchange_time'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'delivery_time', title: __('Delivery_time'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'create_time', title: __('Create_time'), operate:false, addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'received_time', title: __('Received_time'), operate:false, addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        // {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
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