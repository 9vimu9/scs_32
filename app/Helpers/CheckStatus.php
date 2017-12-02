<?php

function CheckStatus($object)
{
  if ($object->trashed()) {
    echo "deactive ".BtnTemplates('activate','');
  }
  else {
    echo "active ".BtnTemplates('deactivate','');

  }
}


?>
