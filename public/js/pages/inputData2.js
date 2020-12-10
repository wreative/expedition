"use strict";

// var cleave = new Cleave(".satuan", {
//     numeral: true,
//     numeralThousandsGroupStyle: "thousand"
// });

$(".satuan")
    .toArray()
    .forEach(function(field) {
        new Cleave(field, {
            numeral: true,
            numeralThousandsGroupStyle: "thousand"
        });
    });

$("#jb").on("change", function() {
    if ($(this).val() == "2") {
        // $("#par").attr("required", "");
        $("#doc").removeAttr("d-none");
    } else if ($(this).val() == "3") {
        $("#otherFieldDiv").hide();
        $("#par").removeAttr("d-none");
    }
});
