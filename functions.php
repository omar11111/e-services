<?php 

// title function that echo page title
function getTitle(){
    global $pageTitle;
    if (isset($pageTitle)){
        echo $pageTitle;
    }else {
        echo 'Admin Panel';
    }
}