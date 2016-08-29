<?php
/*
	This file is part of UserMgmt.

	Author: Chetan Varshney (http://ektasoftwares.com)

	UserMgmt is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	UserMgmt is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php // echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
				<div class="page-header">
				<h1>
					Vista
					<small>
						<i class="icon-double-angle-right"></i>
						Usuario
					</small>
				</h1>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="index">
				<table cellspacing="0" cellpadding="0" width="100%" border="0" >
					<tbody>
			<?php       if (!empty($user)) { ?>
							<tr>
								<td><strong><?php echo __('Id Usuario');?></strong></td>
								<td><?php echo $user['User']['id']?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Grupo Usuario');?></strong></td>
								<td><?php echo h($user['UserGroup']['name'])?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Nombre De Usuario');?></strong></td>
								<td><?php echo h($user['User']['username'])?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Primer Nombre');?></strong></td>
								<td><?php echo h($user['User']['first_name'])?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Apellido');?></strong></td>
								<td><?php echo h($user['User']['last_name'])?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Email');?></strong></td>
								<td><?php echo h($user['User']['email'])?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Email Verificado');?></strong></td>
								<td><?php
										if ($user['User']['email_verified']) {
											echo 'Yes';
										} else {
											echo 'No';
										} ?>
								</td>
							</tr>
							<tr>
								<td><strong><?php echo __('Estatus');?></strong></td>
								<td><?php
										if ($user['User']['active']) {
											echo 'Active';
										} else {
											echo 'Inactive';
										} ?>
								</td>
							</tr>
							<tr>
								<td><strong><?php echo __('Dirección IP');?></strong></td>
								<td><?php echo h($user['User']['ip_address'])?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Creado');?></strong></td>
								<td><?php echo date('d-M-Y',strtotime($user['User']['created']))?></td>
							</tr>
				<?php   } else {
							echo "<tr><td colspan=2><br/><br/>No Data</td></tr>";
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>