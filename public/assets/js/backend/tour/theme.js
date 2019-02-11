define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'tour/theme/index',
                    add_url: 'tour/theme/add',
                    edit_url: 'tour/theme/edit',
                    del_url: 'tour/theme/del',
                    multi_url: 'tour/theme/multi',
                    details_url: '',
                    table: 'tour_theme',
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
                        {field: 'id', title: __('Id')},
                        {field: 'tour.id', title: __('Tour.id')},
                        {field: 'style.type', title: __('Style.type')},
                        {field: 'title', title: __('Title')},
                        {field: 'content', title: __('Content')},
                        {field: 'image', title: __('Image'), formatter:Table.api.formatter.image},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
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
        details: function (){
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