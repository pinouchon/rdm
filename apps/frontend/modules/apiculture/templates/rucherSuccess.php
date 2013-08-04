<?php include_partial('leftBar')?>
<div id="content">
  <h1><?php echo __('Mes ruchers')?></h1>
  <p>
    <?php echo __('Je m’occupe de trois petits ruchers d’une dizaine de ruches chacun.')?>
  </p>
  <p>
    <?php echo __('Deux sont situés dans le jardin de mes parents.')?>
  </p>
  <?php use_helper('Image') ?>
  <?php echo image_click('rucher_bernard.jpg', 'Rucher constitué de 5 ruches Dadant plus une ruche Warré depuis le 20 mai 2010 (non présente sur la photo)')?>
  <?php echo image_click('rucher_mamie.jpg', 'Rucher  constitué de 10 ruche Dadant plus une ruche Warré vitrée')?>
  <p>
    <?php echo __('Le troisième est situé aux abords d’un petit village dans le département de la Loire, sur un petit
    terrain clos qui a été aménagé par mes parents au fil des ans. Ce petit rucher est un modèle en son
    genre, comme ceux que l’on décrit dans les livres d’apiculture : petites haies d’arbustes plantés sur la
    périphérie, arbres fruitiers, abris de jardin, clôture, acacias aux alentours et')?>
    <?php use_helper("Image")?>
    <a 
      href="<?php echo image_url('tilleul.jpg', 
      __('Tilleul de vingt-cinq ans. Pour ceux qui veulent créer leur rucher, avec de tels arbres, armez vous de patience...'))?>"
      title="Cliquez ici pour voir l'image d'un des deux tilleuls"><?php echo __('2 tilleuls sur la propriété')?></a>,
    <?php echo __('plantés par mes parents il y a vingt-cinq ans, donc jeunes arbres en devenir…')?>
  </p>
</div>
