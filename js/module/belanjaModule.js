// set msg var to contain message
var msg = "";

const isiPesan = document.getElementById("isipesan");

// to check if value of the input is float or not
// function isInt(n) {
//     return Number(n) === n && n % 1 === 0;
// }

// function isInt(n) {
//     return Number.isInteger(n);
// }

export function belanjaModule() {
    function pilihProduk() {
        let productName = document.querySelectorAll(
            ".product .row2 .card-product .card-body .product-name"
        );

        let stock1 = document.querySelectorAll(
            ".product .row2 .card-product .card-body .stock .stock1"
        );

        // console.log(stock1[1].innerHTML);

        let btnCart = document.querySelectorAll(
            ".product .row2 .card-product .btn-cart"
        );

        for (let i = 0; i < btnCart.length; i++) {
            btnCart[i].addEventListener("click", function () {
                Swal.fire({
                    title: "Jumlah Pembelian",
                    input: "number",
                    inputLabel:
                        "Masukkan jumlah pembelian " + productName[i].innerHTML,
                    inputPlaceholder: "Contoh: 20",
                    inputAttributes: {
                        min: 1,
                        max: stock1[i].innerHTML,
                        step: 1,
                    },
                    inputValidator: (value) => {
                        if (value) {
                            if (value > parseInt(stock1[i].innerHTML)) {
                                return (
                                    "Jumlah pembelian melebihi stok " +
                                    stock1[i].innerHTML
                                );
                            } else if (value < 1) {
                                return "Jumlah pembelian kurang dari 1";
                            } //else if (!isInt(value)) {
                            //return "Jumlah pembelian tidak boleh desimal";
                            // idk why this is not working
                            //}
                        } else {
                            return "Mohon masukkan jumlah pembelian";
                        }
                    },
                    showCancelButton: true,
                    confirmButtonText: "Konfirmasi",
                    confirmButtonColor: "#5c3c10",
                    cancelButtonText: "Batal",
                }).then((result) => {
                    if (result.isConfirmed) {
                        // The prompt was confirmed, you can access the value here
                        const qty = result.value;
                        msg +=
                            productName[i].innerHTML +
                            ".\nJumlah: " +
                            qty +
                            "\n\n";
                        isiPesan.value = msg;
                    }
                });
            });
        }
    }

    pilihProduk();
}

export function deleteOrder() {
    const btnHapus = document.getElementById("btn-hapus");

    btnHapus.addEventListener("click", function () {
        msg = "";
        isiPesan.value = "";
    });
}

// export function sendOrder() {
//     // Masukkan nomor hp di sini
//     const nomorHp = "";

//     const btnOrder = document.getElementById("btn-order");
//     btnOrder.addEventListener("click", function () {
//         const nama = document.getElementById("nama").value;
//         const alamat = document.getElementById("alamat").value;
//         const message = encodeURIComponent(
//             "Pemesan: " +
//                 nama +
//                 "\n\nAlamat: " +
//                 alamat +
//                 "\n\nDetail Pesanan:\n" +
//                 msg
//         );

//         window.location.href = `https://api.whatsapp.com/send/?phone=${nomorHp}&text=${message}&type=phone_number&app_absent=0`;
//     });
// }
