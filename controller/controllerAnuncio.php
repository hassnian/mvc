<?php
class controllerAnuncio{
    public function index(){
        require('./model/Anuncio.php');
        $anuncio=new Anuncio;
        $title=$anuncio->title;
        $body=$anuncio->body;
        
        require('./view/Anuncio.php');

        
        }


}







?>