@extends('Template.layout')
@section('seccion5')
        <!-- Contact -->
            <article id="contact" class="wrapper style4">
				<div class="container medium">
					<header>
						<h2>I can hear you!</h2>
						<p>I want to know what do you think about the site</p>
					</header>
					<div class="row">
						<div class="col-12">
							<form method="post" action="#">
								<div class="row">
									<div class="col-6 col-12-small">
										<input type="text" name="name" id="name" placeholder="Name" />
									</div>
									<div class="col-6 col-12-small">
										<input type="text" name="email" id="email" placeholder="Email" />
									</div>
									<div class="col-12">
										<input type="text" name="subject" id="subject" placeholder="Subject" />
									</div>
									<div class="col-12">
										<textarea name="message" id="message" placeholder="Message"></textarea>
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Send Message" /></li>
											<li><input type="reset" value="Clear Form" class="alt" /></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
						<div class="col-12">
							<hr />
							<h3>This are my social sites.</h3>
							<ul class="social">
								<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
								<li><a href="#" class="icon brands fa-youtube"><span>YouTube</span></a></li>
							</ul>
							<hr />
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; </li><li>Designed by: Marco Hernández <a href="">UNIVERSIDAD POLITÉCNICA DE TECÁMAC</a></li>
						</ul>
					</footer>
				</div>
			</article>
@endsection