<?php
// this function will return one of created btn template
// caption=btn caption com
// url=hyperlink com
// color=btn color opt
// size=btn size opt
// class=you can add extra classes for Btns opt
// icon=icon for btn opt
function BtnTemplates($caption,$url,$color="",$size="xs",$class="",$icon="")
{
  switch ($caption) {
    case 'update':
    case 'edit':
      $color=$color=="" ? 'info' : $color;
      $icon=$icon=="" ? 'pencil' : $icon;
      break;

    case 'remove':
      $color=$color=="" ? 'danger' : $color;
      $icon=$icon=="" ? 'trash-o' : $icon;
      break;

    case 'act':
    case 'activate':
      $color=$color=="" ? 'success' : $color;
      $icon=$icon=="" ? 'refresh' : $icon;
      break;

      case 'deact':
      case 'deactivate':
        $color=$color=="" ? 'warning' : $color;
        $icon=$icon=="" ? 'ban' : $icon;
        break;

    default:
      # code...
      break;


  }
  echo CreateBtn($caption,$url,$color,$size,$class,$icon);

}

// this create a new custom btn
// caption=btn caption com
// url=hyperlink com
// color=btn color opt
// size=btn size opt
// class=you can add extra classes for Btns opt
// icon=icon for btn opt

function CreateBtn($caption,$url,$color="default",$size="sm",$class="",$icon="")
{
  if ($icon!="") {
    $icon_snippt='<i class="fa fa-'.$icon.'" aria-hidden="true"></i> ';
  }
  else {
    $icon_snippt=" ";
  }
  return '<a href="'.$url.'" class="btn btn-'.$color.' btn-'.$size.' '.$class.'">'.$icon_snippt.$caption.'</a>';

}








 ?>
