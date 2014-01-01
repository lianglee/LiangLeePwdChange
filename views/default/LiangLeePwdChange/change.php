<?php
/** LiangLeePasswdChange
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @Package Liang Lee Framework
 * @subpackage LiangLeePwdChange
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2013.
 * @ide The Code is Generated by Liang Lee php IDE.
 * @File Change.php
 */
 
if(lee_loggedin_user){
forward();
}

$date = date('dym'); 
$username = get_input('user');
$user_session = get_user_by_username($username);
$hash = get_input('hash');

$hashg = leepwd_pwd($user_session);

if($hash == $hashg && !lee_loggedin_user) {

echo '<form method="post">';
echo '<input type="password" name="leeresetpassword"  />';
echo '<input type="submit" class="LiangLeeButton" /></form>';

$password =  get_input('leeresetpassword');

if(!empty($password) && force_user_password_reset($user_session->guid, $password)){
    
   system_messages('ok');
   forward(LiangLeeUrl::construct('login'));
}

} else { 

    echo 'Sorry the page your are requested is expired';
 
}