<?php

function image_click($filename, $comment = '')
{
  $title = "Cliquez sur l'image pour agrandir";
  $html = '';
  $html .= '<a href="'.image_url($filename, $comment).'">';
  $html .= '<img alt="'.$filename.'" title="'.$title.'" src="/images/custom/resize/'.$filename.'" />';
  $html .= '</a>';
  return $html;
}

function image_url($filename, $comment)
{
  return url_for('apiculture/image?image='.$filename.'&comment='.$comment);
}

?>
