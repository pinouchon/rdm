<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/homepage.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php //include_http_metas() ?>
    <?php //include_metas() ?>
    <meta name="google-site-verification" content="3fcToyP0y-fI19nuBbBoQBLuJAbpknHdWsOrLQBiNnA" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Keywords" lang="fr" content="miel apiculture abeille petites reines crouzier" />
    <meta name="Keywords" lang="en" content="honney beekeeping bee small queens crouzier" />
    <meta name="Description" lang="fr" content="Découvrez la nature et l'apiculture sur lespetitesreinesdumiel.com. Vous pouvez également acheter du miel." />
    <meta name="Description" lang="en" content="Discover nature and beekeeping on lespetitesreinesdumiel.com. You can also buy honney." />

    <title>
      <?php if (!include_slot('title')): ?>
      Les petites reines du miel
      <?php endif; ?>
    </title>
    <link rel="shortcut icon" href="/images/default/logo_mini.png" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <!--[if IE 5]>
    <style type="text/css">
    #outerWrapper #contentWrapper #leftColumn1 {
      width: 200px;
    }
    </style>
    <![endif]-->
    <!--[if IE]>
    <style type="text/css">
    #outerWrapper #contentWrapper #content {
      zoom: 1;
    }
    </style>
    <![endif]-->

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-17553824-2']);
      _gaq.push(['_setDomainName', '.lespetitesreinesdumiel.com']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </head>
  <body>
    <div id="header">
      <div id="logo"><a href="#"><img src="<?php echo '/images/default/logo.png'?>" alt="Logo" width="254" height="61" /></a></div>
      <div id="links">
        <?php include_component('language', 'language') ?>
      </div>
      <div class="clearFloat"></div>
    </div>
    <div id="outerWrapper">
      <div id="gradient">
        <?php if (sfContext::getInstance()->getActionName() != 'image'):?>
        <div id="feature"></div>
        <?php endif;?>
        <div id="nav" style="margin-bottom: 10px;">
          <?php $menu = array(
              'main' => __('Accueil'),
              'apiculture' => __('Apiculture'),
              'formation' => __('Formation'),
              'nature' => __('Nature'),
              //'francais' => __('Francais'),
              //'stage' => __('Stage'),
              'order' => __('Acheter'),
              //'account' => __('Mon compte'),
              'about' => __('Me connaitre'),
              'photo' => __('Photos'),
              'contact' => __('Contact')
          );
          ?>
          <ul>
            <?php foreach ($menu as $module=>$title):?>
            <li>
                <?php
                $style = $module == sfContext::getInstance()->getModuleName() ?
                    array('class'=>'hover'):null;
                echo link_to($title, "$module/index", $style);
                ?>
            </li>
            <?php endforeach;?>
          </ul>
        </div>
        <div id="contentWrapper">
          <?php echo $sf_content ?>
          <br class="clearFloat" />
        </div>
        <div id="footer"><!--Footer <a href="#">Site Map</a> | <a href="#">Privacy Policy</a>--></div>

      </div>
    </div>
    <div id="credit">Dernière mise à jour : janvier 2011</div>
    <!--The following code must be left in place and unaltered for free usage of this theme. If you wish to remove the links, visit http://www.justdreamweaver.com/dreamweaver-templates.html and purchase a template license.-->
    <div id="credit"><a href="http://www.justdreamweaver.com/dreamweaver-templates.html">Free Dreamweaver templates</a> by <a href="http://www.justdreamweaver.com">JustDreamweaver.com</a></div>
  </body>
  <!-- InstanceEnd --></html>
