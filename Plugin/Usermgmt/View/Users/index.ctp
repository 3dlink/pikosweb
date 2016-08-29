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
	<?php //echo $this->element('dashboard'); ?>
	
<div class="row">
	<div class="col-xs-12">
		<div class="page-header">
			<h1>
				Users
				<small>
					<i class="icon-double-angle-right"></i>
					Users List
				</small>
			</h1>
		</div>
	
	
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="index">
				<table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
					<thead>
						<tr role="row">
							<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 255px;">Name</th>
							<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 186px;">Username</th>
							<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 186px;">Email</th>
							<th class="hidden-480 " role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 245px;">Group</th>
							<th class="hidden-480 " role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 45px;">Status</th>
							<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 298px;">Created</th>
							<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 263px;" aria-label="">Action</th>
						</tr>
					</thead>
					<tbody>
			<?php       if (!empty($users)) {
							$sl=0;
							
							
							 foreach ($users as $row) { ?>
							
		<tr class="odd">
			<td class="td-name" data-user-name="<?php echo $row['User']['first_name'].' '.$row['User']['last_name'] ?>"><?php echo $row['User']['first_name'].' '.$row['User']['last_name'] ?></td>
			<td class="td-username" data-user-username="<?php echo $row['User']['username'] ?>"><?php echo $row['User']['username'] ?></td>
			<td class="td-username" data-user-username="<?php echo $row['User']['email'] ?>"><?php echo $row['User']['email'] ?></td>
			<td class=""><?php echo $row['UserGroup']['name'] ?></td>
			<td class=" "><?php 
			if ($row['User']['active']==1) echo 'Active';
				else echo 'Inactive';
				 ?>
			</td>
			<td class=""><?php echo date('d-M-Y',strtotime($row['User']['created'])); ?></td>
			<td class=" ">
			<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
			
							
			<a class="green" href="<?php echo $this->webroot.'editUser/'.$row['User']['id'];?>" title="Edit user">
			<i class="icon-pencil bigger-130"></i>
			</a>
			<?php if ($row['User']['active']==0) { ?>
			<a class="red" href="<?php echo $this->webroot.'usermgmt/users/makeActiveInactive/'.$row['User']['id'].'/1';?>" title="Active user">
			<i class="icon-lock bigger-130"></i>
			</a>
			<?php } else { ?>
			<a class="red" href="<?php echo $this->webroot.'usermgmt/users/makeActiveInactive/'.$row['User']['id'].'/0';?>" title="Desactive user">
			<i class="icon-unlock bigger-130"></i>
			</a>
			<?php } ?>
			
			
			<?php 
			if ($row['User']['id']!=1 && $row['User']['username']!='Admin') {
				echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/delete.png', array("alt" => __('Delete'), "title" => __('Delete'))), array('action' => 'deleteUser', $row['User']['id']), array('escape' => false, 'confirm' => __('Sure you want to remove this user?')));
			}
			
			
			?>
			<a class="orange" href="<?php echo $this->webroot.'changeUserPassword/'.$row['User']['id'] ?>">
			<i class="icon-key bigger-130"></i>
			</a>
			</div>
			</td>
			</tr>
			<?php } ?>
			<?php } ?>
	
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>