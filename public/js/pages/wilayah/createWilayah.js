"use strict";

var cleave = new Cleave(".currency", {
    numeral: true,
    numeralThousandsGroupStyle: "thousand"
});
var kode = new Cleave(".kode", {
    prefix: kode,
    delimiter: "-",
    blocks: [3, 3, 2],
    uppercase: true
});
