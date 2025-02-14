<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 Error Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <section style="padding-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h1 style="font-size: 162px;">404</h1>
                    <h2>Page Not Found</h2>
                    <p> Mohon Maaf Halaman Tidak Ditemukan.</p>
                    <p> Silahkan Kembali Ke Halaman Home.</p>
                    <a href="/" class="btn btn-primary">Visit Home</a>
                </div>
            </div>
        </div>
    </section>
    
                    
    {{-- <div class="container mt-5 pt-5">
        <div class="alert alert-danger text-center">
            <h2 class="display-3">404</h2>
            <p class="display-5">Oops! Halaman Tidak Ditemukan.</p>
        </div>
    </div> --}}
</body>
</html>