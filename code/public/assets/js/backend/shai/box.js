define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'shai/box/index' + location.search,
                    add_url: 'shai/box/add',
                    edit_url: 'shai/box/edit',
                    del_url: 'shai/box/del',
                    multi_url: 'shai/box/multi',
                    import_url: 'shai/box/import',
                    table: 'shai',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'box.id',
                columns: [
                    [
                        {checkbox: true},
                   
                        {field: 'box_mc', title: __('Box_mc'), operate: 'LIKE'},
                        {field: 'box_tx', title: __('Box_tx'), operate: false, events: Table.api.events.image, formatter: Table.api.formatter.images},
                       {field: 'box_zw', title: __('Box_zw'), operate: false},
                      
                      
                      
                   
                   
                        {field: 'create_time', title: __('Create_time'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
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