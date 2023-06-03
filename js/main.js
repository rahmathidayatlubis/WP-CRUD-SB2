
  function formatCurrency(input) {
    // Menghapus semua karakter selain angka
    let value = input.value.replace(/[^0-9]/g, '');

    // Mengubah angka menjadi format Rupiah
    let formattedValue = "";
    if (value.length > 3) {
      formattedValue = value.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    } else {
      formattedValue = value;
    }

    formattedValue = "Rp " + formattedValue;
    // Menetapkan hasil format kembali ke input
    input.value = formattedValue;
  }

  function removeCurrencyFormat(input) {
    // Menghapus semua karakter selain angka
    let value = input.value.replace(/[^0-9]/g, '');

    // Menghapus "Rp" dari input
    input.value = value;
  }

  document.addEventListener('DOMContentLoaded', function() {
    let inputHarga = document.getElementById('harga');
    let form = document.getElementById('myForm');

    if( inputHarga.value !== '' ){
      formatCurrency(inputHarga);
    }
    

    inputHarga.addEventListener('input', function() {
      formatCurrency(this);
    });

    form.addEventListener('submit', function(event) {
      if (!validateForm(event)) {
        // Hentikan pengiriman form jika validasi gagal
        event.preventDefault();
      } else {
        // Memanggil fungsi removeCurrencyFormat() sebelum pengiriman form jika validasi berhasil
        var inputHarga = document.getElementById('harga');
        removeCurrencyFormat(inputHarga);
      }
    });
  });



  function validateForm(event) {
    let selectKategori = document.getElementById("kategori");
    let valueKategori = selectKategori.value;
  
    if (valueKategori === '') {
      alert("Pilih kategori yang tersedia !");
      selectKategori.focus();
      // event.preventDefault(); // Mencegah pengiriman form
      return false; // Menghentikan pengiriman form
    }
  
    // Mengembalikan true untuk melanjutkan pengiriman form jika validasi berhasil
    return true; // Melanjutkan pengiriman form
  }
