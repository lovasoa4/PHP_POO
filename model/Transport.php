<?php
class Transport{
    protected $type;
    protected $model;
    protected $marque;
    protected $immatriculation;

    public function __construct($type,$model, $marque, $immatriculation){
        $this->type=$type;
        $this->model=$model;
        $this->marque=$marque;
        $this->immatriculation=$immatriculation;

    }
 

    protected function deplace(){
        return "se deplace";
    }

    public function getType(){
        return $this->type;
    }

    public function getModel(){
        return $this->model;
    }
    public function getMarque(){
        return $this->marque;
    }
    public function getImmatricule(){
        return $this->immatriculation;
    }
}

?>