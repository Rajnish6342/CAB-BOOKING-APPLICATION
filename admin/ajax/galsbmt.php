<?php 
$response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
); 
 
// If form is submitted 
if(isset($_POST['txtimg']) || isset($_POST['img'])){ 
    // Get the submitted form data 
    $name = $_POST['txtimg']; 
    $img=$_FILES["img"]['name'];
  
     
    // Check whether submitted data is not empty 
    if(!empty($name))
    { 
        $uploadStatus = 1; 
             
           
            if($uploadStatus == 1){ 
                // Include the database config file 
                include_once 'conn.php'; 
                 
                // Insert form data in the database 
                $insert = $con->query("INSERT INTO gallery (gtitle,gmig) VALUES ('".$name."','".$img."')"); 
                 
                if($insert){ 
                    move_uploaded_file($_FILES["img"]["tmp_name"],"uploads/gallery/".$_FILES["img"]["name"]);
                    $response['status'] = 1; 
                    $response['message'] = 'Form data submitted successfully!'; 
                } 
            } 
        
    }
    else{ 
         $response['message'] = 'Please fill all the mandatory fields (name and email).'; 
    } 
} 
 
// Return response 
echo json_encode($response);