@extends('layouts.app')
<link href="{{asset('css/liste_sorties.css')}}" rel="stylesheet">

@section('content')
<h1>map</h1>
<p id="lieu">{{$sortie->lieu}}</p>
<p id="cp">{{$sortie->CodePostal}}</p>

<script>
    var lieu = document.getElementById('lieu').innerHTML;
    var cp=document.getElementById('cp').innerHTML;
    console.log(lieu);
    console.log(cp);
</script>


<script>

        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });
        $.ajax({

            type: 'POST',

            url: 'http://dev.virtualearth.net/REST/v1/Locations/FR/'+cp+'/'+lieu+'/addressLine?includeNeighborhood=0&include=queryParse&maxResults=2&key=Ajy3mGZvajVbnZH_EEdn7YWZn-13faN_cviw7VmtFuhPQB-3e2gvwzHrBmVAtvu4',
            crossDomain: true,
            dataType: 'jsonp',
            jsonp: "jsonp",
            headers: {  'Access-Control-Allow-Origin': '*' },
            success: function (data) {

                // console.log(data[resourceSets][0][resources][0][bbox]);
                console.log(data.resourceSets[0].resources[0].bbox);
            }

        });

</script>
@endsection
