define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'setting/version/index' + location.search,
                    add_url: 'setting/version/add',
                    edit_url: 'setting/version/edit',
                    del_url: 'setting/version/del',
                    multi_url: 'setting/version/multi',
                    import_url: 'setting/version/import',
                    table: 'app_version',
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
                        {field: 'platform', title: __('Platform'), searchList: {"h5":__('Platform h5'),"android":__('Platform android'),"ios":__('Platform ios'),"applets":__('Platform applets')}, formatter: Table.api.formatter.status},
                        {field: 'version', title: __('Version'), operate: 'LIKE'},
                        {field: 'download_file', title: __('Download_file'), operate: false},
                        {field: 'enforce', title: __('Enforce'), searchList: {"0": __('Enforce 0'), "1": __('Enforce 1')}, custom: {1: "success", 0: "default"}, formatter: Table.api.formatter.flag},
                        {field: 'update_time', title: __('Update_time'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                    ]
                ],
                searchFormVisible: true,
                search:false,
                showToggle: false,
                showColumns: false
            });

            $(Config.tag_default).addClass('active');

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