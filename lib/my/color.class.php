<?php

/**
 * PS translations
 * 121-26 green
 * 59-52 yellow
 * 301-35 purple
 * 20-33 brown
 */
class color
{
  public static function getColor()
  {
    switch (sfContext::getInstance()->getModuleName())
    {
      case 'main' :
        $color = 'default';
        break;
      case 'apiculture' :
        $color = 'yellow';
        break;
      case 'nature' :
        $color = 'green';
        break;
      case 'francais' :
        $color = 'brown';
        break;
      default:
        $color = 'default';
        break;
    }
    return $color;
  }

  public static function getStylesheetName()
  {
    return self::getColor().'.css';
  }
}

?>
