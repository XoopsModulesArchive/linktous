<?php

// ------------------------------------------------------------------------- //
//                XOOPS - PHP Content Management System                      //
//                       <http://xoops.codigolivre.org.br>                             //
// ------------------------------------------------------------------------- //
// Based on:                                                                 //
// myPHPNUKE Web Portal System - http://myphpnuke.com/                       //
// PHP-NUKE Web Portal System - http://phpnuke.org/                          //
// Thatware - http://thatware.org/                                           //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------- //
# ORIGINAL FILE INFO                                                         //
# Module            : liens                                                //
# Filename          : index.php                                              //
# Purpose           : Ce script affiche une page avec différents liens vers votre site//
# Version Xoops RC3 : Philippe Muller alias --(melkahdor)--                  //
# email             : webmaster@melkahdor.com | http://melkahdor.com         //
###############################################################################

include '../../mainfile.php';
include '../../header.php';

//standard for module name recognition
$ModName = 'liens';

global $xoopsDB, $xoopsConfig;
if ('liens' == $xoopsConfig['startpage']) {
    $xoopsOption['show_rblock'] = 1;

    require XOOPS_ROOT_PATH . '/header.php';

    make_cblock();

    echo '<br>';
}
    //   $xoopsOption['show_rblock'] =0;
    //   require XOOPS_ROOT_PATH."/header.php";

OpenTable();

echo "<p><div align='center'><h3>" . _LI_LIENS_NAME . ' ' . $xoopsConfig['sitename'] . '</h3></div></p>';
echo '<br><br>';
echo '' . _LI_LIENS_ADVERTISE . ' <b>' . $xoopsConfig['sitename'] . '</b><br>';

echo '<br><br>';

//lien texte
echo '<b>' . _LI_TXT_ONE . '</b><br>';
echo '' . _LI_EXEMPLE . "<br><b><a href='" . XOOPS_URL . "'>" . $xoopsConfig['sitename'] . '</b></a><br>';
echo '' . _LI_LIENS_URL . ' ' . XOOPS_URL . '/ <br>';
echo '' . _LI_SCRIPT . '<br>';

echo "<textarea name='lientxt' cols='70' rows='4' wrap='VIRTUAL'><a href='" . XOOPS_URL . "/'>" . $xoopsConfig['sitename'] . '</a></textarea>';

echo '<br><br>';

//liens bouton
echo '<b>' . _LI_BT_ONE . '</b><br>';
echo '' . _LI_EXEMPLE . "<br><img src='" . XOOPS_URL . "/modules/liens/images/bouton.gif'><br>";
echo '' . _LI_BTONE_ADRESSE . ' <b>' . XOOPS_URL . '/modules/liens/images/bouton.gif</b><br><br>';
echo '' . _LI_SCRIPT . '<br>';
echo "<textarea name='lienbt' cols='70' rows='4' wrap='VIRTUAL'><a href='" . XOOPS_URL . "/'><img src='" . XOOPS_URL . "/modules/liens/images/bouton.gif' alt='" . $xoopsConfig['slogan'] . "'></a></textarea>";
echo '<br><br>';

//lien logo
echo '<b>' . _LI_BT_TWO . '</b><br>';
echo '' . _LI_EXEMPLE . "<br><img src='" . XOOPS_URL . "/modules/liens/images/Logo.gif'><br>";
echo '' . _LI_BTTWO_ADRESSE . ' <b>' . XOOPS_URL . '/modules/liens/images/Logo.gif</b><br><br>';
echo '' . _LI_SCRIPT . '<br>';
echo "<textarea name='lienlogo' cols='60' rows='4' wrap='VIRTUAL'><a href='" . XOOPS_URL . "/'><img src='" . XOOPS_URL . "/modules/liens/images/logo.gif' alt='" . $xoopsConfig['slogan'] . "'></a></textarea>";
echo '<br><br>';

//lien bannière
echo '<b>' . _LI_BAN_ONE . '</b><br>';
echo '' . _LI_EXEMPLE . "<br><img src='" . XOOPS_URL . "/modules/liens/images/banner.gif'><br>";
echo '' . _LI_BANONE_ADRESSE . ' <b>' . XOOPS_URL . '/modules/liens/images/banner.gif</b><br><br>';
echo '' . _LI_SCRIPT . '<br>';
echo "<textarea name='baniere' cols='70' rows='4' wrap='VIRTUAL'><a href='" . XOOPS_URL . "/'><img src='" . XOOPS_URL . "/modules/liens/images/banner.gif' alt='" . $xoopsConfig['slogan'] . "'></a></textarea>";
echo '<br><br>';

//affiche news
echo '<b>' . _LI_BACKENDJS . '</b><br>';
echo '' . _LI_EXEMPLE . "<br><script type='text/javascript' src='" . XOOPS_URL . "/backendjs.php'></script><br>";
echo '' . _LI_BACK_ONEAV . '<br>';
echo '' . _LI_BACK_ONE . ' <b>' . XOOPS_URL . '/backend.php</b><br><br>';
echo '' . _LI_BACK_TWOAV . '<br>';
echo '' . _LI_BACK_TWO . ' <b>' . XOOPS_URL . '/backendjs.php</b><br><br>';
echo '' . _LI_SCRIPT . '<br>';
echo "<textarea name='backendjs' cols='70' rows='4' wrap='VIRTUAL'><script type='text/javascript' src='" . XOOPS_URL . "/backendjs.php'></script></textarea>";
echo '<br><br>';

echo '' . _LI_LIENS_ADVERT2 . '<br>';
CloseTable();

// commentez ces ligne si vous ne voulez pas voir apparaite le 'copyright'
OpenTable();
echo "<div align='center'>" . _LI_COPYRIGHT . '</div>';
CloseTable();

require XOOPS_ROOT_PATH . '/footer.php';
