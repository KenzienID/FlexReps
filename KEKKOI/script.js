// Ambil elemen-elemen yang diperlukan
const btnToggle = document.querySelector('.toggle');
const menu = document.querySelector('.menu');

// Tambahkan event listener untuk tombol toggle
btnToggle.addEventListener('click', function() {
    menu.classList.toggle('show');
});
