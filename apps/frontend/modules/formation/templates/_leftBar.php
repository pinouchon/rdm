<?php $menu = array(
    __("L'apprentissage de l'apiculture pour un enfant")=>'index',
    __("L'abeille à l'école primaire")=>'primaire')
    //__("L'apprentissage de l'apiculture pour les grands")=>'racines')
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
          echo link_to($title, "formation/$action", $style)
          ?>
      </li>
      <?php endforeach;?>
    </ul>
  </div>
</div>