<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bali Terra Living - Premium Real Estate in Bali</title>
    @vite(['resources/css/app.css'])
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body class="font-sans text-earth bg-cream">
    <x-landing-page.nav.index />
    {{$slot}}
    <x-landing-page.layouts.footer />
</body>
</html>
