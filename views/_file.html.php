<!--
  php-piratebox
  Copyright (C) 2015 Julien Vaubourg <julien@vaubourg.com>
  Contribute at https://github.com/jvaubourg/php-piratebox
  
  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU Affero General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.
  
  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU Affero General Public License for more details.
  
  You should have received a copy of the GNU Affero General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->

<div class="file <?= $newfile ? 'newfile' : '' ?>" <?= $newfile ? 'style="display: none"' : '' ?>>
  <img src="public/img/extensions/<?= urlencode($file['img']) ?>" />

  <?php if($file['shortname'] != $file['name']): ?>
    <span class="shortname label label-default" data-toggle="tooltip" data-title="<?= htmlentities($file['name']) ?>"><?= str_replace('...', '&hellip;', htmlentities($file['shortname'])) ?></span>
  <?php else: ?>
    <span class="shortname label label-default"><?= str_replace('...', '&hellip;', htmlentities($file['shortname'])) ?></span>
  <?php endif; ?>

  <div class="download">
    <span id="closedownload" class="glyphicon glyphicon-remove-circle"></span>
    <span class="filename"><?= htmlentities($file['name']) ?></span>
    <a href="<?= $file['filename'] ?>" class="downloadfile btn btn-success"><?= T_("Download") ?></a>
    <span class="filesize"><strong><?= T_("Size:") ?></strong> <?= $file['size'] ?></span> -
    <span class="filedate"><strong><?= T_("Date:") ?></strong> <?= str_replace(' ', '&nbsp;', $file['date']) ?></span>
  </div>
</div>
