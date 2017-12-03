<?php

function CheckStatus($object)
{
  if ($object->trashed()) {
    echo '<p>DEACTIVE <span class="pull-right">'.BtnTemplates('act',NULL,NULL,NULL).'</span></p>';
  }
  else {
    echo '<p>ACTIVE <span class="pull-right">'.BtnTemplates('deact',NULL,NULL,NULL).'</span></p>';

  }

  // echo '<div class="container"><span>ACTIVE</span><div class="pull-right">ffffff</div></div>';
}


?>
