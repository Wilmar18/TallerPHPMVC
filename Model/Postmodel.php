<?php

include 'Model/DAO.php';

class PostModel extends DAO
{


    protected $table = "tabla1";


    public function getAll()
    {
        $result = $this->selectAll();
        return $result;
    }

    
    public function getById($id) 
    {
        $result = $this->selectById($id);
        return $result;
    }


    public function store($descripcion,$campo3,$campo4) {
        $result = $this->insert($descripcion,$campo3,$campo4);
        return $result;
    }


    public function updatem($id,$descripcion,$campo3,$campo4) {
        $result = $this->update($id,$descripcion,$campo3,$campo4);
        return $result;
    }



    public function deletem($id) {
        $result = $this->delete($id);
        return $result;
    }

    
    //-------------------------------------------------------------------------------------------------
    //POSTMODELTABLA2

    public function getAll2()
    {
        $result = $this->selectAll2();
        return $result;
    }

    
    public function getById2($id) 
    {
        $result = $this->selectById2($id);
        return $result;
    }


    public function store2($fk,$campov1,$campoVar2,$campodt,$campod,$campoint,$campofloat,$email) {
        $result = $this->insert2($fk,$campov1,$campoVar2,$campodt,$campod,$campoint,$campofloat,$email);
        return $result;
    }


    public function updatem2($id,$campov1,$campoVar2,$campodt,$campod,$campoint,$campofloat,$email) {
        $result = $this->update2($id,$campov1,$campoVar2,$campodt,$campod,$campoint,$campofloat,$email);
        return $result;
    }



    public function deletem2($id) {
        $result = $this->delete2($id);
        return $result;
    }
    
 //----------------------------------------------------------------------------------------------------
 //Busqueda por fechas
 
 
    public function busquedam($fecha_ini, $fecha_fin){
        $result = $this->busquedaf($fecha_ini,$fecha_fin);
        return $result;
    }
}