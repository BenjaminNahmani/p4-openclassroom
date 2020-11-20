<?php

namespace Blog\DAO;

class LoginDao extends DAO{

    public static function login($user,$pwd)
    { 

        $request=self::getCnx()->prepare("SELECT id,pwd FROM admin WHERE user=?");
        $request->execute([$user]);
        $res=$request->fetch();
        if($res)
        {
            if(password_verify($pwd,$res["pwd"]))
            {
                return $res["id"];
            }
        }

        return null;
    }
}