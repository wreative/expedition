"use strict";

//     $('.tlp').toArray().forEach(function(field){
// new Cleave(field, {
//     prefix: '+62',
//     phone: true,
//     phoneRegionCode: 'id'
// });
// document.querySelectorAll("input").forEach(function(el) {
//     new Cleave(".tlp", {
//         prefix: "+62",
//         phone: true,
//         phoneRegionCode: "id"
//     });
// });

var cleave = new Cleave(".satuan", {
    numeral: true,
    numeralThousandsGroupStyle: "thousand"
});

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
    $("#panjang, #lebar, #tinggi, price").keyup(function() {
        var panjang = parseInt($("#panjang").val()) || 0;
        var lebar = parseInt($("#lebar").val()) || 0;
        var tinggi = parseInt($("#tinggi").val()) || 0;
        $("#tdl").val(
            numberWithCommas(Math.floor((panjang * lebar * tinggi) / 4000))
        );
        $("#tu").val(
            numberWithCommas(Math.floor((panjang * lebar * tinggi) / 6000))
        );
    });
});

$("select").on("change", function() {
    var dst = $(this)
        .find("option")
        .filter(":selected")
        .text();
    $("#dst").val(dst);
    if ($("#tdl").val() < $("#berat").val()) {
        var biaya = $("#berat").val();
        // console.log("biaya " + numberNoCommas(biaya));
    } else {
        var biaya = $("#tdl").val();
        // console.log("biaya " + numberNoCommas(biaya));
    }
    // var biaya = $('#tdl').val();
    // console.log('biayas ' + this.value*biaya);
    // console.log('value ' + this.value);
    // console.log('biaya ' + numberNoCommas(biaya));
    // console.log(this.value);
    if (this.value == "Kota") {
        $("#bk").val("Pilih kota tujuan terlebih dahulu!");
    } else {
        $("#bk").val(numberWithCommas(this.value * numberNoCommas(biaya)));
    }

    // console.log('kirim ' + kirim)
    $("#tb").val(numberWithCommas(this.value * numberNoCommas(biaya)));
});

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function numberNoCommas(x) {
    var char = x.toString().replace(",", "");
    var newChar = parseInt(char);
    return newChar;
}
