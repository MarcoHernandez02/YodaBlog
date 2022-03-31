@extends('Template.layout')

@section('seccion2')

@foreach($datos as $datos)
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
								<span class="icon featured fa-thumbs-up"></span>
								<h3>PRICE</h3>
								<h4>{{$datos['price']}}</h4>
								<p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore.</p>
							</section>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<section class="box style1">
								<span class="icon solid featured fa-"></span>
								<h3>ACTIVITY</h3>
								<h4>{{$datos['activity']}}</h4>
								<p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore.</p>
							</section>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<section class="box style1">
								<span class="icon featured fa-thumbs-up"></span>
								<h3>PARTICIPANTS</h3>
								<h4>{{$datos['participants']}}</h4>
								<p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore.</p>
							</section>
						</div>
					</div>
					<footer>
						<p>Click in the botton is below here and find an especific activity</p>
						<a class="button large scrolly">See some of my recent work</a>
					</footer>
				</div>
			</article>
			@endforeach
@endsection