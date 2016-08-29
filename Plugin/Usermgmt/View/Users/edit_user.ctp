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
	<div class="page-header">
			<h1>
				Users
				<small>
					<i class="icon-double-angle-right"></i>
					Edit User
				</small>
			</h1>
		</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="register">
				<div class="um_box_mid_content_mid_left">
					<?php echo $this->Form->create('User'); ?>
					<?php echo $this->Form->input("id" ,array('type' => 'hidden', 'label' => false,'div' => false))?>
					<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Username </label>
						<div class="col-sm-9"><?php echo $this->Form->input("username" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> First Name </label>
						<div class="col-sm-9"><?php echo $this->Form->input("first_name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Last Name </label>
						<div class="col-sm-9"><?php echo $this->Form->input("last_name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1">Email</label>
						<div class="col-sm-9"><?php echo $this->Form->input("email" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9 text-right">
				<button class="btn btn-info" type="submit" id="add">
					<i class="icon-ok bigger-110"></i>
					Save
				</button>
			</div>
		</div>
					
					<?php echo $this->Form->end(); ?>
				</div>
				<div class="um_box_mid_content_mid_right" align="right"></div>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>
<script>
document.getElementById("UserUserGroupId").focus();
</script>