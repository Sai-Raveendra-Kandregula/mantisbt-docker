<?php

/**
 * Project:     Securimage: A PHP class for creating and managing form CAPTCHA images<br />
 * File:        securimage_play.php<br />
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or any later version.<br /><br />
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.<br /><br />
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA<br /><br />
 *
 * Any modifications to the library should be indicated clearly in the source code
 * to inform users that the changes are not a part of the original software.<br /><br />
 *
 * If you found this script useful, please take a quick moment to rate it.<br />
 * http://www.hotscripts.com/rate/49400.html  Thanks.
 *
 * @link https://github.com/dapphp/securimage Securimage PHP CAPTCHA
 * @copyright 2018 Drew Phillips
 * @author Drew Phillips <drew@drew-phillips.com>
 * @version 3.6.8 (May 2020)
 * @package Securimage
 *
 */

require_once dirname(__FILE__) . '/securimage.php';

// if using database, adjust these options as necessary and change $img = new Securimage(); to $img = new Securimage($options);
// see test.mysql.php or test.sqlite.php for examples
$options = array(
    'use_database'    => true,
    'database_name'   => '',
    'database_user'   => '',
    'database_driver' => Securimage::SI_DRIVER_MYSQL
);

$img = new Securimage();

// Other audio settings
//$img->audio_use_sox   = true;
//$img->audio_use_noise = true;
//$img->degrade_audio   = false;
//$img->sox_binary_path = 'sox';
//Securimage::$lame_binary_path = '/usr/bin/lame'; // for mp3 audio support

// To use an alternate language, uncomment the following and point at a suitable set of audio files
// $img->audio_path = $img->securimage_path . '/audio/es/';

// If you have more than one captcha on a page, one must use a custom namespace
// $img->namespace = 'form2';

// set namespace if supplied to script via HTTP GET
if (!empty($_GET['namespace'])) $img->setNamespace($_GET['namespace']);


// mp3 or wav format
$format = (isset($_GET['format']) && strtolower($_GET['format']) == 'mp3') ? 'mp3' : '';

$img->outputAudioFile($format);
