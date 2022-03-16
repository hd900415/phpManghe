define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'setting/banner/index' + location.search,
                    add_url: 'setting/banner/add',
                    edit_url: 'setting/banner/edit',
                    del_url: 'setting/banner/del',
                    multi_url: 'setting/banner/multi',
                    import_url: 'setting/banner/import',
                    table: 'banner',
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
                        {field: 'place', title: __('Place'), searchList: {"index":__('Place index'),"other":__('Place other')}, formatter: Table.api.formatter.normal},
                        {field: 'image', title: __('Image'), operate: false, events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'type', title: __('Type'), searchList: {"box":__('Type box'),"link":__('Type link'),"word":__('Type word')}, formatter: Table.api.formatter.normal},
                        {field: 'value_short', title: __('Value'), operate: false},
                        {field: 'status', title: __('Status'), searchList: {"normal":__('Status normal'),"hidden":__('Status hidden')}, formatter: Table.api.formatter.status, operate: false},
                        {field: 'weigh', title: __('Weigh'), operate: false},
                        {field: 'update_time', title: __('Update_time'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ],
                searchFormVisible: false,
                search:false,
                showToggle: false,
                showColumns: false
            });

            $(Config.tab_default).addClass('active');

            table.on('load-success.bs.table',function(){
                $(".btn-editone").data("area", ["60%","90%"]);
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            var box = $('#div-select-box');
            var link = $('#div-link');
            var word = $('#div-word');
            link.hide();
            word.hide();
            $("select[name='row[type]']").on('change',function () {
                var selected = $(this).val();

                switch (selected) {
                    case 'box':
                        box.show();
                        link.hide();
                        word.hide();
                        break;
                    case 'link':
                        box.hide();
                        link.show();
                        word.hide();
                        break;
                    case 'word':
                        box.hide();
                        link.hide();
                        word.show();
                        break;
                    default:
                        box.hide();
                        link.hide();
                        word.hide();
                }
            });
            Controller.api.bindevent();
        },
        edit: function () {
            $('#c-type').on('change',function () {
                var boxSelecter = $('#div-select-box');
                var divlink = $('#div-link');
                var divword = $('#div-word');
                var curr_type = $(this).val();

                switch (curr_type) {
                    case 'box':
                        boxSelecter.removeClass('hidden');
                        boxSelecter.show();

                        divlink.hide();
                        divword.hide();
                        break;
                    case 'link':
                        divlink.removeClass('hidden');
                        divlink.show();

                        boxSelecter.hide();
                        divword.hide();
                        break;
                    case 'word':
                        divword.removeClass('hidden');
                        divword.show();

                        divlink.hide();
                        boxSelecter.hide();
                        break;
                }
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