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
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form class="confirm-update" action="<?php echo base_url() ?>admin/setting/update_media/<?php echo $config->id ?>" method="POST" role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>Max Size</label>
                    <input type="number" class="form-control" name="max_size" value="<?php echo $config->max_size ?>" required disabled>
                  </div>
                  <div class="form-group">
                    <label>Max Width</label>
                    <input type="number" class="form-control" name="max_width" value="<?php echo $config->max_width ?>" required disabled>
                  </div>
                  <div class="form-group">
                    <label>Max Width</label>
                    <input type="number" class="form-control" name="max_height" value="<?php echo $config->max_height ?>" required disabled>
                  </div>
                  <div class="form-group">
                    <label>Overwrite</label>
                  </div>
                  <div class="form-group">                    
                    <input type="radio" name="overwrite" value="1" <?php if ($config->overwrite == 1) { echo 'checked'; } ?> required disabled> Yes &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="overwrite" value="0" <?php if ($config->overwrite == 0) { echo 'checked'; } ?> required disabled> No
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="submit" disabled>Submit</button>
                  <a href="javascript:void(0);" class="btn btn-info edit-media">Edit</a>
                  <a href="javascript:void(0);" class="hidden text-right btn btn-default cancel-media">Cancel</a>
                </div>
              </form>
            </div>
          </div>
          <!--/.col (right) -->
        </div>