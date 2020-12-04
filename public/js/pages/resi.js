"use strict";

function getResi() {
    /* Get the text field */
    var copyText = document.getElementById("resi");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /*For mobile devices*/

    /* Copy the text inside the text field */
    document.execCommand("copy");

    /* Alert the copied text */
    // alert("Copied the text: " + copyText.value);
    iziToast.success({
        title: "Informasi",
        icon: "fas fa-info",
        position: "topRight",
        message: "Nomor Resi Berhasil Di Salin"
    });
}

function getTransaksi() {
    /* Get the text field */
    var copyText = document.getElementById("transaksi");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /*For mobile devices*/

    /* Copy the text inside the text field */
    document.execCommand("copy");

    /* Alert the copied text */
    // alert("Copied the text: " + copyText.value);
    iziToast.success({
        title: "Informasi",
        icon: "fas fa-info",
        position: "topRight",
        message: "Nomor Transaksi Berhasil Di Salin"
    });
}
