<?php
    require_once "../response.php";
    require_once "../connect.php";

    $sql = "SELECT * FROM customers";
    $statement = $conn->query($sql);
    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if(count($result)){

        Response::success($result,'success',200);

        // $response = array(
        //     'status' => true,
        //     'response' => $result
        // );
        // http_response_code(200);
        // echo json_encode($response);
    }else{
        Response::success('error not found',404);
        // http_response_code(404);
        // echo json_encode(array('status' => false));        
    }
?>