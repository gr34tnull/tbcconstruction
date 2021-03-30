<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ThinkBIG Creatives</title>

        <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.4/tailwind.min.css">
        <style>
            @font-face {
                font-family: digitalo;
                src: url({{asset('digitalo.otf')}});
            }
            .font-digitalo {
                font-family: digitalo !important;
            }
            .stroke-white {
                -webkit-text-stroke: 2px #FFFFFF;
            }
        </style>
    </head>
    <body class="font-digitalo">
        <div class="relative flex justify-center items-center bg-cover bg-no-repeat h-screen w-screen" style="background-image: url({{asset('bg.png')}})">
            <div class="flex justify-start items-center">
                <img class="w-auto h-32 px-2" src="{{asset('logo.png')}}">
            </div>
        </div>
    </body>
</html>
