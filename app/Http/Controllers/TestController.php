<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class user {
    public $name_utente;
    public $password;
    public  function __construct($name,$password=-1){
        $this -> name_utente=$name;
        $this -> password=$password;
        if($password===-1){
            $this -> password='ciao';
        }else{

            $this -> password=uniqid();
        }
    }
    public function get_string(){
        return $this -> name_utente ." ". $this -> password;
    }
}
// - definire classe User caratterizzata da nomeUtente, password
// - definire una funzione all'interno della classe User per ottenere una stringa
//   che rappresenti l'utente
// - all'interno del metodo del controller (home) istanziare un paio di oggetti
//   di tipo User (new User())
// - definire i relativi dati (username e password)
// - stampare risultati della getString() attraverso il dd

// - aggiungere il metodo __construct che acquisisca le 2 informazioni username e
//   password in maniera obbligatoria

// - definire il secondo parametro del costruttore (password) come opzionale e
//   nel caso non sia fornito valorizzare l'attributo corrispondente per mezzo
//   della funzione nativa del php uniqid()

class TestController extends Controller
{
    function home(){
        $user_1= new user('andrea','catania93');
        // $user_n->name_utente='andrea';
        // $user_n->password='catania93';
        $string= $user_1 ->get_string();
        $user_2= new user('fazio','catania93');
        $user_3= new user('ola');
        $user_4= new user('biagio','adrano');
        $users=[$user_4,$user_3,$user_2,$user_1];
        // dd($user_n,$string);
        // dd($users);
        $str='';
        foreach ($users as $u){
            $str .= $u->get_string().' ' ;

        };
        dd($str);
    }
    function home2(){
     return view('pages.home2');
    }
}
