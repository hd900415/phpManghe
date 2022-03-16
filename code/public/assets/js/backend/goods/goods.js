define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'goods/goods/index' + location.search,
                    add_url: 'goods/goods/add',
                    edit_url: 'goods/goods/edit',
                    del_url: 'goods/goods/del',
                    multi_url: 'goods/goods/multi',
                    import_url: 'goods/goods/import',
                    table: 'goods',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'goods_name', title: __('Goods_name'), operate: 'LIKE'},
                        {field: 'tag', title: __('Tag'), searchList: {"normal":__('Tag normal'),"rare":__('Tag rare'),"supreme":__('Tag supreme')}, formatter: Table.api.formatter.normal},
                        {field: 'image', title: __('Image'), operate: false, events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'stock', title: __('Stock'), operate:'BETWEEN'},
                        {field: 'coin_price', title: __('Coin_price'), operate:'BETWEEN'},
                        {field: 'rmb_price', title: __('Rmb_price'), operate: false},
                        {field: 'delivery_fee', title: __('Delivery_fee'), operate: false},
                        {field: 'status', title: __('Status'), searchList: {"online":__('Status online'),"offline":__('Status offline')}, formatter: Table.api.formatter.normal},
                        {field: 'create_time', title: __('Create_time'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'update_time', title: __('Update_time'), addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime,operate: false},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ],
                searchFormVisible: true,
                search:false,
                showToggle: false,
                showColumns: false
            });

            $(Config.tab_default).addClass('active');

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