<?php
/**
 * Zend Framework Modified for PHP-Nuke Titanium
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category  Zend
 * @package   Zend_Measure
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd     New BSD License
 * @version   $Id$
 */

/**
 * Implement needed classes
 */
require_once NUKE_ZEND_DIR.'Measure/Abstract.php';
require_once NUKE_ZEND_DIR.'Locale.php';

/**
 * Class for handling angle conversions
 *
 * @category   Zend for PHP-Nuke Titanium
 * @package    Zend_Measure
 * @subpackage Zend_Measure_Angle
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Measure_Angle extends Zend_Measure_Abstract
{
    const STANDARD = 'RADIAN';

    const RADIAN      = 'RADIAN';
    const MIL         = 'MIL';
    const GRAD        = 'GRAD';
    const DEGREE      = 'DEGREE';
    const MINUTE      = 'MINUTE';
    const SECOND      = 'SECOND';
    const POINT       = 'POINT';
    const CIRCLE_16   = 'CIRCLE_16';
    const CIRCLE_10   = 'CIRCLE_10';
    const CIRCLE_8    = 'CIRCLE_8';
    const CIRCLE_6    = 'CIRCLE_6';
    const CIRCLE_4    = 'CIRCLE_4';
    const CIRCLE_2    = 'CIRCLE_2';
    const FULL_CIRCLE = 'FULL_CIRCLE';

    /**
     * Calculations for all angle units
     *
     * @var array
     */
    protected $_units = [
        'RADIAN'      => ['1','rad'],
        'MIL'         => [['' => M_PI,'/' => '3200'],   'mil'],
        'GRAD'        => [['' => M_PI,'/' => '200'],    'gr'],
        'DEGREE'      => [['' => M_PI,'/' => '180'],    '°'],
        'MINUTE'      => [['' => M_PI,'/' => '10800'],  "'"],
        'SECOND'      => [['' => M_PI,'/' => '648000'], '"'],
        'POINT'       => [['' => M_PI,'/' => '16'],     'pt'],
        'CIRCLE_16'   => [['' => M_PI,'/' => '8'],      'per 16 circle'],
        'CIRCLE_10'   => [['' => M_PI,'/' => '5'],      'per 10 circle'],
        'CIRCLE_8'    => [['' => M_PI,'/' => '4'],      'per 8 circle'],
        'CIRCLE_6'    => [['' => M_PI,'/' => '3'],      'per 6 circle'],
        'CIRCLE_4'    => [['' => M_PI,'/' => '2'],      'per 4 circle'],
        'CIRCLE_2'    => [M_PI,                            'per 2 circle'],
        'FULL_CIRCLE' => [['' => M_PI,'*' => '2'],      'cir'],
        'STANDARD'    => 'RADIAN'
    ];
}
