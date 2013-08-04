<script type="text/javascript" src="/js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="/js/galleria.js"></script>
<script type="text/javascript" src="/js/galleria.classic.js"></script>
<style type="text/css">
  #monmenu { cursor:pointer }
  #monmenu { border:1px solid #B0B0B0;}
  #monmenu {font-size: 90%;font-weight:bold;}
  #monmenu ul ul {display: none; position: absolute; left: 194px; top: -1px; margin:0px; padding: 0px; border: 1px solid #B0B0B0;}
  #monmenu li {list-style-type: none; position: relative; width: 190px; background-color: #E0E0E0; padding: 2px; margin: 0px}
  #monmenu li:hover, #monmenu li.sfhover {background-color: #69a1e9;}
  #monmenu li a {text-decoration:none;}
  #monmenu li:hover ul.niveau2, #monmenu li li:hover ul.niveau3, #monmenu li.sfhover ul.niveau2, #monmenu li li.sfhover ul.niveau3 {display: block}
  #monmenu li.plus {background-position:right; background-repeat: no-repeat; border-bottom: 1px solid #B0B0B0;}
</style>
<h2>
  Categories:
</h2>
<div id="monmenu">
  <ul class="niveau1">
    <?php foreach ($categoriesWithSub as $_currentCategory=>$subCategories):?>
    <li>
        <?php echo $names[$_currentCategory] ?>
      <ul class="niveau2">
          <?php foreach ($subCategories as $_currentSubCategory):?>
        <li><?php echo link_to($names[$_currentSubCategory], "photo/index?category=$_currentCategory&subcategory=$_currentSubCategory")?></li>
          <?php endforeach;?>
      </ul>
      <br/>
    </li>
    <?php endforeach;?>
  </ul>
</div>
<br/>
<br/><br/>
<h1><?php echo $names[$currentCategory].' / '.$names[$currentSubCategory]?></h1>
<div id="gallery">
  <?php foreach ($images as $image):?>
  <a href="/images/upload/<?php echo "$currentCategory/$currentSubCategory/$image"?>">
    <img src="/images/upload/<?php echo "$currentCategory/$currentSubCategory/$image"?>" alt="<?php echo $image?>" title="Pas de description"/>
  </a>
  <?php endforeach;?>
</div>
<script type="text/javascript">
  $('#gallery').galleria();
</script>
