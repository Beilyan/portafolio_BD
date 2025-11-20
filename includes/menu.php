<nav class="fixed top-0 left-0 w-full z-50 h-28">
    <!-- Logo y Nombre (Visible siempre) -->
    <div class="bg-[#444345] flex  items-center px-6 py-3">
        <div class="flex items-center mr-0">
            <h1 class="text-gray-100 text-xl font-bold" style="font-family: 'Courier New'; font-size: 25px;">Bienvenido A Nuestro Portafolio!</h1>
        </div>
            <button id="hamburger" class="text-white text-2xl lg:hidden focus:outline-none mr-5">☰</button>
            <div class="flex items-center gap-10 ml-auto hidden lg:flex">
            <!-- C++ Compu-->
            <div class="relative group hidden lg:block">
                    <button class="block py-2 text-white hover:text-[#42f5e6] w-full text-left lg:text-center mr-20" style="font-family: 'Courier New'; font-size: 20px;">
                        C++ ▼
                    </button>
                    <div class="hidden group-hover:flex lg:absolute lg:flex-col bg-white shadow-md border rounded-md mt-0 min-w-[180px]">
                        <a href="" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas Básicos</a>
                        <a href="<?= $rutaBase ?>lista_editoriales.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas If - else if</a>
                        <a href="<?= $rutaBase ?>lista_estanterias.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas For</a>
                        <a href="<?= $rutaBase ?>lista_nacionalidades.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas While</a>
                        <a href="<?= $rutaBase ?>lista_nacionalidades.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas Do While</a>
                    </div>
                </div>
                <!-- C++ fin -->
            
                <!-- Java Compu -->
                <div class="relative group hidden lg:block">
                    <button class="block py-2 text-white hover:text-[#42f5e6] w-full text-left lg:text-center mr-20" style="font-family: 'Courier New'; font-size: 20px;">
                        Java ▼
                    </button>
                    <div class="hidden group-hover:flex lg:absolute lg:flex-col bg-white shadow-md border rounded-md mt-0 min-w-[180px]">
                        <a href="<?= $rutaBase ?>lista_autor.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas Básicos</a>
                        <a href="<?= $rutaBase ?>lista_editoriales.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Prgramas If - else if</a>
                        <a href="<?= $rutaBase ?>lista_estanterias.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas For</a>
                        <a href="<?= $rutaBase ?>lista_nacionalidades.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas While</a>
                        <a href="<?= $rutaBase ?>lista_nacionalidades.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas Do While</a>
                        <a href="<?= $rutaBase ?>lista_nacionalidades.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas Arreglos 1</a>
                        <a href="<?= $rutaBase ?>lista_nacionalidades.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas Arreglos 2</a>
                    </div>
                </div>

                <!-- Intento -->
                 <div class="relative group hidden lg:block">
                    <button class="block py-2 text-white hover:text-[#42f5e6] w-full text-left lg:text-center mr-20" style="font-family: 'Courier New'; font-size: 20px;">
                        JavaScript ▼
                    </button>
                    <div class="hidden group-hover:flex lg:absolute lg:flex-col bg-white shadow-md border rounded-md mt-0 min-w-[180px]">
                       <a href="Test.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas Básicos</a>
                        <a href="<?= $rutaBase ?>lista_editoriales.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Prgramas If - else if</a>
                        <a href="<?= $rutaBase ?>lista_estanterias.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas For</a>
                        <a href="<?= $rutaBase ?>lista_nacionalidades.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas While</a>
                        <a href="<?= $rutaBase ?>lista_nacionalidades.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas Do While</a>
                    </div>
                </div>
            </div>

                <!-- Fin -->
                <!-- ejm Movil -->
                <button id="btn-submenu-c" class="block py-2 text-white hover:text-[#42cbf5] w-full text-left lg:hidden">
                     C++ ▼
                </button>
                <div id="offcanvas-submenu-c" class="fixed top-0 right-[-100%] h-full w-64 bg-white shadow-lg transition-all flex flex-col z-50 lg:hidden">
                <div class="flex justify-between items-center p-4 border-b">
                <span class="font-semibold">C++</span>
            <button id="close-submenu-c" class="text-gray-700 text-xl">&times;</button>
        </div>
            <a href="<?= $rutaBase ?>lista_autor.php" class="px-4 py-2 hover:bg-gray- hover:text-[#42cbf5]">Programas If - else if</a>
            <a href="<?= $rutaBase ?>lista_editoriales.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas For</a>
            <a href="<?= $rutaBase ?>lista_estanterias.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas While</a>
            <a href="<?= $rutaBase ?>lista_nacionalidades.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas Do While</a>
    </div>
                <!-- Movil fin -->

                <!-- Java Movil -->
                <button id="btn-submenu-java" class="block py-2 text-white hover:text-[#42cbf5] w-full text-left lg:hidden">
                    Java ▼
                </button>
            <div id="offcanvas-submenu-java" class="fixed top-0 right-[-100%] h-full w-64 bg-white shadow-lg transition-all flex flex-col z-50 lg:hidden">
            <div class="flex justify-between items-center p-4 border-b">
                <span class="font-semibold">Java</span>
            <button id="close-submenu-java" class="text-gray-700 text-xl">&times;</button>
        </div>
            <a href="<?= $rutaBase ?>lista_autor.php" class="px-4 py-2 hover:bg-gray- hover:text-[#42cbf5]">Programas If - else if</a>
            <a href="<?= $rutaBase ?>lista_editoriales.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas For</a>
            <a href="<?= $rutaBase ?>lista_estanterias.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas While</a>
            <a href="<?= $rutaBase ?>lista_nacionalidades.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas Do While</a>
            <a href="<?= $rutaBase ?>lista_nacionalidades.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas Arreglos 1</a>
            <a href="<?= $rutaBase ?>lista_nacionalidades.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas Arreglos 2</a>
        </div>
                <!-- Java Movil fin -->
                <button id="btn-submenu-js" class="block py-2 text-white hover:text-[#42cbf5] w-full text-left lg:hidden">
                     JavaScript ▼
                </button>
                <div id="offcanvas-submenu-js" class="fixed top-0 right-[-100%] h-full w-64 bg-white shadow-lg transition-all flex flex-col z-50 lg:hidden">
                <div class="flex justify-between items-center p-4 border-b">
                <span class="font-semibold">JavaScript</span>
            <button id="close-submenu-js" class="text-gray-700 text-xl">&times;</button>
        </div>
            <a href="Test.php" class="px-4 py-2 hover:bg-gray- hover:text-[#42cbf5]">Programas If - else if</a>
            <a href="<?= $rutaBase ?>lista_editoriales.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas For</a>
            <a href="<?= $rutaBase ?>lista_estanterias.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas While</a>
            <a href="<?= $rutaBase ?>lista_nacionalidades.php" class="px-4 py-2 hover:bg-gray-100 hover:text-[#42cbf5]">Programas Do While</a>
    </div>
        </div>
</nav>
<!-- Scrip para hacer funcionar el Menú de Opciones -->
<script>
    function setupSubmenu(btnId, menuId, closeId) {
        const btn = document.getElementById(btnId);
        const menu = document.getElementById(menuId);
        const close = document.getElementById(closeId);

        btn?.addEventListener('click', () => {
            menu.style.right = '0';
        });

        close?.addEventListener('click', () => {
            menu.style.right = '-100%';
        });

        document.addEventListener('click', (e) => {
            if (window.innerWidth < 1024) {
                if (!menu.contains(e.target) && !btn.contains(e.target)) {
                    menu.style.right = '-100%';
                }
            }
        });
    }

    // Inicializar ambos submenús
    setupSubmenu('btn-submenu-c', 'offcanvas-submenu-c', 'close-submenu-c');
    setupSubmenu('btn-submenu-java', 'offcanvas-submenu-java', 'close-submenu-java');
    setupSubmenu('btn-submenu-js', 'offcanvas-submenu-js', 'close-submenu-js');
</script>

<main class="bg-gray-100 min-h-screen pt-20">