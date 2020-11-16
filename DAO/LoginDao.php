<?php

namespace Blog\DAO;

class LoginDao extends DAO{

    public static function login($user,$pwd)
    {
        
        $request=self::getCnx()->prepare("SELECT id FROM admin WHERE user=? AND pwd=?");
        $request->execute([$user,hash("sha256",$pwd)]);
        return $request->fetch()["id"];
    }
}