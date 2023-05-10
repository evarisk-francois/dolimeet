<?php
/* Copyright (C) 2021-2023 EVARISK <technique@evarisk.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 * or see https://www.gnu.org/
 */

/**
 *  \file       core/modules/dolimeet/dolimeetdocuments/trainingsessiondocument/modules_trainingsessiondocument.php
 *  \ingroup    dolimeet
 *  \brief      File that contains parent class for trainingsession document models
 */

require_once DOL_DOCUMENT_ROOT . '/core/class/commondocgenerator.class.php';

/**
 *	Parent class for documents models
 */
abstract class ModeleODTTrainingSessionDocument extends CommonDocGenerator
{
    /**
     * Return list of activated modules usable for document generation
     *
     * @param  DoliDB     $db                Database handler
     * @param  int        $maxfilenamelength Max length of value to show
     * @return array|int                     0 if no module is activated, or array(key=>label). For modules that need directory scan, key is completed with ":filename".
     * @throws Exception
     */
	public static function liste_modeles(DoliDB $db, int $maxfilenamelength = 0)
	{
        require_once __DIR__ . '/../../../../../../saturne/lib/documents.lib.php';
        return saturne_get_list_of_models($db, 'trainingsessiondocument', $maxfilenamelength);
	}
}