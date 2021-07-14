<?php

// class Facade{
//     public static function __callStatic($name, $args){
//         return app()->make(static::getFacadeAccessor())->$name();
//     }
// }

// class Fish{
//     public function swim(){
//         return "swimming";
//     }
// }

// app()->bind('fish', function(){
//     return new Fish;
// } );


// class FishFacade extends Facade{
//     public static function getFacadeAccessor(){
//         return 'fish';
//     }
// }

// dd(FishFacade::swim());


// dd(app()->make('Game'));

// dd(app());

Route::get('/', function () {
    return view('welcome');
});
