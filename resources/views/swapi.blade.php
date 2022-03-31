@extends('Template.layout')

    @section('seccion4')
       
            <div class="col-4 col-6-medium col-12-small">
                <article class="box style2">
                    <a href="" class="image featured"><img src="https://as01.epimg.net/meristation/imagenes/2021/08/31/noticias/1630409487_516005_1630409560_portada_normal.jpg" alt="" /></a>
                        <h3><a href=""></a></h3>
                        <p>Yoda fue un miembro masculino de una especie misteriosa. Era un reverenciado 
                        <br>
                        Maestro Jedi que sirvió como Gran Maestro de la Orden Jedi en los últimos días de la República Galáctica.
                        <br>
                        Era famoso dentro de la Orden por su sabiduría, poderes de la Fuerza y combate con sables de luz, y vivió durante casi 900 años. 
                        <br>
                        Su tiempo durante los últimos días de la Orden Jedi y más allá lo convirtió en una figura consecuente en la historia galáctica    
                    </p>
                </article>
            </div>

					@foreach($bio as $bio)
                    <div>
					<div class="row">
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="" class="image featured"><img src="{!!$bio['image']!!}" alt="" /></a>
								<h3><a href="">{{$bio['name']}}</a></h3>
								<p>{{$bio['description']}}</p>
							</article>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="" class="image featured"><img src="{!!$bio['image']!!}" alt="" /></a>
								<h3><a href="">{{$bio['name']}}</a></h3>
								<p>{{$bio['description']}}</p>
							</article>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="" class="image featured"><img src="{!!$bio['image']!!}" alt="" /></a>
								<h3><a href="">{{$bio['name']}}</a></h3>
								<p>{{$bio['description']}}</p>
							</article>
						</div>
                    </div>
                    </div>
        @endforeach
    @endsection