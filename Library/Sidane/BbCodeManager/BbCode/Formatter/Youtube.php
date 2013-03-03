<?php

class Sidane_BbCodeManager_BbCode_Formatter_Youtube
{
  public static function parseYoutube(array $tag, array $rendererStates, &$parentClass)
  {     
    $src = $tag['children'][0];
    
    return '<object width="425" height="350"><param name="movie" value="http://www.youtube.com/v/' . $src . '&amp;fs=1"></param><param name="allowFullScreen" value="true"></param><embed src="http://www.youtube.com/v/' . $src . '&amp;fs=1" type="application/x-shockwave-flash" width="425" height="350" allowfullscreen="true"></embed></object>';
  }
  
}