"use strict";

$("#resi").dataTable({
    responsive: true,
    columnDefs: [{ sortable: false, targets: [5] }]
});
$(".btn").click(function() {
    event.preventDefault();
    $(this).ekkoLightbox();
});
