define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'trade/withdrawal/index' + location.search,
                    add_url: 'trade/withdrawal/add',
                    edit_url: 'trade/withdrawal/edit',
                    del_url: 'trade/withdrawal/del',
                    multi_url: 'trade/withdrawal/multi',
                    import_url: 'trade/withdrawal/import',
                    table: 'withdrawal',
                }
            });

            var table = $("#table");
            var sidebarNUmber = Config.sidebar_number.all;

            table.on('load-success.bs.table',function(e,data){
                var tabdom = $('.panel-heading ul[data-field] li.active a[data-toggle="tab"]');

                $('#money').text(data.totalmoney);

                // 清空当前tab的数字角标
                $(tabdom.find('small')).text('');
                var tabvalue = tabdom.data('value');
                switch (tabvalue) {
                    case '':
                        table.bootstrapTable('showColumn', 'create_time');
                        table.bootstrapTable('showColumn', 'operate');

                        table.bootstrapTable('hideColumn', 'update_time');
                        break;
                    case 'review':
                        table.bootstrapTable('showColumn', 'create_time');
                        table.bootstrapTable('showColumn', 'operate');

                        table.bootstrapTable('hideColumn', 'update_time');
                        table.bootstrapTable('hideColumn', 'reason');

                        sidebarNUmber -= Config.sidebar_number.review;
                        break;
                    case 'success':
                        table.bootstrapTable('showColumn', 'update_time');

                        table.bootstrapTable('hideColumn', 'create_time');
                        table.bootstrapTable('hideColumn', 'reason');
                        table.bootstrapTable('hideColumn', 'operate');

                        sidebarNUmber -= Config.sidebar_number.success;
                        break;
                    case 'reject':
                        table.bootstrapTable('showColumn', 'update_time');

                        table.bootstrapTable('hideColumn', 'create_time');
                        table.bootstrapTable('hideColumn', 'operate');

                        sidebarNUmber -= Config.sidebar_number.reject;
                        break;
                }
                Backend.api.sidebar({
                    'trade/withdrawal': [sidebarNUmber,'yellow'],
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
                        {field: 'user.nickname', title: __('User nickname'), operate: 'LIKE', visible: false},
                        {field: 'nickname', title: __('User nickname'), operate: false},
                        {field: 'avatar', title: __('User avatar'), operate: false, events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'amount', title: __('Amount'), operate:'BETWEEN'},
                        {field: 'type', title: __('Type'), searchList: {"wechat":__('Type wechat'),"alipay":__('Type alipay')}, custom:{wechat:"success",alipay:"info"}, formatter: Table.api.formatter.flag},
                        {field: 'record.username', title: __('Username'), operate:'LIKE', visible: false},
                        {field: 'username', title: __('Username'), operate: false},
                        {field: 'account', title: __('Account'), operate:'LIKE'},
                        {field: 'record.status', title: __('Status'), searchList: {"review":__('Status review'),"success":__('Status success'),"reject":__('Status reject')}, formatter: Table.api.formatter.status, visible: false},
                        {field: 'status', title: __('Status'), searchList: {"review":__('Status review'),"success":__('Status success'),"reject":__('Status reject')}, formatter: Table.api.formatter.status, operate: false},
                        {field: 'reason', title: __('Reason'), operate: false},
                        {field: 'create_time', title: __('Create_time'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
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