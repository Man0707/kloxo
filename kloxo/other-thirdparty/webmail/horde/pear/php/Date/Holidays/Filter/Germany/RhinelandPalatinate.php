<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
/**
 * Filter for holidays in RhinelandPalatinate.
 *
 * PHP Version 4
 *
 * Copyright (c) 1997-2008 The PHP Group
 *
 * This source file is subject to version 3.0 of the PHP license,
 * that is bundled with this package in the file LICENSE, and is
 * available at through the world-wide-web at
 * http://www.php.net/license/3_01.txt.
 * If you did not receive a copy of the PHP license and are unable to
 * obtain it through the world-wide-web, please send a note to
 * license@php.net so we can mail you a copy immediately.
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @author   Mark Wiesemann <wiesemann@php.net>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id: RhinelandPalatinate.php,v 1.7 2008/03/17 11:37:49 kguest Exp $
 * @link     http://pear.php.net/package/Date_Holidays
 */

/**
 * Filter that only accepts official holidays in Rhineland-Palatinate.
 *
 * @category   Date
 * @package    Date_Holidays
 * @subpackage Filter
 * @author     Carsten Lucke <luckec@tool-garage.de>
 * @author     Mark Wiesemann <wiesemann@php.net>
 * @license    http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version    CVS: $Id: RhinelandPalatinate.php,v 1.7 2008/03/17 11:37:49 kguest Exp $
 * @link       http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Filter_Germany_RhinelandPalatinate extends Date_Holidays_Filter_Whitelist
{
    /**
     * Constructor.
     */
    function __construct()
    {
        parent::__construct(array('newYearsDay',
                                  'goodFriday',
                                  'easterMonday',
                                  'dayOfWork',
                                  'ascensionDay',
                                  'whitMonday',
                                  'corpusChristi',
                                  'germanUnificationDay',
                                  'allSaintsDay',
                                  'christmasDay',
                                  'boxingDay'));
    }

    /**
     * Constructor.
     *
     * Only accepts official holidays in Rhineland-Palatinate.
     */
    function Date_Holidays_Filter_Germany_RhinelandPalatinate()
    {
        $this->__construct();
    }
}
?>