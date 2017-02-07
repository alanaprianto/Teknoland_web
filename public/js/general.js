(function ($, window, undefined) {
    var school = {};
    moment.locale('id');

    school.productTable = function ($element, listUrl, csrf) {
        if (!$element.length) return null;
        return $element.DataTable({
            processing: true,
            serverSide: true,
            "deferRender": true,
            responsive: true,
            ajax: {
                'url': listUrl,
                'type': 'POST',
                'headers': {
                    'X-CSRF-TOKEN': csrf
                }
            },
            dom: 'lBfrtip',
            "order": [[1, 'asc']],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            buttons: [
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6]
                    },
                    title: $('.print-datatable').attr('title')
                }
            ],
            columns: [
                {
                    data: 'id',
                    name: 'id',
                    "orderable": false,
                    "searchable": false
                },
                {data: 'title', name: 'title'},
                {data: 'desc', name: 'desc'},
                {
                    data: 'created_at', name: 'users.created_at', "render": function (data, type, full, meta) {
                    return moment(data).format('LLL')
                }
                },
                {
                    "data": 'id',
                    "defaultContent": '',
                    "orderable": false,
                    "searchable": false,
                    "mRender": function (data, type, row) {
                        var edit = '<a href="/product/edit?id=' + row.id + '">Edit</a>';
                        var remove = '<a href="javascript:;" class="btn-remove" data-id="' + row.id + '">Delete</a>';
                        return edit + ' | ' + remove;
                    }
                }
            ]
        });
    };

    function orderNumber($datatable) {
        $datatable.on('order.dt search.dt draw.dt', function () {
            var page = $datatable.page.info().page;
            $datatable.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1 + (page * 10);
            });
        }).draw();
    }

    $(document).ready(function () {
        var $taskTable = school.productTable($('#table-product'), '/product-list', $('#table-product').data('token'));
        if ($taskTable) {
            orderNumber($taskTable);
        }

    });

})(jQuery, window);