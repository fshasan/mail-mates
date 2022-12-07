<div style="float: right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><b class="bi bi-pencil-fill">	Compose</b></button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Recipient:</label>
                <input type="text" class="form-control" name="recipient" id="recipient-name">
              </div>
              <div class="form-group">
                <select class="form-control" name="type">
                    <option value=''>Select Type</option>

                    @for($i = 1; $i <= count(\App\Enums\EmailType::EMAIL_TYPES_WITH_LABEL); $i++)
                        <option value="{{$i}}" {{ (null !== request()->get('type')) && (request()->get('type') == $i) ? 'selected' : ''}}>{{ \App\Enums\EmailType::EMAIL_TYPES_WITH_LABEL[$i] }}</option>
                    @endfor

                </select>
              </div>
              <div class="form-group">
                <label for="subject-name" class="col-form-label">Subject:</label>
                <input type="text" class="form-control" name="subject" id="subject-name">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Message:</label>
                <textarea class="form-control" name="message" id="message-text"></textarea>
              </div>
              <div class="form-group mt-4">
                <button type="reset" class="btn btn-danger">Clear</button>
                <button type="button" class="btn btn-info">Save as draft</button>
                <button type="submit" class="btn btn-primary">Send message</button>
              </div>
            </form>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>

</div>