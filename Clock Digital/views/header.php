<header class= "w-full fixed top-0 p-4 flex justify-between items-center bg-white bg-opacity-10 backdrop-blur-md border-b border-white border-opacity-30 shadow-lg z-20">
    <div class="flex items-center space-x-4">
        <!-- Menu Icon -->
        <a href="#" id="menu-icon" class="p-2 rounded-full bg-white bg-opacity-20 hover:bg-opacity-40 transition ease-in-out duration-300 cursor-pointer">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </a>
        <a href="./index.php" class="text-4xl text-gray-300 uppercase tracking-widest">MY APP</a>
    </div>
</header>

<!-- Sidebar -->
<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-10"></div>

<div id="sidebar" class="fixed top-0 left-0 h-full w-64 bg-white bg-opacity-10 backdrop-blur-lg shadow-lg border-r border-white border-opacity-30 transform -translate-x-full transition-transform duration-300 z-20">
    <div class="flex justify-between p-4">
        <h2 class="text-white text-lg font-semibold">Menu</h2>
        <a href="#" id="close-icon" class="p-2 rounded-full bg-white bg-opacity-20 hover:bg-opacity-40 transition ease-in-out duration-300 cursor-pointer">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </a>
    </div>

    <ul class="text-white space-y-4 p-4">
        <li><a href="#" class="block p-2 hover:bg-white hover:bg-opacity-20 rounded-md transition ease-in-out duration-300">About</a></li>
        <li><a href="#" class="block p-2 hover:bg-white hover:bg-opacity-20 rounded-md transition ease-in-out duration-300">Services</a></li>
        <li><a href="#" class="block p-2 hover:bg-white hover:bg-opacity-20 rounded-md transition ease-in-out duration-300">Contact</a></li>
    </ul>
</div>
