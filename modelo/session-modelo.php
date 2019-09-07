<?php
        if (!isset($_SESSION)) {
            session_start();
        }

    function cerrarSession()
    {
        unset($_SESSION['log']);
        session_destroy();
    }
        
    

