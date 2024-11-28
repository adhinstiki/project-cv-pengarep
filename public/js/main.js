document.getElementById('btnToggle').addEventListener('click', function() {
    // Menambahkan class 'open' ke sidebar dan 'show' ke overlay
    document.querySelector('.sidebar-off-canvas').classList.add('open');
    document.getElementById('overlay').classList.add('show');
});

document.getElementById('btnClose').addEventListener('click', function() {
    // Menghapus class 'open' dari sidebar dan 'show' dari overlay
    document.querySelector('.sidebar-off-canvas').classList.remove('open');
    document.getElementById('overlay').classList.remove('show');
});

// Menambahkan aksi klik pada overlay untuk menutup sidebar
document.getElementById('overlay').addEventListener('click', function() {
    document.querySelector('.sidebar-off-canvas').classList.remove('open');
    document.getElementById('overlay').classList.remove('show');
});
