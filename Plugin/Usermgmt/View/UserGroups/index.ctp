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
							<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 255px;">Group Id</th>
							<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 186px;">Name</th>
							<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 186px;">Alias Name</th>
							<th class="hidden-480 " role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 245px;">Allow Registration</th>
							<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 298px;">Created</th>
							<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 263px;" aria-label="">Action</th>
						</tr>
					</thead>
					<tbody>
			<?php   if(!empty($userGroups)) {
							foreach ($userGroups as $row) { ?>
							
		<tr class="odd">
			<td class="td-name" data-user-name="<?php echo $row['UserGroup']['id'] ?>"><?php echo $row['UserGroup']['id'] ?></td>
			<td class="td-username" data-user-username="<?php echo $row['UserGroup']['name'] ?>"><?php echo $row['UserGroup']['name'] ?></td>
			<td class="td-username" data-user-username="<?php echo $row['UserGroup']['alias_name'] ?>"><?php echo $row['UserGroup']['alias_name'] ?></td>
			<td class=" "><?php 
			if ($row['UserGroup']['allowRegistration']==1) echo 'Yes';
				else echo 'No';
				 ?>
			</td>
			<td class=""><?php echo date('d-M-Y',strtotime($row['UserGroup']['created'])); ?></td>
			<td class=" ">
			<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
			
							
			<a class="green" href="<?php echo $this->webroot.'editGroup/'.$row['UserGroup']['id'];?>" title="Edit Group">
			<i class="icon-pencil bigger-130"></i>
			</a>
			
			<?php 
			if ($row['UserGroup']['id']!=1 && $row['UserGroup']['name']!='Admin') {
				echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/delete.png', array("alt" => __('Delete'), "title" => __('Delete'))), array('action' => 'deleteGroup', $row['UserGroup']['id']), array('escape' => false, 'confirm' => __('Sure you want to remove this user?')));
			}
			
			
			?>
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