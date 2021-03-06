$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    //Memanggil fungsi showClock();
    showClock();
    //Fungsi untuk menampilkan jam dengan detik yang dinamis
    function showClock() {
        var x = document.getElementById('clock');
        t = setInterval(clock, 1000);
        function clock() {
            var d = new Date();
            x.innerHTML = addZero(d.getHours()) + ":" + addZero(d.getMinutes()) + ":" + addZero(d.getSeconds());
        }
    }
    //Fungsi untuk menambahkan 0 di depan jam/menit/detik ketika terdiri 1 digit
    function addZero(a) {
        if (a < 10) {
            a = "0" + a;
        }
        return a
    }

})
//Fungsi untuk menampilkan halaman form update user
function showUserUpdateForm(id, nama, email) {
    //document.getElementById adalah cara pada js DOM untuk mengambil elemen pada halaman html
    document.getElementById('modal-id-user').value = id;
    document.getElementById('modal-nama-user').value = nama;
    document.getElementById('modal-email-user').value = email;
}
//Fungsi untuk menampilkan halaman form update user
function showBarangUpdateForm(id, nama, satuan, harga) {
    //document.getElementById adalah cara pada js DOM untuk mengambil elemen pada halaman html
    document.getElementById('modal-id-barang').value = id;
    document.getElementById('modal-nama-barang').value = nama;
    document.getElementById('modal-satuan-barang').value = satuan;
    document.getElementById('modal-harga-barang').value = harga;
}
function getDataBarang() {
    //Mendapatkan nilai dari id = id_barang
    var id = document.getElementById('id-barang').value;
    //Menjalankan script sesuai url dibawah,lalu ditampilkan pada success
    $.ajax({
        url: "getAjaxDataBarang.php",
        type: 'POST',
        dataType: 'json',
        data: {
            id: id,
        },
        success: function (result) {
            $.each(result, function (index, el) {
                // console.log(index);
                if (index == "harga_barang") {
                    harga = el
                } else if (index == "satuan_barang") {
                    satuan = el
                }
            });
            //Memasukkan nilai harga ke dalam element yang memiliki id harga-barang
            document.getElementById('harga-barang').value = harga
            //Memasukkan nilai satuan ke dalam element yang memiliki id satuan-barang
            document.getElementById('satuan-barang').value = satuan
            //Mengaktifkan elemen jumlah-beli
            document.getElementById('jumlah-beli').disabled = false
            //Mengisi elemen jumlah-beli dengan nilai 1
            document.getElementById('jumlah-beli').value = 1
            //Mengaktifkan elemen submit-temp
            document.getElementById('submit-temp').disabled = false
        }
    });
}
//function untuk memastikan bahwa no transaksi telah terisi 6 angka
//dan grandTotal lebih dari 0;
function validasiTransaksi() {
    var noTransaksi = document.getElementById('no-transaksi').value;
    var grandTotal = document.getElementById('grand-total').value;
    if (noTransaksi.length == 6 && grandTotal > 0) {
        document.getElementById('submit-trans').disabled = false;
    }else{
        document.getElementById('submit-trans').disabled = true;
    }
}