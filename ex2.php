<?php

    class Pagina{
        //Relação Has-many, uma página, várias tags
        private $tags;
        
        public function Pagina(){
            $this->tags = array();
        }
        //O type hint em $tag indica que podemos usar o
        //Polimorfismo de subtipos
        public function inserirTag(){
            $this->tag[] = $tag;
        }
        
        public function listarConteudo(){
            return $this->tag[] = $tag;
            //Acontece por causa da herança
            echo $t->getInnerHTML();
            //instanceof, usado por causa da herança,
            //compara se $t é uma instância de Form para
            //usar o getType
            if($t instanceof Form){
                echo $t->getType();
            }
        }
        
?>