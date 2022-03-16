define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'setting/text/index' + location.search,
                    add_url: 'setting/text/add',
                    edit_url: 'setting/text/edit',
                    del_url: 'setting/text/del',
                    multi_url: 'setting/text/multi',
                    import_url: 'setting/text/import',
                    table: 'text',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                pageSize: 20,
                columns: [
                    [
                        {checkbox: true},
                        {field: 'desc', title: __('Desc'), operate: false},
                        {field: 'text_short', title: __('Text'), operate: false},
                        {field: 'link', title: __('协议链接'), operate: false, formatter: Table.api.formatter.url},
                        {field: 'update_time', title: __('Update_time'), operate:false, addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ],
                commonSearch: false,
                searchFormVisible: false,
                search:false,
                showToggle: false,
                showColumns: false
            });

            table.on('load-success.bs.table',function(){
                $(".btn-editone").data("area", ["60%","70%"]);
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