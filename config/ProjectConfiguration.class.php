<?php
//C:\dev\sfprojects\lib\vendor\symfony\lib\autoload
// old : require_once 'C:\\Program Files\\Cygwin\\home\\sfprojects\\lib\\vendor\\symfony\\lib/autoload/sfCoreAutoload.class.php';
//require_once 'C:\\dev\\sfprojects\\lib\vendor\\symfony\\lib/autoload/sfCoreAutoload.class.php';
require_once 'C:\\Users\\pinouchon\\Documents\\projects\\symfony1.4\\lib\\vendor\\symfony\\lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();


class ProjectConfiguration extends sfProjectConfiguration {
  public function setup() {
    $this->enablePlugins(array(
        'sfDoctrinePlugin',
        'sfDoctrineGuardPlugin',
        'sfFormExtraPlugin'
    ));
    
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
  }
}
