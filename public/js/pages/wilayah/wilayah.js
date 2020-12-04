"use strict";

$("#wilayah").dataTable({
    responsive: true,
    columnDefs: [{ sortable: false, targets: [4] }]
});
