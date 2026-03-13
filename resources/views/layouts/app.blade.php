<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Dictionary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">
    <style>
        body {
            background: #fff;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }
    </style>
</head>
<body>

{{-- Top-left H1 title --}}
<div class=" mt-3 mb-2 px-3 shadow-sm p-3  bg-body-tertiary rounded" style="background-color: #f9f9fb; ">
    <h1 style=" font-weight: 500;">
        Character Dictionary
    </h1>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1">

            {{-- Dismissible flash success message --}}
            @if(session('success'))
                <div class="alert d-flex justify-content-between align-items-center
                            mb-3 py-2 px-3"
                     style="background-color: #e8f5e9; color: #333;
                            border: none; border-radius: 3px; font-size: 0.92rem;">
                    <span>{{ session('success') }}</span>
                    <button type="button"
                            class="btn-close btn-sm"
                            data-bs-dismiss="alert"
                            aria-label="Close">
                    </button>
                </div>
            @endif

            @yield('content')

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>
</body>
</html>