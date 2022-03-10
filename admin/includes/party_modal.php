<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Party</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="party_add.php">
                <div class="form-group">
                    <label for="party_name" class="col-sm-3 control-label">Party Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="party_name" name="party_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="party_sec" class="col-sm-3 control-label">Party Sec</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="party_sec" name="party_sec" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="yaer" class="col-sm-3 control-label">Year</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="yaer" name="yaer" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="max_vote" class="col-sm-3 control-label">Party Contact</label>

                    <div class="col-sm-9">
                      <input type="tel" class="form-control" id="party_contact" name="party_contact" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Party</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="party_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="party_name" class="col-sm-3 control-label">Party Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="party_name" name="party_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="party_sec" class="col-sm-3 control-label">Party Sec</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="party_sec" name="party_sec" required>
                    </div>
                </div>

                  <div class="form-group">
                    <label for="yaer" class="col-sm-3 control-label">Year</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="yaer" name="yaer" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="max_vote" class="col-sm-3 control-label">Party Contact</label>

                    <div class="col-sm-9">
                      <input type="tel" class="form-control" id="max_vote" name="party_contact" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="party_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE PARTY</p>
                    <h2 class="bold description"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>



     