<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YodasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('yodas')->insert([
            'id' => '1',
            'name' => 'Episodios V y VI (1980 y 1983)',
            'description' => 'En los primeros bocetos, Lucas lo concebía como un ser alto y estilizado.',
            'image'=> 'https://i0.wp.com/hipertextual.com/wp-content/uploads/2020/01/hipertextual-yoda-ha-tenido-que-pasar-8-versiones-hasta-enamorar-publico-baby-yoda-2020882136.jpg?resize=780%2C366&quality=50&strip=all&ssl=1',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('yodas')->insert([
            'id' => '2',
            'name' => 'Episodio I: La amenaza fantasma (1999)',
            'description' => 'El resultado era tan distinto del personaje que todos conocían que no convenció a los espectadores.',
            'image'=> 'https://i0.wp.com/hipertextual.com/wp-content/uploads/2020/01/hipertextual-yoda-ha-tenido-que-pasar-8-versiones-hasta-enamorar-publico-baby-yoda-2020848720.jpg?resize=780%2C334&quality=50&strip=all&ssl=1',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('yodas')->insert([
            'id' => '3',
            'name' => 'Episodios II y III (2002 y 2005)',
            'description' => 'En estas dos entregas, Yoda es mucho más joven que en la saga original y tiene un buen número de escenas de acción',
            'image'=> 'https://i0.wp.com/hipertextual.com/wp-content/uploads/2020/01/hipertextual-yoda-ha-tenido-que-pasar-8-versiones-hasta-enamorar-publico-baby-yoda-2020680640.jpg?resize=780%2C330&quality=50&strip=all&ssl=1',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('yodas')->insert([
            'id' => '4',
            'name' => 'Star Wars: The Clone Wars (2003-2005)',
            'description' => 'El ataque de los clones y Star Wars: La venganza de los Sith, tienen lugar las guerras clon',
            'image'=> 'https://i0.wp.com/hipertextual.com/wp-content/uploads/2020/01/hipertextual-yoda-ha-tenido-que-pasar-8-versiones-hasta-enamorar-publico-baby-yoda-2020903115.jpg?resize=780%2C422&quality=50&strip=all&ssl=1',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('yodas')->insert([
            'id' => '5',
            'name' => 'Star Wars Rebels (2014-2018)',
            'description' => 'Esta vez el aspecto del Jedi verde es bastante distinto a como estamos acostumbrados. ',
            'image'=> 'https://i0.wp.com/hipertextual.com/wp-content/uploads/2020/01/hipertextual-yoda-ha-tenido-que-pasar-8-versiones-hasta-enamorar-publico-baby-yoda-2020364878.jpg?resize=780%2C439&quality=50&strip=all&ssl=1',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('yodas')->insert([
            'id' => '6',
            'name' => '',
            'description' => '',
            'image'=> '',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('yodas')->insert([
            'id' => '7',
            'name' => 'Star Wars: Forces of Destiny (2017-2018)',
            'description' => 'Una nueva versión de Yoda aparece en esta serie de cortos ambientados en el universo de Star Wars, de nuevo con la voz de Tom Kane.',
            'image'=> 'https://i0.wp.com/hipertextual.com/wp-content/uploads/2020/01/hipertextual-yoda-ha-tenido-que-pasar-8-versiones-hasta-enamorar-publico-baby-yoda-2020165550.jpg?resize=780%2C473&quality=50&strip=all&ssl=1',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
