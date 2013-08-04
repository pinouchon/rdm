<?php

/**
 * apiculture actions.
 *
 * @package    rdm
 * @subpackage apiculture
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class apicultureActions extends sfActions {

  public function executeImage(sfWebRequest $request) {
    $this->image = $request->getParameter('image');
    $this->comment = $request->getParameter('comment');
  }

  public function executeIndex(sfWebRequest $request) {

  }

  public function executeRucher(sfWebRequest $request) {

  }

  public function executeRacine(sfWebRequest $request) {

  }

  public function executeVitree(sfWebRequest $request) {
    
  }

  public function executeLocation(sfWebRequest $request) {

  }

  public function executeParrainage(sfWebRequest $request) {

  }

}
