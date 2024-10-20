<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">




    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <style>

        body{
            direction: rtl;
        }
        td {
            font-family: 'Amiri Quran', serif;
        }
        /* .col-md-4{
            background-color:grey;
        } */
    </style>


</head>

<body>

    <div class="container">
<div class="row">

    @foreach ($alldata as $item)
    
<div class="col-md-4 bg-success m-3">
<div class="card" style="width: 18rem;">

<div class="card-body bg-grey">
    <h5 class="card-title">{{ $item['number'] }} </h5>
    <p class="card-title">{{ $item['name'] }} </p>
    <p class="card-title"> {{ $item['englishNameTranslation'] }} </p>
    <p class="card-title"> {{ $item['englishName'] }} </p>
    <p class="card-text">      {{ $item['numberOfAyahs'] }} |  {{ $item['revelationType'] }} </p>
    <a href="/read/{{$item['number']}}"  class="btn btn-dark">ReadSurah</a>
  </div>
</div>



</div>
               
              
                @endforeach
     
        
    </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>







