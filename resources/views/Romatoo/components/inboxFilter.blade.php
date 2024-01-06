<form>
    <div class="form-row">
        <div class="form-group col-auto mb-3">
            <select class="form-control js-example-basic-single" name="email_type">
                <option value=''>Choose Type</option>

                @for($i = 1; $i <= count(\App\Enums\EmailType::EMAIL_TYPES_WITH_LABEL); $i++)
                    <option value="{{$i}}" {{ (null !== request()->get('email_type')) && (request()->get('email_type') == $i) ? 'selected' : ''}}>{{ \App\Enums\EmailType::EMAIL_TYPES_WITH_LABEL[$i] }}</option>
                @endfor

            </select>
        </div>
        <div class="form-group col-auto mb-3 ">
            <div class="input-group ">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="bi bi-calendar"></i>
                    </div>
                </div>
                <input type="text" class="form-control dateranging" id="dateRanging" name="recieved_at" value="{{ request()->get('recieved_at') }}" placeholder="Recieved Between" autocomplete="off">
            </div>
        </div>
        <div class="form-group col-auto mb-3">
            <button type="submit" class="btn btn-success "><i class="bi bi-funnel"></i></button>
        </div>
        <div class="form-group col-auto mb-3">
            <a href="{{ route('dashboard',  ['user_id' => Auth::id()]) }}" class="btn btn-primary reset" type="button"><i class="bi bi-arrow-clockwise"></i></a>
        </div>
    </div>
</form>

<form class="mr-3" style="float: right">
    <div class="input-group">
        <input type="text" class="form-control table_search" name="search" placeholder="Search by email subject" required value="{{ request()->get('search') }}" autocomplete="off">
        <div class="input-group-append">
            <button class="btn btn-primary"><i class="bi bi-search"></i></button>
        </div>
    </div>
</form>

<script>

    $('#dateRanging').daterangepicker({
        autoUpdateInput: false,
    });

    $('#dateRanging').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
    });

    $('#dateRanging').keydown(function(e) {
        e.preventDefault();
        return false;
    });

    $('.reset').on('click', function() {
        $("select[name = email_type],  input[name = search], input[name = recieved_at]").val('');
    });
    
</script>