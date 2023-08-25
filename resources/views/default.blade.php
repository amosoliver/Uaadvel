<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uaadvel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Portuguese-Brasil.json"
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.cpf').inputmask('999.999.999-99');
            $('.horario').inputmask('99:99', { 'placeholder': 'HH:MM' });
            $('.cnpj').inputmask('99.999.999/9999-99');
            $('.cep').inputmask('99999-999');
            $('.telefone').inputmask('(99) 99999-9999');
            $('.data').inputmask('99/99/9999');
            $('.valor').inputmask('R$ 999.999,99');
        });
    </script>

    <style>
        .sidebar-container {
            height: 100vh;
        }

        .content-container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>

@if(session('success'))
    <div class="alert alert-success col-md-3">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"width="15" height="15"><use xlink:href="#check-circle-fill"/></svg>
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" width="15" height="15"><use xlink:href="#exclamation-triangle-fill"/></svg>
        {{ session('error') }}
    </div>
@endif
<main>
        @yield('main')
</main>
</div>
</body>
</html>
