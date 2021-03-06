@extends('layout')

@section('title')
  Projectinformatie
@stop
@extends('navigation-layout')
@section('scripts')
    <link rel="stylesheet" type="text/css" href="/css/uitleg.css">
    <link rel="stylesheet" type="text/css" href="/css/projectinfo.css">
   
@stop
@section('content')
<div class="container uitlegcontainer">
    <div class="row ">
        <div class="col-md-12 project-info" style="text-align: center;">
       
            <h2>Projectinformatie</h2>
            <br>

             <div class="align container">
            <h5><i class="fa fa-calendar-check-o">  </i> Begindatum: {{  $project->start_date    }}</h5>
            <h5><i class="fa fa-calendar-times-o">  </i> Einddatum:  {{  $project->end_date      }}</h5>
            <h5><i class="fa fa-map-marker">        </i> Locatie:    {{  $project->location      }}</h5>
            <h5><i class="fa fa-location-arrow">    </i> Postcode:   {{  $project->postalcode    }}</h5>
            </div>

             <hr id="hr">
            <span>{{ $project->info }}</span>   
           
            
        </div>
    </div>
    <div class="uitleg">
    @foreach($projectfases as $key=>$fase)
        <div class="row  bg-fase" id="fase{{$key + 1}}">
                <div class="col-md-12 fase-text">
                   <div class="cd-timeline-img cd-movie top"><img src={{$fase->milestone_image}}></div>
                   <br>
                   <br> 
                   <br> 
                   <h2>{{ $fase->milestone_title}}</h2> 
                   <div class="fase-date"> <h5><i class="fa fa-calendar-check-o">  </i> Begindatum: {{  $fase->start_date    }}</h5>&nbsp;&nbsp;&nbsp;&nbsp;<h5><i class="fa fa-calendar-times-o">  </i> Einddatum:  {{  $fase->end_date      }}</h5>
                   </div>
                    <p class="info">{{ $fase->milestone_info }}</p>

                </div>
        </div>
    @endforeach
    </div>
</div>
<script type="text/javascript">    
var d = document.getElementById("info");
d.className += " active";
</script>
@stop