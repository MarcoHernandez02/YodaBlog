@extends('Template.layout')

@section('seccion2')

@foreach($participantsA as $participantsA)
        <!-- Game (API) -->
            <article id="work" class="wrapper style2">
				<div class="container">
					<header>
						<h2>¿You don't have any to do?.</h2>
						<p>Let's to find you something for you!</p>
					</header>
					<div class="row aln-center">
						<div class="col-4 col-6-medium col-12-small">
							<section class="box style1">
								<span class="icon solid featured fa-wallet"></span>
								<h3>PRICE</h3>
								<h4>{{$participantsA['price']}}</h4>
								<p>This is the price that cost to do.</p>
							</section>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<section class="box style1">
								<span class="icon solid featured fa-car"></span>
								<h3>ACTIVITY</h3>
								<h4>{{$participantsA['activity']}}</h4>
								<p>You have to do this activity, do you like it?</p>
							</section>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<section class="box style1">
								<span class="icon solid featured fa-users"></span>
								<h3>PARTICIPANTS</h3>
								<h4>{{$participantsA['participants']}}</h4>
								<p>Do you think is necessary a friend?</p>
							</section>
						</div>
					</div>
					<footer>
						<p>Click in the botton is below here if you wanna change the activity</p>
						<a id="reload" class="button large scrolly"> Try again </a>
					</footer>
				</div>
			</article>
			@endforeach

		
			
@endsection