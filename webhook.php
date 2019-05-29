<?php

$cmd = "cd /data/wwwroot/default/web &&sudo git pull";
$res = shell_exec($cmd);
if($res)
{
    echo "success";
}else{
    echo "error";
}
exit;