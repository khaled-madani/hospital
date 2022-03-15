<!DOCTYPE html>
<html lang="ar" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Not Allowed | {{ env('APP_NAME') }}</title>
    <style>
        body{
            /* direction: rtl; */
            margin: 0;
            padding: 0;

        }
        .error{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-size: 3rem;
            /* background-color: rgba(255, 46, 46, 0.2) */

        }
        h1{
            margin: 0
        }
    </style>
</head>
<body>
    <div class="error">
        {{-- <h1>اطلع يا كلب </h1> --}}
        <img src="{{ asset('images/not_allowed.jpg') }}" width="400" alt="not_allowed">
    </div>
</body>
</html>
