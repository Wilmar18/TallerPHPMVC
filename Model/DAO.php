<?php

require_once('DB.php');

class DAO
{

    private $connection;

    public function __construct()
    {
        $this->connection = DB::getInstance();
    }


    public function query($sql)
    {
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectAll()
    {
        $sql = "SELECT * FROM {$this->table}";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }


    public function selectById($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $id);
        $stm->execute();
        $res = $stm->fetch(PDO::FETCH_ASSOC);
        if ($res == false) {
            return null;
        }
        return $res;
    }

    public function insert($descripcion, $campo3, $campo4)
    {

        $sql = "INSERT INTO tabla1 (descripcion, campo3, campo4) VALUES (:ide, :nom, :ape)";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(':ide', $descripcion);
        $stm->bindParam(':nom', $campo3);
        $stm->bindParam(':ape', $campo4);
        $stm->execute();
        $res = $stm->fetch(PDO::FETCH_ASSOC);
        if ($res == false) {
            return "Datos Cargados";
        }
        return $res;

    }

    public function delete($id)
    {
        $sql = "DELETE FROM tabla1 WHERE id =?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $id);
        $stm->execute();
        $res = $stm->fetch(PDO::FETCH_ASSOC);
        if ($res == false) {
            return "Datos Borrados";
        }
        return $res;


    }

    public function update($id, $descripcion, $campo3, $campo4)
    {
        $sql = "UPDATE tabla1 SET descripcion=:ide, campo3=:nom, campo4=:ape WHERE ID=:ID";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(':ID', $id);
        $stm->bindParam(':ide', $descripcion);
        $stm->bindParam(':nom', $campo3);
        $stm->bindParam(':ape', $campo4);
        $stm->execute();
        $res = $stm->fetch(PDO::FETCH_ASSOC);
        if ($res == false) {
            return "Datos Cargados";
        }
        return $res;
    }


    //----------------------------------------------------------------------------------------------------
    //POSTMODELTABLA2

    public function selectAll2()
    {
        $sql = "SELECT * FROM table2";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectById2($id)
    {
        $sql = "SELECT * FROM table2 WHERE id = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $id);
        $stm->execute();
        $res = $stm->fetch(PDO::FETCH_ASSOC);
        if ($res == false) {
            return null;
        }
        return $res;
    }

    public function insert2($fk,$campov1,$campoVar2,$campodt,$campod,$campoint,$campofloat,$email)
    {

            $sql = "INSERT INTO tabla2 (fk_ID, campoVarchar1, campoVarchar2,campodatetime,fecha,campoint,campofloat,campoemail) 
            VALUES (:fk,:campoVar1,:campoVar2,:campodt,:campod,:campoint,:campofloat,:email)";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(':fk', $fk);
        $stm->bindParam(':campoVar1', $campov1);
        $stm->bindParam(':campoVar2', $campoVar2);
        $stm->bindParam(':campodt', $campodt);//YYYY-MM-DD hh:mm:ss
        $stm->bindParam(':campod', $campod);//'YYYY-MM-DD
        $stm->bindParam(':campoint', $campoint);
        $stm->bindParam(':campofloat', $campofloat);
        $stm->bindParam(':email', $email);
        $stm->execute();
        $res = $stm->fetch(PDO::FETCH_ASSOC);
        if ($res == false) {
            return "Datos Cargados";
        }
        return $res;

    }

    public function delete2($id)
    {
        $sql = "DELETE FROM tabla2 WHERE id =?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $id);
        $stm->execute();
        $res = $stm->fetch(PDO::FETCH_ASSOC);
        if ($res == false) {
            return "Datos Borrados";
        }
        return $res;


    }

    public function update2($id,$campov1,$campoVar2,$campodt,$campod,$campoint,$campofloat,$email)
    {
        $sql = "UPDATE tabla2 SET campoVarchar1=:campoVar1, campoVarchar2=:campoVar2,campodatetime=:campodt,
        campodate=:campod,campoint=:campoint,campofloat=:campofloat,campoemail=:email WHERE ID=:ID";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(':ID', $id);
        $stm->bindParam(':campoVar1', $campov1);
        $stm->bindParam(':campoVar2', $campoVar2);
        $stm->bindParam(':campodt', $campodt);//YYYY-MM-DD hh:mm:ss
        $stm->bindParam(':campod', $campod);//'YYYY-MM-DD
        $stm->bindParam(':campoint', $campoint);
        $stm->bindParam(':campofloat', $campofloat);
        $stm->bindParam(':email', $email);
        $stm->execute();
        $res = $stm->fetch(PDO::FETCH_ASSOC);
        if ($res == false) {
            return "Datos Cargados";
        }
        return $res;
    }



    //--------------------------------------------------------------------------------------------------
    //Busqueda por fechas 

    public function busquedaf($fecha_ini,$fecha_fin){
        $sql = "SELECT * FROM tabla2 WHERE fecha BETWEEN :fechaini  AND :fechafin";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(':fechaini',$fecha_ini);
        $stm->bindParam(':fechafin',$fecha_fin);
        $stm->execute();
        $res = $stm->fetch(PDO::FETCH_ASSOC);
        if ($res == false) {
            return NULL;
        }
        return $res;
    }
}