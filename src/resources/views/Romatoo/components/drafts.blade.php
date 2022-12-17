<table class="table table-sm mt-5">
    <thead>
        <tr>
            <th>Type</th>
            <th>Message</th>
            <th>Saved by</th>
            <th>Saved at</th>
            <th>Click to Send</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($drafts as $draft)
            <tr>
                <td>{{ \App\Enums\EmailType::EMAIL_TYPES_WITH_LABEL[$draft->email_type] }}</td>
                <td>
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#code{{$draft->id}}">
                        View
                      </button>
                      
                      <!-- Modal -->
                      <div class="modal fade" id="code{{$draft->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle"><i>Subject</i></h5>
                            </div>
                            <div class="modal-body">
                                {{$draft->subject}}
                            </div>
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle"><i>Message # {{$draft->id}}</i></h5>
                            </div>
                            <div class="modal-body">
                                {{$draft->body}}
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </td>
                <td>{{$draft->sender}}</td>
                <td>{{$draft->created_at}}</td>
                <td><button class="btn btn-primary btn-sm"><i class="bi bi-send-fill"></i></button></td>
            </tr>
        @empty 
            <tr>
                <td colspan="5" align="center" style="color: #AA7777;">No messages found!</td>
            </tr>
        @endforelse
    </tbody>
</table>
    <div style="float: right">
        {{ $drafts->withQueryString()->links('pagination::bootstrap-5') }}
    </div>