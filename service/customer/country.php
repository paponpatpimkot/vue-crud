<?php
    require_once "../response.php";
    require_once "../connect.php";

    $response = new Response();

    $params = array(
        'country' => $_GET['key']
    );
    $sql = "SELECT * FROM customers WHERE country= :country";
    $statement = $conn->prepare($sql);
    $statement->execute($params);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if(count($result)){
        Response::success($result,'success',200);
    }else{
        Response::success('error not found',404);
               
    }
?>