$(document).ready(function () {
    var nilai = $("#qty").val();
    var harga = $("#harga").val();
    var total = $("#total");
    var subtotal = parseInt(nilai) * parseInt(harga);

    if (nilai > 0) {
        total.val(subtotal);
    }

    if (nilai > 0) {
        $("#minus").prop("disabled", false);
    }

    $("#plus").click(function () {
        var nilai = $("#qty").val();
        var penjumlahan = parseInt(nilai) + 1;
        $("#qty").val(penjumlahan);
        var harga = $("#harga").val();
        var subtotal = parseInt(penjumlahan) * parseInt(harga);
        total.val(subtotal);

        if (penjumlahan > 0) {
            $("#minus").prop("disabled", false);
        }
    });

    $("#minus").click(function () {
        var nilai = $("#qty").val();
        var penjumlahan = parseInt(nilai) - 1;
        $("#qty").val(penjumlahan);
        var harga = $("#harga").val();
        var subtotal = parseInt(penjumlahan) * parseInt(harga);
        total.val(subtotal);

        if (penjumlahan == 0) {
            $("#minus").prop("disabled", true);
        }
    });
});
