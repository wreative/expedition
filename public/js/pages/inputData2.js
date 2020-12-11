"use strict";

$(".satuan")
    .toArray()
    .forEach(function(field) {
        new Cleave(field, {
            numeral: true,
            numeralThousandsGroupStyle: "thousand"
        });
    });

$("#jb").on("select2:select", function(e) {
    var data = e.params.data;
    if (data.id == "2") {
        $("#par").addClass("d-none");
        $("#doc").removeClass("d-none");
    } else if (data.id == "3") {
        $("#doc").addClass("d-none");
        $("#par").removeClass("d-none");
    } else {
        $("#par").addClass("d-none");
        $("#doc").addClass("d-none");
    }
});
