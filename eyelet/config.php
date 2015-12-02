<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Eyelet theme.
 *
 * @package    theme
 * @subpackage eyelet
 * @copyright  &copy; 2015-onwards G J Barnard in respect to modifications of the Bootstrap theme.
 * @author     G J Barnard - gjbarnard at gmail dot com and {@link http://moodle.org/user/profile.php?id=442195}
 * @author     Based on code originally written by Bas Brands, David Scotson and many other contributors.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$THEME->name = 'eyelet';

$THEME->yuicssmodules = array();
$THEME->parents = array('shoelace');

$THEME->lessfile = 'moodlealleyelet';
$THEME->lessvariablescallback = 'theme_eyelet_less_variables';
$THEME->extralesscallback = 'theme_eyelet_extra_less';

$THEME->sheets[] = 'eyelet';

$THEME->supportscssoptimisation = false;

$sidepreregions = array('side-pre', 'page-bottom', 'footer-pre', 'footer-post');

/* Other layouts will use the Shoehorn ones, so it is important that the header.php file keeps things the same.
   If you are only looking to change the styles by adding your own to 'eyelet.css' in the styles folder, then
   you can remove this ($THEME->layouts). */
$THEME->layouts = array(
    // Front page.
    'frontpage' => array(
        'file' => 'frontpage.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre'
    )
);

$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->csspostprocess = 'theme_eyelet_process_css';