<?php $menu = array(
    __('Généralités')=>'index',
    __('Miel')=>'miel',
    __('Esssaims')=>'essaims')
    ?>
<div id="leftColumn1">
  <div id="leftColumnContent">
    <h3><?php echo __('Liens')?></h3>
    <ul>
      <?php foreach ($menu as $title=>$action):?>
      <li>
          <?php
          $style = $action == sfContext::getInstance()->getActionName() ?
              array('class'=>'hover'): null;
          echo link_to($title, "order/$action", $style)
          ?>
      </li>
      <?php endforeach;?>
    </ul>
  </div>
</div>