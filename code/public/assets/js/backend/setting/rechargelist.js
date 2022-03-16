define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'setting/rechargelist/index' + location.search,
                    add_url: 'setting/rechargelist/add',
                    edit_url: 'setting/rechargelist/edit',
                    del_url: 'setting/rechargelist/del',
                    multi_url: 'setting/rechargelist/multi',
                    import_url: 'setting/rechargelist/import',
                    table: 'recharge_list',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'weigh',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'coin', title: __('Coin'), operate:'BETWEEN'},
                        {field: 'rmb', title: __('Rmb'), operate:'BETWEEN'},
                        {field: 'weigh', title: __('Weigh'), operate: false},
                        {field: 'update_time', title: __('Update_time'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
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
            $('#c-coin').on('change',function () {
                var coin = $(this).val();
                $('#c-rmb').val((coin/Config.one_rmb_to_coin).toFixed(2,2));
            });
            Controller.api.bindevent();
        },
        edit: function () {
            $('#c-coin').on('change',function () {
                var coin = $(this).val();
                $('#c-rmb').val((coin/Config.one_rmb_to_coin).toFixed(2,2));
            });
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