<?php
////////////////////////////////////////////////////////////////////////////////BtnTemplates////////////////////////////////////////////////////////////
// templates for button
// use NULL for defult values
  // id=template id compulsory no defult values
  // $btn_type=submit or button defualt vlaue 'button'
  // $size=size of btn defult value 'sm'
  // $calss=u can add some extra classes defult value ''
function BtnTemplates($id,$btn_type,$size,$class)
{
  // CreateBtn($caption,$btn_type,$color,$size,$class,$icon,$tooltip,$confirmation_template)
  $caption="";

  switch ($id) {

    case 'update':
      return CreateBtn('update',$btn_type,'info',$size,$class,NULL,NULL,"update");
    break;

    case 'remove':
      $caption="remove";
    case 'remove_no_cap':
      return CreateBtn($caption,$btn_type,'danger',$size,$class,'trash-o','remove record permanantley',"update");
      break;

    case 'act':
      return CreateBtn('activate',$btn_type,'info',$size,$class,'refresh','activate deactive record',NULL);
      break;

    case 'deact':
      return CreateBtn('deactivate',$btn_type,'warning',$size,$class,'ban','deactivate active record',NULL);
      break;

    default:
      echo "wrong id";
      break;


  }

}

////////////////////////////////////////////////////////////////////////////////BtnLinkTemplates/////////////////////////////////////////////
// templates for button links
  // id=template id com no defult values
  // $url=href of link defualt vlaue '#'
  // $size=size of btn defult value 'sm'
  // $calss=u can add some extra classes defult value ''

function BtnLinkTemplates($id,$url,$size,$class)
{
  // CreateBtnLink($caption,$url,$color,$size,$class,$icon,$tooltip,$confirmation_template)
  $caption="";

  switch ($id) {

    case 'edit':
      $caption="edit";
    case 'edit_no_cap':
      return CreateBtnLink($caption,$url,'warning',$size,$class,'pencil','edit current record',NULL);
      break;

    case 'more_info':
      return CreateBtnLink('more',$url,'info',$size,$class,'info-circle','more analysis',NULL,NULL);
      break;

    case 'history':
      return CreateBtnLink('history',$url,'success',$size,$class,'info-history','history',NULL,NULL);
      break;

    default:
      echo "wrong id";
      break;
  }

}


////////////////////////////////////////////////////////////////////////////////BtnCore///////////////////////////////////////////
// common btn settings
//input NULL for a parameter to use defult value if there is any
  // caption=btn caption no defult value
  // color=btn color defult value 'default'
  // size=btn size defult value 'sm'
  // class=you can add extra classes for Btns
  // icon=icon for btn
  // tooltip=addd tooltip tecxt for btn
  // $confirmation_template=apply conformation template for given btn
function BtnCore($caption,$color,$size,$class,$icon,$tooltip,$confirmation_template)
{
  $color=$color==NULL ? 'default' : $color;
  $size=$size==NULL ? 'xs' : $size;
  $class=$class==NULL ? '' : $class;

  $icon_snippt="";
  $tooltip_snippt="";
  $confirmation_snippt="";

  if ($icon!=NULL) {
    $icon_snippt='<i class="fa fa-'.$icon.'" aria-hidden="true"></i> ';
  }

  if ($tooltip!=NULL) {
    $tooltip_snippt='data-toggle="tooltip" title="'.$tooltip.'"';
  }

  if ($confirmation_template!=NULL) {
    $confirmation_snippt=ConfirmationTemplates($confirmation_template);
  }

  return 'class="btn btn-'.$color.' btn-'.$size.' '.$class.' "'.$tooltip_snippt.' '.$confirmation_snippt.'>'.$icon_snippt.$caption;
}

///////////////////////////////////////////////////////////////////////////////CreateBtnLink//////////////////////////////////////
// creates a new custom btn
//input NULL for a parameter to use defult value if there is any
  // caption=btn caption no defult value
  // url=href value of link defualt '#'
  // color=btn color defult value 'default'
  // size=btn size defult value 'sm'
  // class=you can add extra classes for Btns
  // icon=icon for btn
  // tooltip=addd tooltip tecxt for btn
  // $confirmation_template=apply conformation template for given btn

function CreateBtnLink($caption,$url,$color,$size,$class,$icon,$tooltip,$confirmation_template)
{
  $url=$url==NULL ? '#' : $url;
  return '<a  href="'.$url.'" '.BtnCore($caption,$color,$size,$class,$icon,$tooltip,$confirmation_template).'</a>';

}

////////////////////////////////////////////////////////////////////////////////CreateBtn//////////////////////////////////////////////
// creates a new custom btn
//input NULL for a parameter to use defult value if there is any
  // caption=btn caption no defult value
  // btn_type=submit or button defualt value 'button'
  // color=btn color defult value 'default'
  // size=btn size defult value 'sm'
  // class=you can add extra classes for Btns
  // icon=icon for btn
  // tooltip=addd tooltip tecxt for btn
  // $confirmation_template=apply conformation template for given btn

function CreateBtn($caption,$btn_type,$color,$size,$class,$icon,$tooltip,$confirmation_template)
{
  $btn_type=$btn_type==NULL ? 'button' : $btn_type;
  return '<button  type="'.$btn_type.'" '.BtnCore($caption,$color,$size,$class,$icon,$tooltip,$confirmation_template).'</button>';


}

 ?>
