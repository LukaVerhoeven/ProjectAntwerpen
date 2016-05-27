@extends('layout')

@section('title')
  Projecttijdlijn
@stop
@extends('navigation-layout')
@section('content')
<html lang="en" class="no-js">
<head>

	<link rel="stylesheet" href="\css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="\css/timeline-style.css"> <!-- Resource style -->
	<script src="\js/timeline-modernizr.js"></script> <!-- Modernizr -->


</head>
<body>
  <div class="projectdiv">
	@if(!$project->milestones->isEmpty())
	<section id="cd-timeline" class="cd-container">


			@foreach ($project->milestones as $key=>$milestone)
			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-movie">
					<img src={{$milestone->milestone_image}} alt="Movie">
				</div>

				<div class="cd-timeline-content">
					<h2>{{$milestone->milestone_title}}</h2>
					<p>{{ str_limit( $milestone->milestone_info, 25) }}</p>
					<a href="info#fase{{$key+1}}" class="cd-read-more top-buffer" >Lees meer</a>
					<span class="cd-date">{{$milestone->start_date}}</span>
				</div>
			</div>
			@endforeach


		<!-- Img's:
			cd-icon-location.svg
			cd-icon-movie.svg
			cd-icon-picture.svg
		-->
		<!--  Kleuren (classes):
		 	cd-movie
			cd-picture
			cd-location
		-->


		<!-- <div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="\img/cd-icon-picture.svg" alt="Picture">
			</div>
			<div class="cd-timeline-content">
				<h1>{{$project->project_name}}</h1>

				<p>{{$project->info}}</p>
				<div class="col-xs-6 imgtile Tile1" style="height:150px"></div>
				<div class="col-xs-6 imgtile Tile2" style="height:150px"></div>

				<a href="uitleg#fase1" class="cd-read-more top-buffer">Lees meer</a>
				<span class="cd-date">Jan 14</span>
			</div> cd-timeline-content
		</div> <cd-timeline-block -->
		<!-- <div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="\img/cd-icon-picture.svg" alt="Picture">
			</div>  cd-timeline-img

			<div class="cd-timeline-content">
				<h1>Fase 3</h1>
				<h2>Titel van project</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
				<a href="uitleg#fase3" class="cd-read-more top-buffer">Lees meer</a>
				<span class="cd-date">Jan 24</span>
			</div>
		</div>

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<img src="\img/cd-icon-location.svg" alt="Location">
			</div>

			<div class="cd-timeline-content">
				<h1>Fase 4</h1>
				<h2>Titel van project</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
				<a href="uitleg#fase4" class="cd-read-more top-buffer">Lees meer</a>
				<span class="cd-date">Feb 14</span>
			</div>
		</div>

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<img src="\img/cd-icon-location.svg" alt="Location">
			</div>

			<div class="cd-timeline-content">
				<h1>Fase 5</h1>
				<h2>Titel van project</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
				<a href="uitleg#fase5" class="cd-read-more top-buffer">Lees meer</a>
				<span class="cd-date">Feb 18</span>
			</div>
		</div>

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-movie">
				<img src="\img/cd-icon-movie.svg" alt="Movie">
			</div>  cd-timeline-img

			<div class="cd-timeline-content">
				<h1>Fase 6</h1>
				<h2>Titel van project</h2>
				<p>This is the content of the last section</p>
				<a href="uitleg#fase6" class="cd-read-more top-buffer">Lees meer</a>
				<span class="cd-date">Feb 26</span>
			</div>
		</div>  -->
	</section>
	@else
		<div class="col-md-6 col-md-offset-4">
			<h3>Er is nog geen tijdlijn aangemaakt voor dit project.</h3>
		</div>
	@endif
</div>
<script type="text/javascript">
var d = document.getElementById("tijdlijn");
d.className += " active";
</script>

<script type="text/javascript"> var $nav_home ;</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="\js/timeline-main.js"></script> <!-- Resource jQuery -->
</body>
</html>


@stop
