<?php

function CreateBtnConfirmation($ok_caption,$ok_color,$cancel_caption,$cancel_color,$title,$content)
{
  echo 'data-toggle="confirmation"
       data-btn-ok-label="'.$ok_caption.'"
       data-btn-ok-icon="glyphicon glyphicon-share-alt"
       data-btn-ok-class="btn-'.$ok_color.'"
       data-btn-cancel-label="'.$cancel_caption.'"
       data-btn-cancel-icon="glyphicon glyphicon-ban-circle"
       data-btn-cancel-class="btn-'.$cancel_color.'"
       data-title="'.$title.'"
       data-content="'.$content.'"
       data-popout="true"';
}
// <span class="glyphicons glyphicons-sun"></span>




 ?>
