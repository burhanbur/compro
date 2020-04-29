        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <i class="icon fas fa-check"></i><?php echo $this->session->flashdata('success') ?>
        </div>
        <?php elseif ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <i class="icon fas fa-ban"></i><?php echo $this->session->flashdata('error') ?>
        </div>
        <?php endif; ?>

              
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Company Profile</h3>
              </div>

              <form class="confirm-update" action="<?php echo base_url() ?>admin/setting/update_profile/<?php echo $config->id ?>" method="POST" role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="company" value="<?php echo $profile->company ?>" required disabled>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $profile->email ?>" required disabled>
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo $profile->phone ?>" required disabled>
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $profile->address ?>" required disabled>
                  </div>
                  <div class="form-group">
                    <label>Site Url</label>
                    <input type="text" class="form-control" name="site_url" value="<?php echo $profile->site_url ?>" required disabled>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="submit-profile" disabled>Submit</button>
                  <a href="javascript:void(0);" class="btn btn-info edit-profile">Edit</a>
                  <a href="javascript:void(0);" class="hidden text-right btn btn-default cancel-profile">Cancel</a>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">System Setting</h3>
              </div>
              <!-- /.card-header -->
              <form class="confirm-update" method="POST" action="<?php echo base_url() ?>admin/setting/update_general/<?php echo $config->id ?>" role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>Time Format (Ex: <i><?php echo date($config->time_format) ?></i>)</label>
                    <select class="form-control" name="time_format" required disabled>
                      <option <?php if($config->time_format == 'h:i a') { echo "selected"; } ?> value="h:i a">hh:mm a</option>
                      <option <?php if($config->time_format == 'h:i A') { echo "selected"; } ?> value="h:i A">hh:mm A</option>
                      <option <?php if($config->time_format == 'H:i') { echo "selected"; } ?> value="H:i">HH:mm</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label>Date Format (Ex: <i><?php echo date($config->date_format) ?></i>)</label>
                    <select class="form-control" name="date_format" required disabled>
                      <option <?php if($config->date_format == 'F j, Y') { echo "selected"; } ?> value="F j, Y">F j, Y</option>
                      <option <?php if($config->date_format == 'Y-m-d') { echo "selected"; } ?> value="Y-m-d">Y-m-d</option>
                      <option <?php if($config->date_format == 'm/d/Y') { echo "selected"; } ?> value="m/d/Y">m/d/Y</option>
                      <option <?php if($config->date_format == 'd/m/Y') { echo "selected"; } ?> value="d/m/Y">d/m/Y</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Time Zone</label>
                    <select class="form-control" name="timezone" required disabled>
                      <?php foreach ($list_timezone as $timezone) { ?>
                        <option <?php if($config->timezone == $timezone) { echo "selected"; } ?> value="<?php echo $timezone ?>"><?php echo $timezone ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Default Role</label>
                    <select class="form-control" name="default_role" required disabled>
                      <?php foreach ($list_role as $role) { ?>
                        <option <?php if($config->default_role == $role->id) { echo "selected"; } ?> value="<?php echo $role->id ?>"><?php echo $role->role ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Language</label>
                    <select class="form-control" name="language_id" required disabled>
                      <?php foreach ($language as $lang) { ?>
                        <option <?php if($config->language_id == $lang->id) { echo "selected"; } ?> value="<?php echo $lang->id ?>"><?php echo $lang->language ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="submit-general" disabled>Submit</button>
                  <a href="javascript:void(0);" class="btn btn-info edit-general">Edit</a>
                  <a href="javascript:void(0);" class="hidden text-right btn btn-default cancel-general">Cancel</a>
                </div>
              </form>

            </div>
            <!-- /.card -->
          </div>
        </div>
        