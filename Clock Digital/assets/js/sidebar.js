document.addEventListener("DOMContentLoaded", () => {
    const menuIcon = document.getElementById('menu-icon');
    const sidebar = document.getElementById('sidebar');
    const closeIcon = document.getElementById('close-icon');
    const overlay = document.getElementById('overlay');

    // Toggle sidebar visibility
    menuIcon.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
    });

    // Close sidebar when close button or overlay is clicked
    closeIcon.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });

    overlay.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });
});


