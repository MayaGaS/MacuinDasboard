<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <div class="bg-purple-600 text-white p-4 flex justify-between items-center">
    <div class="flex items-center">
        <div class="relative">
        <!-- Icono de tres rayas -->
        <button
            id="dropdown-button-menu"
            class="cursor-pointer inline-flex items-center justify-center w-8 h-8 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100 transition duration-300 ease-in-out transform hover:scale-105 hover:bg-gray-100 hover:text-gray-900"
        >
            <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6"
            >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
            />
            </svg>
        </button>

        <!-- Dropdown del menú -->
        <div
            id="dropdown-menu-menu"
            class="hidden absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 position-top-left"
        >
            <div class="py-1" role="none">
            <a
                href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                role="menuitem"
                >Opción 1</a
            >
            <a
                href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                role="menuitem"
                >Opción 2</a
            >
            <a
                href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                role="menuitem"
                >Opción 3</a
            >
            </div>
        </div>
        </div>

        <button class="mr-4"><i class="fas fa-bars"></i></button>
        <img src="imagenes/logoSF.png" alt="Logo" class="h-8 mr-2" />
        <span>Macuin DashBoards</span>
    </div>

    <div class="flex items-center">
        <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="w-6 h-6"
        >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"
        />
        </svg>

        <span>Cliente (Nombre)</span>
        <button><i class="fas fa-chevron-down"></i></button>
        <div class="relative inline-block text-left ml-3">
        <button
            id="dropdown-button-perfil"
            type="button"
            class="inline-flex items-center justify-center text-center w-5 h-5 rounded-md bg-none text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100 transition duration-300 ease-in-out transform hover:scale-105 hover:bg-gray-100 hover:text-gray-900"
            aria-haspopup="true"
            aria-expanded="true"
        >
            <!-- Heroicon name: solid/chevron-down -->
            <svg
            class="h-5 w-5"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor"
            aria-hidden="true"
            >
            <path
                fill-rule="evenodd"
                d="M10 12.586l-4.293-4.293a1 1 0 011.414-1.414L10 10.758l3.879-3.879a1 1 0 111.414 1.414L10 12.586z"
                clip-rule="evenodd"
            />
            </svg>
        </button>

        <div
            id="dropdown-menu-perfil"
            class="hidden dropdown origin-top-right absolute right-0 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5"
            role="menu"
            aria-orientation="vertical"
            aria-labelledby="options-menu"
        >
            <div class="py-1" role="none">
            <a
                href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                role="menuitem"
                >Account settings</a
            >
            <a
                href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                role="menuitem"
                >Support</a
            >
            <a
                href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                role="menuitem"
                >License</a
            >
            <form method="POST" action="#" role="none">
                <button
                type="submit"
                class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                role="menuitem"
                >
                Sign out
                </button>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const dropdownButtonMenu = document.getElementById(
        "dropdown-button-menu"
        );
        const dropdownMenuMenu = document.getElementById("dropdown-menu-menu");

        dropdownButtonMenu.addEventListener("click", function () {
        dropdownMenuMenu.classList.toggle("hidden");
        });

        document.addEventListener("click", function (event) {
        if (
            !dropdownMenuMenu.contains(event.target) &&
            !dropdownButtonMenu.contains(event.target)
        ) {
            dropdownMenuMenu.classList.add("hidden");
        }
        });

        const dropdownButtonPerfil = document.getElementById(
        "dropdown-button-perfil"
        );
        const dropdownMenuPerfil = document.getElementById(
        "dropdown-menu-perfil"
        );

        dropdownButtonPerfil.addEventListener("click", function () {
        dropdownMenuPerfil.classList.toggle("hidden");
        });

        document.addEventListener("click", function (event) {
        if (
            !dropdownMenuPerfil.contains(event.target) &&
            !dropdownButtonPerfil.contains(event.target)
        ) {
            dropdownMenuPerfil.classList.add("hidden");
        }
        });
    });
    </script>
</body>
</html>