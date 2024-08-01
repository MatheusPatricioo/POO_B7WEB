<?php

interface Crud{
    public function create();
    public function read();
    public function update();
    public function delete();
}

/*quando se cria uma interface, vc faz um contrato
de que toda classe que herdar sua interface
vai obrigatoriamente UTILIZAR TODOS os metodos 
que tinham na sua interface*/

class Noticias implements Crud {

    public function create(){
        //logica para se criar uma noticia;
    }
    public function read(){
        //logica para se ler uma noticia;
    }
    public function update(){
        //logica para se atualizar uma noticia;
    }
    public function delete(){
        //logica para se deletar uma noticia;
    }
}