<?php

/* ====================
[BEGIN_COT_EXT]
Hooks=rc
[END_COT_EXT]
==================== */

/**
 * justygotop plugin
 *
 * @author Roffun
 * @copyright Copyright (c) 2014 - today: Roffun | https://github.com/Roffun
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL');
if ($cfg['plugin']['justygotop']['css'] == 1)
{
        Resources::addFile($cfg['plugins_dir'] . '/justygotop/css/justygotop.css');
}
