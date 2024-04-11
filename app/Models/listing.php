<?php namespace App\Models;
class listings{
    public static function all(){
        return[
            [
                'id'=>1,
                'title'=>'listing one',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis veniam consectetur, ad dolorem voluptatibus aliquam vero et. Est ducimus praesentium pariatur ipsa molestiae aspernatur, non optio odit ex laudantium nisi.'

            ],

            [

                'id'=>2,
                'title'=>'listing one',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis veniam consectetur, ad dolorem voluptatibus aliquam vero et. Est ducimus praesentium pariatur ipsa molestiae aspernatur, non optio odit ex laudantium nisi.'

            ]
        ]
    ;}
    public static function find($id){
       $listing =self::all();
         foreach($listings as $listing){
            if($listing['id']== $id){
                return $listing;
            }
         }
    }
}