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
                {
                    "data": '',
                    "defaultContent": '',
                    "orderable": false,
                    "searchable": false,
                    "mRender": function (data, type, row) {
                        var input = '<input class="input-stock" style="width: 30%" type="number" min="0" value="'+row.stock+'" data-id="'+row.id+'">';
                        return input;
                    }
                },
                {data: 'price', name: 'price'},
                {data: 'desc', name: 'desc'},
                {
                    data: 'created_at', name: 'created_at', "render": function (data, type, full, meta) {
                    return moment(data).format('LLL')
                }
                },
                {
                    "data": '',
                    "defaultContent": '',
                    "orderable": false,
                    "searchable": false,
                    "mRender": function (data, type, row) {
                        var edit = '<a href="/product/edit?id=' + row.id + '"><i class="fa fa-edit"></i></a>';
                        var remove = '<a href="javascript:;" class="btn-remove" data-id="' + row.id + '"><i class="fa fa-remove"></i></a>';
                        return edit + ' | ' + remove;
                    }
                }
            ]
        });
    };
    school.serviceTable = function ($element, listUrl, csrf) {
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
                    data: 'created_at', name: 'created_at', "render": function (data, type, full, meta) {
                    return moment(data).format('LLL')
                }
                },
                {
                    "data": '',
                    "defaultContent": '',
                    "orderable": false,
                    "searchable": false,
                    "mRender": function (data, type, row) {
                        var edit = '<a href="/service/edit?id=' + row.id + '"><i class="fa fa-edit"></i></a>';
                        var remove = '<a href="javascript:;" class="btn-remove" data-id="' + row.id + '"><i class="fa fa-remove"></i></a>';
                        return edit + ' | ' + remove;
                    }
                }
            ]
        });
    };
    school.eventTable = function ($element, listUrl, csrf) {
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
                    data: 'created_at', name: 'created_at', "render": function (data, type, full, meta) {
                    return moment(data).format('LLL')
                }
                },
                {
                    "data": '',
                    "defaultContent": '',
                    "orderable": false,
                    "searchable": false,
                    "mRender": function (data, type, row) {
                        var edit = '<a href="/event/edit?id=' + row.id + '"><i class="fa fa-edit"></i></a>';
                        var remove = '<a href="javascript:;" class="btn-remove" data-id="' + row.id + '"><i class="fa fa-remove"></i></a>';
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
    function updateStock(value, id) {
        var csrf = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "/product/editstock",
            data: {
                "_token": csrf,
                "stock": value,
                "id": id
            },
            type: 'POST',
            success : function (data) {
                var object = JSON.parse(data);
                if(!object.is_success){
                    alert(object.message);
                }
            }
        });
    }

    $(document).ready(function () {
        var $productTable = school.productTable($('#table-product'), '/product-list', $('#table-product').data('token'));
        if ($productTable) {
            orderNumber($productTable);
        }

        var $serviceTable = school.serviceTable($('#table-service'), '/service-list', $('#table-service').data('token'));
        if ($serviceTable) {
            orderNumber($serviceTable);
        }

        var $eventTable = school.eventTable($('#table-event'), '/event-list', $('#table-event').data('token'));
        if ($eventTable) {
            orderNumber($eventTable);
        }

        $(document).on('change', '.input-stock', function () {
            $this = $(this);
            var value = $this.val();
            var id = $this.data('id');
            updateStock(value, id)
        });

    });

})(jQuery, window);