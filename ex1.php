<?php

class Tag{
    private $innerHTML;
    
    public function Tag($innerHTML){
        $this->innerHTML = $innerHTML;
    }
    
    public function getInnerHTML(){
        return $this->innerHTML;
    }
    
}

Class P extends Tag{
    
    
}

Class Span extends Tag{
    
}

Class Div extends Tag{
    
    
}

Class Form extends Tag{
    private $type;
    
    public function Form($inneHTML, $type){
        parent::Tag($innerHTML);
        $this->type = type;
    }
    
    public function getType(){
        return this->type;
    }
    
}



?>