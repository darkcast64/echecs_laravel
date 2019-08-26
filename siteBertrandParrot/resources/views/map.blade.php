@extends('layouts.app')
<link href="{{asset('css/liste_sorties.css')}}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<body>
<h1>map</h1>

<script>

    console.log({{$sortie->CodePostal}});
    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
    $.ajax({

        type:'POST',

        url:'http://dev.virtualearth.net/REST/v1/Locations/FR/{{$sortie->CodePostal}}/{{$sortie->lieu}}/addressLine?includeNeighborhood=0&include=queryParse&maxResults=2&key=Ajy3mGZvajVbnZH_EEdn7YWZn-13faN_cviw7VmtFuhPQB-3e2gvwzHrBmVAtvu4',



        success:function(data){

            alert(data.success);

        }

    });

</script>
</body>
