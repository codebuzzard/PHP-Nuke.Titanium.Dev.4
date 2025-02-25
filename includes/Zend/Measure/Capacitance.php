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
 * Class for handling capacitance conversions
 *
 * @category   Zend for PHP-Nuke Titanium
 * @package    Zend_Measure
 * @subpackage Zend_Measure_Capacitance
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Measure_Capacitance extends Zend_Measure_Abstract
{
    const STANDARD = 'FARAD';

    const ABFARAD                = 'ABFARAD';
    const AMPERE_PER_SECOND_VOLT = 'AMPERE_PER_SECOND_VOLT';
    const CENTIFARAD             = 'CENTIFARAD';
    const COULOMB_PER_VOLT       = 'COULOMB_PER_VOLT';
    const DECIFARAD              = 'DECIFARAD';
    const DEKAFARAD              = 'DEKAFARAD';
    const ELECTROMAGNETIC_UNIT   = 'ELECTROMAGNETIC_UNIT';
    const ELECTROSTATIC_UNIT     = 'ELECTROSTATIC_UNIT';
    const FARAD                  = 'FARAD';
    const FARAD_INTERNATIONAL    = 'FARAD_INTERNATIONAL';
    const GAUSSIAN               = 'GAUSSIAN';
    const GIGAFARAD              = 'GIGAFARAD';
    const HECTOFARAD             = 'HECTOFARAD';
    const JAR                    = 'JAR';
    const KILOFARAD              = 'KILOFARAD';
    const MEGAFARAD              = 'MEGAFARAD';
    const MICROFARAD             = 'MICROFARAD';
    const MILLIFARAD             = 'MILLIFARAD';
    const NANOFARAD              = 'NANOFARAD';
    const PICOFARAD              = 'PICOFARAD';
    const PUFF                   = 'PUFF';
    const SECOND_PER_OHM         = 'SECOND_PER_OHM';
    const STATFARAD              = 'STATFARAD';
    const TERAFARAD              = 'TERAFARAD';

    /**
     * Calculations for all capacitance units
     *
     * @var array
     */
    protected $_units = [
        'ABFARAD'              => ['1.0e+9',      'abfarad'],
        'AMPERE_PER_SECOND_VOLT' => ['1',         'A/sV'],
        'CENTIFARAD'           => ['0.01',        'cF'],
        'COULOMB_PER_VOLT'     => ['1',           'C/V'],
        'DECIFARAD'            => ['0.1',         'dF'],
        'DEKAFARAD'            => ['10',          'daF'],
        'ELECTROMAGNETIC_UNIT' => ['1.0e+9',      'capacity emu'],
        'ELECTROSTATIC_UNIT'   => ['1.11265e-12', 'capacity esu'],
        'FARAD'                => ['1',           'F'],
        'FARAD_INTERNATIONAL'  => ['0.99951',     'F'],
        'GAUSSIAN'             => ['1.11265e-12', 'G'],
        'GIGAFARAD'            => ['1.0e+9',      'GF'],
        'HECTOFARAD'           => ['100',         'hF'],
        'JAR'                  => ['1.11265e-9',  'jar'],
        'KILOFARAD'            => ['1000',        'kF'],
        'MEGAFARAD'            => ['1000000',     'MF'],
        'MICROFARAD'           => ['0.000001',    'µF'],
        'MILLIFARAD'           => ['0.001',       'mF'],
        'NANOFARAD'            => ['1.0e-9',      'nF'],
        'PICOFARAD'            => ['1.0e-12',     'pF'],
        'PUFF'                 => ['1.0e-12',     'pF'],
        'SECOND_PER_OHM'       => ['1',           's/Ohm'],
        'STATFARAD'            => ['1.11265e-12', 'statfarad'],
        'TERAFARAD'            => ['1.0e+12',     'TF'],
        'STANDARD'             => 'FARAD'
    ];
}
