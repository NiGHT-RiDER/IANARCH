<?php
class studentHomeController 
{

/***
 *     __   __        ___     __                                                     
 *    |  \ /  \ |\ | |__     |__) \ /                                                
 *    |__/ \__/ | \| |___    |__)  |                                                 
 *                                                                                   
 *     __   __   __   __             __          __      __  ___  ___  ___           
 *    |__) /  \ / _` |  \  /\  |\ | /  \ \  / | /  `    /__`  |  |__  |__   /\  |\ | 
 *    |__) \__/ \__> |__/ /~~\ | \| \__/  \/  | \__,    .__/  |  |___ |    /~~\ | \| 
 *                                                                                   
 */


    public function __construct()
    {

    }

    public function run()
    {
        if(empty($_SESSION['authenticated']) || $_SESSION['userType'] != 'student')
        {
            header('Location:index.php?');
            die();
        }
        require_once('views/header.php');
        require_once('views/menuStudent.php');
    }


}
?>
