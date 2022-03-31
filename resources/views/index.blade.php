@extends('Template.layout')

@section('seccion1')

		<!-- Home -->
		<article id="top" class="wrapper style1">
				<div class="container">
					<div class="row">
						<div class="col-4 col-5-large col-12-medium">
							<span class="image fit"><img src="http://thisjustgotrail.files.wordpress.com/2012/03/miyagiyoda1.jpg" alt="" /></span>
						</div>
						<div class="col-8 col-7-large col-12-medium">
							<header>
								<h1>Hi. I'm <strong>Yoda Mr. Miyagi </strong>.</h1>
							</header>
							<p>And this is <strong>my personal blog</strong>, a quiet and peace place where you can find information about me, or maybe, learn to how you can fight...</p>
							<a href="{{route('swapi')}}" class="button large scrolly">Learn about what I do</a>
						</div>
					</div>
				</div>
			</article>
			
		<!-- Portfolio -->
			<article id="portfolio" class="wrapper style3">
				<div class="container">
					<header>
						<h2>Here’s some aparitions that I have been</h2>
						<p>I hope you enjoy it!</p>
					</header>
					@foreach($info as $info)
					<div class="row">
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="" class="image featured"><img src="{!!$info['image']!!}" alt="" /></a>
								<h3><a href="">{{$info['name']}}</a></h3>
								<p>{{$info['description']}}</p>
							</article>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="" class="image featured"><img src="{!!$info['image']!!}" alt="" /></a>
								<h3><a href="">{{$info['name']}}</a></h3>
								<p>{{$info['description']}}</p>
							</article>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="" class="image featured"><img src="{!!$info['image']!!}" alt="" /></a>
								<h3><a href="">{{$info['name']}}</a></h3>
								<p>{{$info['description']}}</p>
							</article>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="" class="image featured"><img src="{!!$info['image']!!}" alt="" /></a>
								<h3><a href="">{{$info['name']}}</a></h3>
								<p>{{$info['description']}}</p>
							</article>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="" class="image featured"><img src="{!!$info['image']!!}" alt="" /></a>
								<h3><a href="">{{$info['name']}}</a></h3>
								<p>{{$info['description']}}</p>
							</article>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="" class="image featured"><img src="{!!$info['image']!!}" alt="" /></a>
								<h3><a href="">{{$info['name']}}</a></h3>
								<p>{{$info['description']}}</p>
							</article>
						</div>
					</div>
					@endforeach	
					<footer>
						<p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
						<a href="#contact" class="button large scrolly">Get in touch with me</a>
					</footer>
				</div>
			</article>	
			
@endsection