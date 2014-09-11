<?php

class PostTableSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->delete();

        Post::create(array(
          'title' => 'Mi primera noticia!',
          'content' => 'Hola mundo desde el contenido de la noticia'
          ));

        Post::create(array(
          'title' => 'Mi segunda noticia!',
          'content' => 'Contenido de la noticia'
          ));

        Post::create(array(
          'title' => 'ya esto paso a la tercera noticia!',
          'content' => 'Contenido de la noticia 3'
          ));
    }

}
