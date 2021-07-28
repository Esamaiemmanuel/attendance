<?php
        require_once 'db/conn.php';
        if(!$_GET['id']){
                // echo 'error';
        include 'includes/errormessage.php';
        header('location: viewrecords.php');


        }else{
                // get id value
                $id = $_GET['id'];
                // call delete function
                $result =$crud->deleteAttendee($id);
                // redirect to list
                if($result){
                        header("location: viewrecords.php");
                }else{
                        // echo'error';
        include 'includes/errormessage.php';

                }

        }

?>