<?php
// Include and initialize DB class
require_once '../class/DB.class.php';
$db = new DB();

// Database table name and column ID
$tbName = 'tbusers';
$tbclID = 'clUrID';

// If the form is submitted
if(!empty($_POST['action_type'])){
    if($_POST['action_type'] == 'data'){
        // Fetch data based on row ID
        $conditions['where'] = array('clUrID' => $_POST['clUrID']);
        $conditions['return_type'] = 'single';
        $user = $db->getRows($tblName, $tbclID, $conditions);
        
        // Return data as JSON format
        echo json_encode($user);
    }elseif($_POST['action_type'] == 'view'){
        // Fetch all records
        $users = $db->getRows($tblName, $tbclID);
        
        // Render data as HTML format
        if(!empty($users)){
            foreach($users as $row){
                echo '<tr>';
                echo'<td class="bg-white top-0 p-1">'.$row["clUrID"].'</td>';
                echo'<td class="bg-white top-0 p-1">'.$row["clUrUsername"].'</td>';
                echo'<td class="bg-white top-0 p-1">'.$row["clUrPassword"].'</td>';
                echo'<td class="bg-white top-0 p-1">'.$row["clUrContactNum"].'</td>';
                echo'<td class="bg-white top-0 p-1">'.$row["clUrEmail"].'</td>';
                echo'<td class="bg-white top-0 p-1">'.$row["clUrRole"].'</td>';
                echo'<td class="bg-white top-0 p-1">'.$row["clUrStatus"].'</td>';
                echo'<td class="bg-white top-0 p-2">';
                    echo '  <button href="#" onclick="openModal('.'.update-modal'.')">
                                <span id="editIcon" class="iconify" 
                                    data-icon="bxs:edit" style="color: #77c9e3;" data-width="25"></span>
                            </button>';
                    echo '  <a href="#"> 
                                <span id="deleteIcon" class="iconify" 
                                    data-icon="ant-design:delete-filled" style="color: #d76c6c;" data-width="25"></span>
                            </a>';
                echo'</td>';
                echo '</tr>';
            }
        }else{
            echo '<tr><td colspan="8">No user(s) found...</td></tr>';
        }
    }elseif($_POST['action_type'] == 'add'){
        $msg = '';
        $status = $verr = 0;
        
        // Get user's input
        $clUrUsername = trim($_POST['clUrUsername']);
        $clUrPassword = trim($_POST['clUrPassword']);
        $clUrName = $_POST['clUrName'];
        $clUrContactNum = $_POST['clUrContactNum'];
        $clUremail = $_POST['clUremail'];
        $clUrLevel = $_POST['clUrLevel'];

                
        $clUsernamequery = "SELECT * FROM tbusers WHERE clUrUsername = '$clUrUsername'";
        $results = mysqli_query($connectdb, $clUsernamequery);
        $hashedPassword = password_hash($clUrPassword, PASSWORD_DEFAULT);
        
        // Validate form fields
        if(empty($clUrUsername)){
            $verr = 1;
            $msg .= 'Please enter your name.<br/>';
        }
        if(empty($clUremail) || !filter_var($clUremail, FILTER_VALIDATE_EMAIL)){
            $verr = 1;
            $msg .= 'Please enter a valid email.<br/>';
        }
        if(empty($clUrContactNum)){
            $verr = 1;
            $msg .= 'Please enter your phone no.<br/>';
        }
        //checks if there records with the same username
        if(mysqli_num_rows($results)>0){
            $verr = 1;
            $msg .= 'Username already exists<br/>';
        }
        if(strlen($clUrPassword)<6){
            $verr = 1;
            $msg .= 'Password must be 6 characters or more<br/>';
        }
        if(strlen($clUrUsername) < 6 || strlen($clUrUsername) > 16){
            $verr = 1;
            $msg .= 'Username must be 6 characters or more<br/>';
        }

        if($verr == 0){
            // Insert data in the database
            $userData = array(
                'clUrUsername'  => $clUrUsername,
                'clUrPassword'  => $hashedPassword,
                'clUrName'  => $clUrName,
                'clUrContactNum' => $clUrContactNum,
                'clUrEmail' => $clUrEmail,
                'clUrLevel' => $clUrLevel,
                'clUrRole' => $clUrLevel
            );
            $insert = $db->insert($tblName, $userData);
            
            if($insert){
                $status = 1;
                $msg .= 'User data has been inserted successfully.';
            }else{
                $msg .= 'Some problem occurred, please try again.';
            }
        }
        
        // Return response as JSON format
        $alertType = ($status == 1)?'alert-success':'alert-danger';
        $statusMsg = '<p class="alert '.$alertType.'">'.$msg.'</p>';
        $response = array(
            'status' => $status,
            'msg' => $statusMsg
        );
        echo json_encode($response);
    }elseif($_POST['action_type'] == 'edit'){
        $msg = '';
        $status = $verr = 0;
        
        if(!empty($_POST['id'])){
            // Get user's input
            $clUrUsername = trim($_POST['clUrUsername']);
            $clUrPassword = trim($_POST['clUrPassword']);
            $clUrName = $_POST['clUrName'];
            $clUrContactNum = $_POST['clUrContactNum'];
            $clUremail = $_POST['clUremail'];
            $clUrLevel = $_POST['clUrLevel'];
            
            // Validate form fields
            if(empty($name)){
                $verr = 1;
                $msg .= 'Please enter your name.<br/>';
            }
            if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
                $verr = 1;
                $msg .= 'Please enter a valid email.<br/>';
            }
            if(empty($phone)){
                $verr = 1;
                $msg .= 'Please enter your phone no.<br/>';
            }
            
            if($verr == 0){
                // Update data in the database
                $userData = array(
                    'name'  => $name,
                    'email' => $email,
                    'phone' => $phone
                );
                $condition = array('clUrID' => $_POST['clUrID']);
                $update = $db->update($tblName, $userData, $condition);
                
                if($update){
                    $status = 1;
                    $msg .= 'User data has been updated successfully.';
                }else{
                    $msg .= 'Some problem occurred, please try again.';
                }
            }
        }else{
            $msg .= 'Some problem occurred, please try again.';
        }
        
        // Return response as JSON format
        $alertType = ($status == 1)?'alert-success':'alert-danger';
        $statusMsg = '<p class="alert '.$alertType.'">'.$msg.'</p>';
        $response = array(
            'status' => $status,
            'msg' => $statusMsg
        );
        echo json_encode($response);
    }elseif($_POST['action_type'] == 'delete'){
        $msg = '';
        $status = 0;
        
        if(!empty($_POST['id'])){
            // Delate data from the database
            $condition = array('id' => $_POST['id']);
            $delete = $db->delete($tblName, $condition);
            
            if($delete){
                $status = 1;
                $msg .= 'User data has been deleted successfully.';
            }else{
                $msg .= 'Some problem occurred, please try again.';
            }
        }else{
            $msg .= 'Some problem occurred, please try again.';
        }  

        // Return response as JSON format
        $alertType = ($status == 1)?'alert-success':'alert-danger';
        $statusMsg = '<p class="alert '.$alertType.'">'.$msg.'</p>';
        $response = array(
            'status' => $status,
            'msg' => $statusMsg
        );
        echo json_encode($response);
    }
}

exit;
?>