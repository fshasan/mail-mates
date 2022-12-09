{{-- {{dd($sentEmails->toArray())}} --}}

<table class="table table-sm mt-5">
    <thead>
        <tr>
            <th>Type</th>
            <th>Message</th>
            <th>Sent to</th>
            <th>Sent at</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($sentEmails as $sentEmail)
            <tr>
                <td>{{ \App\Enums\EmailType::EMAIL_TYPES_WITH_LABEL[$sentEmail->email_type] }}</td>
                <td>
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#code{{$sentEmail->sender}}">
                        View
                      </button>
                      
                      <!-- Modal -->
                      <div class="modal fade" id="code{{$sentEmail->sender}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle"><i>Subject</i></h5>
                            </div>
                            <div class="modal-body">
                                {{$sentEmail->subject}}
                            </div>
                            <div class="modal-header">
                            </div>
                            <div class="modal-body">
                                {{$sentEmail->body}}
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </td>
                <td>
                    @foreach ($sentEmail->recievers as $item)
                        {{$item->email ?? ''}}
                    @endforeach
                </td>
                <td>{{$sentEmail->created_at}}</td>
            </tr>
        @empty 
            <tr>
                <td colspan="5" align="center" style="color: #AA7777;">No messages found!</td>
            </tr>
        @endforelse
    </tbody>
</table>
    <div style="float: right">
        {{ $emails->withQueryString()->links('pagination::bootstrap-5') }}
    </div>