      <div class="modal fade" id="modal-add-new">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Media</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

          <form action="<?php echo base_url() ?>admin/media/store" method="POST" enctype="multipart/form-data">            
            <div class="modal-body">
              <input type="file" name="files[]" accept="image/jpg, image/jpeg, image/png, application/docx, application/doc, application/pdf, application/xlsx, application/xls audio/mp3, audio/wav, video/mp4, video/mpg, video/mpeg, text/html, text/plain" multiple required>
            </div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>            
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>