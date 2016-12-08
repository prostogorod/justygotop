<?php

/**
 * justygotop plugin
 *
 * @author Roffun
 * @copyright Copyright (C) 2014 - today: Roffun | https://webcot.net/cotonti/extensions/justygotop-plugin
 * @license BSD
 */

require_once cot_langfile('justygotop', 'plug');

$MiniPut = $cfg['plugin']['justygotop'];

if ($cfg['jquery'])
{
        $justygotop = 'document.writeln(" <div class=\"Go-Up\"></div><div class=\"Go-Down\"></div> ");jQuery().ready(function(){jQuery(".Go-Up");jQuery(window).bind("scroll",function(){if(jQuery(window).scrollTop()>' .
                $MiniPut['jgt_minheight'] . '){jQuery(".Go-Up").fadeIn(' . $MiniPut['jgt_fade'] . ');}else jQuery(".Go-Up").fadeOut(' . $MiniPut['jgt_fade'] .
                ');});jQuery(".Go-Up").click(function(){jQuery("html, body").animate({scrollTop:0},' . $MiniPut['jgt_speedtop'] .
                ');});});jQuery().ready(function(){jQuery(".Go-Down");jQuery(window).bind("scroll",function(){if(jQuery(window).scrollTop()<=$(document).height()-"999"){jQuery(".Go-Down").fadeIn(' .
                $MiniPut['jgt_fade'] . ');}else jQuery(".Go-Down").fadeOut(' . $MiniPut['jgt_fade'] .
                ');});jQuery(".Go-Down").click(function(){jQuery("html, body").animate({scrollTop:$(document).height()},' . $MiniPut['jgt_speedtop'] . ');});})';

        Resources::embedFooter($justygotop);
}
