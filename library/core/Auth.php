<?php
/**
 *
 */
class Auth
{
    public static function handleLogin()
    {
        @session_start();
        $logged = $_SESSION['loggedIn'];
        if ($logged == false) {
            session_destroy();
            global $cfg;
            $url = DS.$cfg['project']['basedir'].DS;
            header("Location : {$url}");
            exit;
        }
    }

}
