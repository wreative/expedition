"use strict";

$(".tlp")
    .toArray()
    .forEach(function(field) {
        new Cleave(field, {
            prefix: "+62",
            delimiter: " ",
            phone: true,
            phoneRegionCode: "id"
        });
    });

$(function() {
    $("#panjang, #lebar, #tinggi").on("keyup", function() {
        let panjang = parseInt($("#panjang").val()) || 0;
        let lebar = parseInt($("#lebar").val()) || 0;
        let tinggi = parseInt($("#tinggi").val()) || 0;
        $("#tdl").val(
            numberWithCommas(Math.round((panjang * lebar * tinggi) / 4000))
        );
        $("#tu").val(
            numberWithCommas(Math.round((panjang * lebar * tinggi) / 6000))
        );
    });
});

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
