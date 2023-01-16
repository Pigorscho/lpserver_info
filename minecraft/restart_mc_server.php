<?php
shell_exec("minecraft/stop.sh");
shell_exec("minecraft/start.sh");
header('Location:  http://109.250.180.32/minecraft/minecraft.html?success=true');
?>