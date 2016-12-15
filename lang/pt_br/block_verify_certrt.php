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
 * Version details
 * 
 * Verify certrt block
 * --------------------------
 * Verify certrt based on the unique codes displayed on issued certrts. 
 * Full details of the issued certrt is displayed including profile picture.
 * Mostly cosmetic changes to the original codes from Jean-Michel Védrine.
 * Original Autor & Copyright - Jean-Michel Védrine | 2014
 *
 * @copyright           2015 onwards Manieer Chhettri | Marie Curie, UK | <manieer@gmail.com>
 * @author              Manieer Chhettri | Marie Curie, UK | <manieer@gmail.com> | 2015
 * @package             block_verify_certrt
 * @license             http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['title'] = 'Validação de Certificado';
$string['pluginname'] = 'Validar Certificados';
$string['certrt'] = 'Código do certificado:';
$string['verifycertrt'] = 'Validar certificado';
$string['verify_certrt:addinstance'] = 'Adicionar um novo bloco verificador de certificado';
$string['notfound'] = 'Este certificado não pode ser validado.<br><br> Verifique se o código digitado está correto, inclusive maiúsculas e minúsculas.';
$string['to'] = 'Concedido a';
$string['course'] = 'Curso';
$string['date'] = 'Na data';
$string['grade'] = 'Avaliação';
$string['check'] = 'Por favor, confira se os dados no certificado conferem com os dados apresentados.';
