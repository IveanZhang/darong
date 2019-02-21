define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'tour/tour/index',
                    add_url: 'tour/tour/add',
                    edit_url: 'tour/tour/edit',
                    del_url: 'tour/tour/del',
                    details_url: 'tour/theme/singletour',
                    multi_url: 'tour/tour/multi',
                    table: 'tour'
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
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate},
                        {field: 'id', title: __('Id')},
                        {field: 'title', title: __('Title')},
                        {field: 'img', title: __('Img'), formatter:Table.api.formatter.image},
                        {field: 'description', title: __('Description')},
                        {field: 'group.id', title: __('Group.id')},
                        {field: 'country.id', title: __('Country_id')},
                        {field: 'ishot', title: __('Ishot'), searchList: {"0":__('Ishot 0'),"1":__('Ishot 1')}, formatter: Table.api.formatter.normal},
                        {field: 'price', title: __('Price'), operate:'BETWEEN'},
                        {field: 'status', title: __('Status'), searchList: {"0":__('Status 0'),"1":__('Status 1')}, formatter: Table.api.formatter.status},
                        {field: 'rate', title: __('Rate'), searchList: {"1":__('Rate 1'),"2":__('Rate 2'),"3":__('Rate 3'),"4":__('Rate 4'),"5":__('Rate 5')}, formatter: Table.api.formatter.normal},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'updatetime', title: __('Updatetime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime}
                    ]
                ]
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