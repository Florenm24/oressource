<?php
/*
  Oressource
  Copyright (C) 2014-2017  Martin Vert and Oressource devellopers

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU Affero General Public License as
  published by the Free Software Foundation, either version 3 of the
  License, or (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU Affero General Public License for more details.

  You should have received a copy of the GNU Affero General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

function checkBox(array $props, bool $state) {
  ob_start();
  ?><label class="custom-control custom-checkbox">
    <input
      name="<?= $props['name'] ?>"
      id="<?= $props['name'] ?>"
      <?= $state ? 'checked' : '' ?>
      type="checkbox"><?= $props['text'] ?></label><?php
  return ob_get_clean();
}

function textInput(array $props, string $state) {
    ob_start();
    ?><label><?= $props['text'] ?>
    <input type="text"
           name="<?= $props['name'] ?>"
           id="<?= $props['name'] ?>"
           value="<?= $state ?>"
           class="form-control" required autofocus>
  </label><?php
  return ob_get_clean();
}
