<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    function actors(){
        $actors = DB::table('actor')->get();
        return $actors;
    }

    //select * from actors where last_name = '$lastname';
    function actorsByLastname($lastname) {
        $actors = DB::table('actor')
                    ->where('last_name', '=', $lastname)
                    ->get();
        return $actors;
    }


    //select * from actors where last_name = '$lastname' and first_name = '$firstname';
    function actorsByName($lastname, $firstname){
        $actors = DB::table('actor')
                    ->where('last_name', '=', $lastname) //és kapcsolat van köztük
                    ->where('first_name', '=', $firstname)
                    ->get();
        return $actors;
    }

    // SELECT last_name, COUNT(*) AS actor_count
    // FROM actor
    // GROUP BY last_name

    function countActors(){
        $actors = DB::table('actor')
                    ->select('last_name', DB::raw('COUNT(*) AS actor_count'))
                    ->groupBy('last_name')
                    ->get();
        return $actors;
    }
}
