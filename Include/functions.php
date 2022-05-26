<?php
function authenticate_user($email,$password){
    if ($email == USER_NAME && $password == USER_PASSWORD){
        return $email && $password;
    }
};

function redirect($url) {
    header ("Location:$url");
};

function is_user_authenticated(){
    return isset($_SESSION["email"]);   
};

function ensure_user_is_authenticated() {
    if (!is_user_authenticated()) {
    redirect("login_setup.php");
    die();
}
    //if isset() returns true, that means user is logged in. Else, false means they are not.


};

?>
