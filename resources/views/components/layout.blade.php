<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

{{-- favicon --}}
<link rel="apple-touch-icon" sizes="57x57" href="img/icone/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/icone/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/icone/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/icone/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/icone/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/icone/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/icone/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/icone/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/icone/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/icone/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/icone/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/icone/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/icone/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
   

   {{-- cdn fowntosam --}}
  <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


   {{-- cdn swiper --}}
   
  <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  
  {{-- cdn aos --}}
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  {{-- cdn google fonts  --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,900;1,100;1,300;1,400;1,900&display=swap" rel="stylesheet">
  


    <title>Presto.it</title>
</head>
<body>
<x-navbar/>
<main>
{{$slot}}
</main>














<x-footer/>
{{-- box-icon --}}
{{-- 
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script> --}}

{{-- cdn aos --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


{{-- script.js --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



</body>
</html>