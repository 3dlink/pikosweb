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
		<?php echo __('New Group',true);?>
		<small>
			<i class="icon-double-angle-right"></i>
			<?php echo __('Add new Group',true);?>
		</small>
	</h1>
	</div>


	<div class="row">
	<div class="col-xs-12">
				
					<?php echo $this->Form->create('UserGroup', array('action' => 'addGroup')); ?>
					<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Group Name <font color='red'>*</font></label>
								<div class="col-sm-9"><?php echo $this->Form->input("name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?>
									<div class="umstyle7">for ex. Business User</div>
									<div style="clear:both"></div>
								</div>

					<div class="form-group">
						<?php   if (!isset($this->request->data['UserGroup']['allowRegistration'])) {
							$this->request->data['UserGroup']['allowRegistration']=true;
						}   ?>
							<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Alias Group Name <font color='red'>*</font></label>
								<div class="col-sm-9"><?php echo $this->Form->input("alias_name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?>
								<div class="umstyle7">for ex. Business_User (Must not contain space)</div>
								<div style="clear:both"></div>
					</div>

					<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Allow Registration <font color='red'>*</font></label>
						<div class="col-sm-9"><?php echo $this->Form->input("allowRegistration" ,array("type"=>"checkbox",'label' => false))?></div>
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
					<div>Note: If you add a new group then you should give permissions to this newly created Group.</div>
					<?php echo $this->Form->end(); ?>
				</div>
				<div class="um_box_mid_content_mid_right" align="right"></div>
				<div style="clear:both"></div>
			</div>
		</div>

	<div class="um_box_down"></div>
</div>
<script>
document.getElementById("UserUserGroupId").focus();
</script>