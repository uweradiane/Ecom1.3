<?php
function nameLengthIsvalid($nameToValid)
{
    //minimum 2 max 10
    $length = strlen($nameToValid);
    $responses = [
        'isValid'=>true,
        'msg'=>''
    ];
    if ($length <2){
        $responses = [
            'isValid'=>false,
            'msg'=>'Nom trop court'
        ];
    }
    elseif($length >10){
        $reponses=[
            'isValid'=>false,
            'msg'=>'Nom trop court'
        ];
    }
    return $responses;
};
function addSalt($nameToSalt){
    $salt = 'unPeuDeSe1123!';
    $saltedName = $salt.$nameToSalt.$salt;
    return $saltedName;
}
function encodeName($saltedName){
    $encodeName = sha1($saltedName);
    return $encodeName;
}

?>