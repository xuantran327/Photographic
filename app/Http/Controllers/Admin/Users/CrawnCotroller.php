<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

require('simple_html_dom.php');


class CrawnCotroller extends Controller
{
    public function crawn(){
        //galaxy ->https://wall.alphacoders.com/tag/4k-galaxy-wallpapers
        //food ->https://wall.alphacoders.com/by_category.php?id=12&name=Food+Wallpapers
        // the night ->https://wall.alphacoders.com/search.php?search=the+night
        // water ->https://wall.alphacoders.com/search.php?search=water
        // flower ->https://wall.alphacoders.com/by_collection.php?id=386
        // sky -> https://wall.alphacoders.com/search.php?search=sky
        //city in the night ->https://wall.alphacoders.com/search.php?search=city+in+the+night
        // spring ->https://wall.alphacoders.com/search.php?search=spring
        // vintage ->https://wall.alphacoders.com/search.php?search=vintage
        //firework ->https://wall.alphacoders.com/search.php?search=firework
        $html = file_get_html("https://beecost.vn/background-lap-lanh-hong.html");
        $img= $html->find("img");
        // echo count($img);
        foreach($img as $i){
            $s= $i ->src;
            echo "<img src='$s'>";
            $image= 'img/'.basename($s);
            file_put_contents($image,file_get_contents($s));
            DB::table('image')->insert(['chude'=>'LapLanh','url'=>$image]);


        }




    }
    public function test(Request $req){
        if($req->input("termSearch")!=null && $req->input("termSearch")!=""){
            return DB::table('image')->where('chude', 'like','%'.$req->input("termSearch") ."%" )->inRandomOrder()->paginate(15);
       }
        return DB::table('image')->inRandomOrder()->paginate(15);
    }
}
