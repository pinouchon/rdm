<?php
$menu = array(
    __('Apiculture') => 'index',
    __('Mes ruchers') => 'rucher',
    __('Mes racines en apiculture') => 'racine',
    __('Ma ruche vitrée') => 'vitree',
    __('Location de ruches') => 'location',
    __('Parrainage') => 'parrainage')
?>
<div id="leftColumn1">
  <div id="leftColumnContent">
    <h3><?php echo __('Liens') ?></h3>
    <ul>
<?php foreach ($menu as $title => $action): ?>
      <li>
        <?php
        $style = $action == sfContext::getInstance()->getActionName() ?
                array('class' => 'hover') : null;
        echo link_to($title, "apiculture/$action", $style)
        ?>
      </li>
<?php endforeach; ?>
    </ul>
  </div>
</div>