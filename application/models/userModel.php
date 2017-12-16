<?php
/**
 * User model class
 */
class userModel extends Model{

    protected function init(){

    }
    public function login($data){

        $sth = $this->db->prepare("SELECT user_id
            FROM user
            WHERE login = :login AND pwd = :pwd"
        );
        $sth->execute(array(
            ':login' => $data['login'],
            ':pwd' => $data['pwd']
        ));

        $datas = $sth->fetch();

        $count = $sth->rowCount();
        global $cfg;
        if ($count > 0) {
            //login
            Session::init();
            Session::set('loggedIn', true);
            Session::set('user_id', $datas['user_id']);
            $url = DS.$cfg['project']['basedir'].DS.'user'.DS;
            header("Location: {$url}");
        } else {
            $url = DS.$cfg['project']['basedir'].DS;
            header("Location: {$url}");
        }
    }
}
