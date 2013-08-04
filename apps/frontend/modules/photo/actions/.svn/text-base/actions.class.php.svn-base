<?php

/**
 * photo actions.
 *
 * @package    rdm
 * @subpackage photo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class photoActions extends sfActions {
  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request) {
    $names = array(
        'hrp1-pays-basque'=>'HRP 1 - Pays Basque',
        'hrp2-pic-d-ory-pic-d-anie'=>'HRP 2 - Pic d\'ory - pic d\'anie',
        'hrp'=>'Haute Route Pyrénéenne',
        'hrp3'=>'HRP 3 - ',
        'hrp4'=>'HRP 4 - ',
        'hrp5'=>'HRP 5 - ',
        'hrp6'=>'HRP 6 - ',
        'hrp7'=>'HRP 7 - ',
        'hrp8'=>'HRP 8 - ',
        'mont-blanc'=>'Mont Blanc',
        'roanne-cassis'=>'Roanne Cassis',
        'roanne-cassis-1'=>'Roanne Cassis 1',
        'roanne-cassis-2'=>'Roanne Cassis 2',
        'roanne-nice'=>'Roanne Nice',
        'roanne-nice1'=>'Roanne Nice 1',
        'roanne-nice2'=>'Roanne Nice 2',
        'roanne-nice3'=>'Roanne Nice 3',
        'roanne-nice4'=>'Roanne Nice 4',
        'ascension'=>'Ascension',
        'apiculture'=>'Apiculture',
        'cellules-royales'=>'Cellules rolayes',
        'la-recolte-2010-en-ruches-warre'=>'La récolte 2010 en ruches Warré',
        'le-materiel-et-la-preparation'=>'Le matériel et la préparation',
        'les-essaims'=>'Les essaims',
        'les-mortalites-mysterieuses'=>'Les mortalités mystérieuses',
        'les-ruches-au-printemps'=>'Les ruches au printemps',
        'les-ruches-sous-la-neige'=>'Les ruches sous la neige',
        'ma-ruche-vitree'=>'Ma ruche vitrée',

    );

    // default category
    $currentCategory = $request->getParameter('category');
    if (!$currentCategory) {
      $currentCategory = 'hrp';
    }
    // default subCategory
    $currentSubCategory = $request->getParameter('subcategory');
    if (!$currentSubCategory) {
      $currentSubCategory = 'hrp1-pays-basque';
    }

    $this->categories = self::scandirClean("images/upload");
    $this->categoriesWithSub = array();
    foreach ($this->categories as $tmp_category) {
      $this->categoriesWithSub[$tmp_category] = self::scandirClean("images/upload/$tmp_category");
    }
    $this->images = self::scandirClean("images/upload/$currentCategory/$currentSubCategory");
    $this->currentCategory = $currentCategory;
    $this->currentSubCategory = $currentSubCategory;
    $this->names = $names;
  }

  private function scandirClean($givenDir) {
    $files = scandir($givenDir);
    foreach ($files as $key=>$filename) {
      if ($filename == '.' || $filename == '..' || $filename == '.svn') {
        unset($files[$key]);
      }
    }
    return $files;
  }
}
