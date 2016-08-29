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
	
	<div class="page-header">
			<h1>
				Perfil
				<small>
					<i class="icon-double-angle-right"></i>
					Mi perfil
				</small>
			</h1>
		</div>
		
		
		<div class="col-xs-8" align="center">
			<table id="sample-table-2" bordercolor="red" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
		
		<?php       if (!empty($user)) { ?>
		
		
					<tr>
						<td><b><p style='color: #0097EF'>'User Id</p></b></td>
						<td><?php echo $user['User']['id']?></td>
			
					</tr>
					
					<tr>
						<td><b><p style='color: #0097EF'>Usuario Grupo</p></b></td>
						<td><dd>
							<?php echo h($user['UserGroup']['name'])?>
							&nbsp;
						</dd></td>
					</tr>
		
					<tr>
						<td><b><p style='color: #0097EF'>usuario</p></b></td>
						<td><?php echo h($user['User']['username'])?></td>
			
					</tr>
		
					<tr>
						<td><b><p style='color: #0097EF'>Primer Nombre</p></b></td>
						<td><dd>
							<?php echo h($user['User']['first_name'])?>
							&nbsp;
						</dd></td>
					</tr>
		
					<tr>
						<td><b><p style='color: #0097EF'>Apellido</p></b></td>
						<td><?php echo h($user['User']['last_name'])?></td>
			
					</tr>
		
					<tr>
						<td><b><p style='color: #0097EF'>Email</p></b></td>
						<td><dd>
							<?php echo h($user['User']['email'])?>
							&nbsp;
						</dd></td>
					</tr>
					
					<tr>
						<td><b><p style='color: #0097EF'>Email Verified</p></b></td>
						<td><dd>
							<?php
										if ($user['User']['email_verified']) {
											echo 'Yes';
										} else {
											echo 'No';
										}
									?>
							&nbsp;
						</dd></td>
					</tr>
					<tr>
						<td><b><p style='color: #0097EF'>Estatus</p></b></td>
						<td><dd>
							<?php
										if ($user['User']['active']) {
											echo 'Active';
										} else {
											echo 'Inactive';
										}
									?>
							&nbsp;
						</dd></td>
					</tr>
					<tr>
						<td><b><p style='color: #0097EF'>Creado</p></b></td>
						<td><dd>
							<?php echo date('d-M-Y',strtotime($user['User']['created']))?>
							&nbsp;
						</dd></td>
					</tr>
			<?php   } else {
							echo "<tr><td colspan=2><br/><br/>No Data</td></tr>";
						}
					?>		
						
			</table>
	</div>