<?php

function ConfirmationTemplates($type="")
{
  switch ($type) {
    case 'remove':
      return  CreateConfirmation('yes','danger','no','info','remove permanently','if you click yes this record will remove permanently');
      break;

    case 'update':
      return  CreateConfirmation('update','success','no','info','update record','update the redord');
      break;

    default:
      return  CreateConfirmation('yes','danger','no','info','','are you sure');
      break;
  }
}

function CreateConfirmation($ok_caption,$ok_color,$cancel_caption,$cancel_color,$title,$content)
{
  return 'data-toggle="confirmation"
        data-confirmation="true"
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
  // data-confirmation="true" is used as jqurey selector for select confirmation Btns
  // for more see public/js/home_made/bootstrap-confirmation.js
// <span class="glyphicons glyphicons-sun"></span>




 ?>
