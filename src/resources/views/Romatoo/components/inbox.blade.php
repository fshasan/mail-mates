<table class="table table-sm">
    <thead>
        <tr>
            <th>Type</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Recieved from</th>
            <th>Recieved at</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($emails as $email)
            <tr>
                <td>{{$email->email_type}}</td>
                <td>{{$email->subject}}</td>
                <td>{{$email->body}}</td>
                <td>{{$email->sender}}</td>
                <td>{{$email->created_at}}</td>
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