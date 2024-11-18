<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="../path/to/flowbite/dist/flowbite.min.css">
    <title>Patio de Piedra Dashboard</title>
    <style>
        .card {
            position: relative;
            display: flex;
            min-width: 0px;
            flex-direction: column;
            overflow-wrap: break-word;
            border-radius: 0.500rem;
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1.25rem;
        }

        .btn {
            display: inline-block;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            border-radius: 0.375rem;
            border-width: 1px;
            border-color: transparent;
            background-color: transparent;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1rem;
            padding-right: 1rem;
            text-align: center;
            vertical-align: middle;
            font-size: 0.875rem;
            font-weight: 600;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .btn-sm {
            border-radius: 0.375rem;
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            font-size: 0.75rem;
        }

        .btn-lg {
            border-radius: 0.5rem;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1rem;
            padding-right: 1rem;
            font-size: 1.125rem;
        }
    </style>
</head>

<body class="dark:bg-gray-900">
    @include('components/nav', ['user_name' => $user_name, 'user_email' => $user_email])
    @include('components/sidebar', ['role_id' => $role_id])

    <div class="p-4 sm:ml-64">
        <div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center mb-3">
            <!-- title -->
            <button id="toggle-dark-mode" class="fixed bottom-4 right-4 p-4 bg-gray-800 text-white rounded-full">🌙</button>
            <h1 class="text-2xl font-semibold leading-tight text-indigo-600">Dashboard</h1>
        </div>
        <div class="-mt-12 mx-6 mb-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-1 xl:grid-cols-1">
            <div class="bg-white shadow rounded-lg p-6 dark:bg-gray-800 dark:text-gray-100 w-full">
                <!-- heading -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Clientes</hjson>
                </div>

                <div class="relative overflow-x-auto">
                    <!-- table -->
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div
                            class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                            <div>
                                <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                                    class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                    type="button">
                                    <svg class="w-3 h-3 text-gray-500 dark:text-gray-400 me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                                    </svg>
                                    Estado
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                                <button
                                    class="inline-flex items-center text-white bg-purple-600 border border-purple-600 focus:outline-none hover:bg-purple-700 focus:ring-4 focus:ring-purple-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-purple-700 dark:text-white dark:border-purple-700 dark:hover:bg-purple-800 dark:hover:border-purple-800 dark:focus:ring-purple-900"
                                    type="button">
                                    Agregar reserva
                                </button>

                                <!-- Dropdown menu -->
                                <div id="dropdownRadio"
                                    class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                                    data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                                    <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownRadioButton">
                                        <li>
                                            <div
                                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input id="filter-radio-example-1" type="radio" value="1" name="status"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="filter-radio-example-1"
                                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Activos</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input id="filter-radio-example-1" type="radio" value="0" name="status"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="filter-radio-example-2"
                                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Inactivos</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <label for="table-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div
                                    class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="table-search"
                                    class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Search for items">
                            </div>
                        </div>
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nombre
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Apellido
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Documento
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nro. Celular
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Peticiones especiales
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        País
                                    </th>
                                    <th>
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $client->name }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $client->lastname }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $client->email }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $client->document }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $client->phone_number }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $client->special_requests }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $client->country_id }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="./js/dark-mode-toggle"></script>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
