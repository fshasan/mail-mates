<div class="dropdown mr-3">
  <button class="btn btn-primary dropdown-toggle btn-lg" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Category
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    @for($i = 1; $i <= count(\App\Enums\MessageType::MESSAGE_TYPES_WITH_LABEL); $i++)
      <form>
        <input type="text" name="messageType" hidden value="{{\App\Enums\MessageType::MESSAGE_TYPES_WITH_LABEL[$i]}}">
        <button class="btn dropdown-item btn-light"> {{ \App\Enums\MessageType::MESSAGE_TYPES_WITH_LABEL[$i] }}</button>
      </form>
    @endfor

  </div>
</div>

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
            <form action="{{ route('sendEmail') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Recipient:</label>
                <input type="text" class="form-control" name="recipient" id="recipient-name">
              </div>
              <div class="form-group mt-4">
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
                <textarea rows="10" class="form-control" name="message" id="message-text"></textarea>
              </div>
              <div class="form-group mt-4">
                <button type="reset" class="btn btn-danger">Clear</button>
                <button type="submit" name="save" class="btn btn-info">Save as draft</button>
                <button type="submit" name="submit" class="btn btn-primary">Send message</button>
              </div>
            </form>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>

</div>