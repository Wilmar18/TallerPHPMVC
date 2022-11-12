<?php


require_once 'Model/PostModel.php';



class PostController 
{

    private $post;
    

    public function __construct()
    {
        $this->post = new PostModel();
    }

    
    public function list()
    {      
        $data = $this->post->getAll();

        header('Content-type:application/json;charset=utf-8');
        echo json_encode([
            'datos' => $data
        ]);

    }

    public function id($id)
    {
       
        $data = $this->post->getById($id);

        header('Content-type:application/json;charset=utf-8');
        echo json_encode([
            'datos' => $data
        ]);
    }
    
    public function insert($descripcion,$campo3,$campo4)
    {

        $data = $this->post->store($descripcion,$campo3,$campo4);

        header('Content-type:application/json;charset=utf-8');
        echo json_encode([
            'datos' => $data
        ]);
    }

    public function update($id,$descripcion,$campo3,$campo4)
    {
        $data = $this->post->updatem($id,$descripcion,$campo3,$campo4);

        header('Content-type:application/json;charset=utf-8');
        echo json_encode([
            'datos' => $data
        ]);
        
    }
    
    public function delete($id)
    {

        $data = $this->post->deletem($id);

        header('Content-type:application/json;charset=utf-8');
        echo json_encode([
            'datos' => $data
        ]);
        
    }

    //-----------------------------------------------------------------------------------------------------
    // POSTCONTROLLERTABLA2

    public function list2()
    {      
        $data = $this->post->getAll2();

        header('Content-type:application/json;charset=utf-8');
        echo json_encode([
            'datos' => $data
        ]);

    }
    public function id2($id)
    {
       
        $data = $this->post->getById2($id);

        header('Content-type:application/json;charset=utf-8');
        echo json_encode([
            'datos' => $data
        ]);
    }


    public function insert2($fk,$campov1,$campoVar2,$campodt,$campod,$campoint,$campofloat,$email)
    {

        $data = $this->post->store2($fk,$campov1,$campoVar2,$campodt,$campod,$campoint,$campofloat,$email);

        header('Content-type:application/json;charset=utf-8');
        echo json_encode([
            'datos' => $data
        ]);
    }


    public function update2($id,$campov1,$campoVar2,$campodt,$campod,$campoint,$campofloat,$email)
    {
        $data = $this->post->updatem2($id,$campov1,$campoVar2,$campodt,$campod,$campoint,$campofloat,$email);

        header('Content-type:application/json;charset=utf-8');
        echo json_encode([
            'datos' => $data
        ]);
        
    }

    public function delete2($id)
    {

        $data = $this->post->deletem2($id);

        header('Content-type:application/json;charset=utf-8');
        echo json_encode([
            'datos' => $data
        ]);
        
    }

    //-----------------------------------------------------------------------------------------------
    //Busqueda por fecha

    public function busqueda($fecha_ini,$fecha_fin){
        $data = $this->post->busquedam($fecha_ini,$fecha_fin);
        header('Content-type:application/json;charset=utf-8');
        echo json_encode([
            'datos' => $data
        ]);

    }

}





?>