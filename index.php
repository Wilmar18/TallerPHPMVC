<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require_once 'config/config.php';


// 1. Validar la existencia del parametro 'controller'
// 

$nameController = ucfirst($_GET['controller']) . 'Controller';
if ($nameController == "PostController") {
    $pathController = 'Controller/' . $nameController . '.php';
    // 3. Validar la existencia del parámetro 'action'
    $action = $_GET['action'];
    if ($action == "") {
        echo "No ha elegido una accion";
        exit;
    } else {
        require_once $pathController;


        switch ($action) {
            case 'busqueda':
                $fecha_ini = $_POST['fechaini'];
                $fecha_fin = $_POST['fechafin'];
                $controller = new $nameController();
                $controller->$action($fecha_ini,$fecha_fin);


                break;
            case 'list':
                $controller = new $nameController();
                $controller->$action();
                break;

            case 'list2':
                $controller = new $nameController();
                $controller->$action();
                break;
            case 'id':
                $id = $_GET['id'];
                $controller = new $nameController();
                $controller->$action($id);
                break;

            case 'id2':
                $id = $_GET['id'];
                $controller = new $nameController();
                $controller->$action($id);
                break;
            case 'insert':

                $descripcion = $_POST['descripcion'];
                $campo3 = $_POST['campo3'];
                $campo4 = $_POST['campo4'];

                if ($descripcion == ""& $campo3 == ""& $campo4 == "") {
                    echo "vector vacio";
                    break;
                } else {
                    $controller = new $nameController();
                    $controller->$action($descripcion, $campo3, $campo4);
                }
                break;

            case 'insert2':

                $fk = $_POST['fk_ID'];
                $campov1 = $_POST['campoVarchar1'];
                $campoVar2 = $_POST['campoVarchar2'];
                $campodt = $_POST['campodatetime']; //YYYY-MM-DD hh:mm:ss
                $campod = $_POST['campodate']; //'YYYY-MM-DD
                $campoint = $_POST['campoint'];
                $campofloat = $_POST['campofloat'];
                $email = $_POST['campoemail'];

                if ($fk == ""& $campov1 == ""& $campoVar2 == "") {
                    echo "vector vacio";
                    break;
                } else {
                    $controller = new $nameController();
                    $controller->$action($fk, $campov1, $campoVar2, $campodt, $campod, $campoint, $campofloat, $email);
                }
                break;

            case 'Update2':
                $id = $_POST['id'];
                $campov1 = $_POST['campoVarchar1'];
                $campoVar2 = $_POST['campoVarchar2'];
                $campodt = $_POST['campodatetime']; //YYYY-MM-DD hh:mm:ss
                $campod = $_POST['campodate']; //'YYYY-MM-DD
                $campoint = $_POST['campoint'];
                $campofloat = $_POST['campofloat'];
                $email = $_POST['campoemail'];
                if ($descripcion == ""& $campo3 == ""& $campo4 == ""& $id == "") {
                    echo "vector vacio";
                    break;
                } else {
                    $controller = new $nameController();
                    $controller->$action($id, $campov1, $campoVar2, $campodt, $campod, $campoint, $campofloat, $email);
                }
                break;

            case 'Update1':
                $id = $_POST['id'];
                $descripcion = $_POST['descripcion'];
                $campo3 = $_POST['campo3'];
                $campo4 = $_POST['campo4'];
                if ($descripcion == ""& $campo3 == ""& $campo4 == ""& $id == "") {
                    echo "vector vacio";
                    break;
                } else {
                    $controller = new $nameController();
                    $controller->$action($id, $descripcion, $campo3, $campo4);
                }
                break;

            case 'delete':

                $id = $_GET['id'];
                $controller = new $nameController();
                $controller->$action($id);

                break;

            case 'delete2':

                $id = $_GET['id'];
                $controller = new $nameController();
                $controller->$action($id);

                break;

            default:
                echo "action seleccionado no valido ";
                break;
        }
    }
} else {
    echo "Controlador seleccionado no valido ";
}



// 2. Validar la existencia del archivo










?>