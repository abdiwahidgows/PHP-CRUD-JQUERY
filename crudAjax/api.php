<?php

header('Content-type: application/json');



// readAll
// insertALL
// updateALL
// deleteALL
include 'conn.php';
$action = $_POST['action'];
function readAll($conn){


    $data = array();
    

    $query = 'SELECT *FROM students';

    $result = $conn->query($query);
    

    if($result){

        while($row = $result->fetch_assoc()){

            $data [] = $row;
        }
        $message = array('status'=> true , 'data' => $data);

    }else{
        $message = array('status' => false , 'data' => $conn->error);
    }

    echo json_encode($message);

}


function read($conn){


    $data = array();
    $id = $_POST['id'];
    

    $query = "SELECT *FROM students where id ='$id'";

    $result = $conn->query($query);
    

    if($result){

        while($row = $result->fetch_assoc()){

            $data [] = $row;
        }
        $message = array('status'=> true , 'data' => $data);

    }else{
        $message = array('status' => false , 'data' => $conn->error);
    }

    echo json_encode($message);

}
 


// Function Insert 
function regestredAll($conn){
    $student_id = $_POST['id'];
    $student_name = $_POST['name'];
    $student_class = $_POST['class'];
    $data = array();

    $query="INSERT INTO students(id ,name , class) VALUES('$student_id','$student_name','$student_class')";

    $result = $conn->query($query);

    if($result){

        // $data[] = $result;

        $data= array("status" => true , "data" => "Resgistered SuccessFully");
    }else{
        $data= array('status' => false , 'data' => $conn->error);
    }
    echo json_encode($data);
}
// Function Update
function update($conn){
    $student_id = $_POST['id'];
    $student_name = $_POST['name'];
    $student_class = $_POST['class'];
    $data = array();

    $query="UPDATE students set name = '$student_name' , class = '$student_class' where id = '$student_id'";

    $result = $conn->query($query);

    if($result){

        // $data[] = $result;

        $data= array("status" => true , "data" => "updated SuccessFully");
    }else{
        $data= array('status' => false , 'data' => $conn->error);
    }
    echo json_encode($data);
}
// Funciton Delete
function deletestudents($conn){


    $data = array();
    $id = $_POST['id'];
    

    $query = "DELETE FROM students where id ='$id'";

    $result = $conn->query($query);
    

    if($result){

      
        
        $message = array('status'=> true , 'data' => $data);

    }else{
        $message = array('status' => false , 'data' => $conn->error);
    }

    echo json_encode($message);

}


if(isset($action)){
    $action($conn);
}
else{
    echo 'action is required';
}



?>