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
