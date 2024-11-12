<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Titulo</title>
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
    @include('components.nav')
    @include('components.sidebar')

    <div class="p-4 sm:ml-64">
        <h1>Bienvenido usuario</h1>
        <p>Tu rol es: {{ $role_id }}</p>
        @include('content')
    </div>

    
    <!-- Scripts -->
    <script>
    document.getElementById('toggle-dark-mode').addEventListener('click', () => {
        document.body.classList.toggle('dark');
    });
    </script> 
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>