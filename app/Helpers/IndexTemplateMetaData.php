<?php

// add values for parameters of  view resources\views\vendor\adminlte\layouts\index_template.blade.php
// parameters
//   $data_array=>data array used in view
//   $create_or_update=>'c' ,'u'(c for create/store u for upodate)
//   $collapsable_name=>name display in collapsable box htmlheader_title
//   $route=>action of the form inside collapsable box
// returns
//   data array of view and paramter array of template merged

function IndexTemplateMetaData($data_array,$create_or_update,$collapsable_name,$route,$edit_id=0)
{
  if ($create_or_update=='c') {//store value
    $_method_value='post';
    $collapsable_title='create '.$collapsable_name;
    $submit_btn_title="create";
    $form_action='/'.$route;
  }
  else {
    $_method_value='put';
    $collapsable_title='edit '.$collapsable_name;
    $submit_btn_title="update";
    $form_action='/'.$route.'/'.$edit_id;
  }
  $meta_data_array=[
    'collapsable_title'=>$collapsable_title,
    'submit_btn_title'=>$submit_btn_title,
    'form_action'=>$form_action,
    '_method_value'=>$_method_value
  ];

  return array_merge($data_array,$meta_data_array);

}





 ?>
