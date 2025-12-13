@include('dashboard.header')
<div class="nk-content nk-content-fluid">
  <div class="container-xl wide-lg">
    <div class="nk-content-body">
      @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
      @endif
      @if($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
      @endif
      <div class="nk-block-head">
        <div class="nk-block-head-sub">
        </div>
        <div class="nk-block-between-md g-4 card-bordered">
          <div class="nk-block-head-content">
            <h4 class="nk-block-title fw-normal">Customer care Desk.</h4>
            <div class="nk-block-des">
              <p>Our customer Care representatives are always committed in giving you the best banking experience.</p>
            </div>
          </div><!-- .nk-block-head-content -->
          <div class="nk-block-head-content">
            <ul class="nk-block-tools gx-3">
              <li><a href="transfer" class="btn btn-secondary btn-light text-light"><span>Transfer Fund</span><em
                    class="icon ni ni-wallet-out"></em></a></li>
            </ul>
          </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
      </div><!-- .nk-block-head -->
    </div>
  </div>
  <div class="card card-bordered card-preview">
    <div class="card-header font-weight-bold text-light" style="background-color:#1A4DBE;">
      <h5 class="text-white"> <em class="icon ni ni-question"></em> Create a support ticket </h5>
    </div>
    <div class="card-body">
      <form action="{{route('support.ticket')}}" method="post">
        @csrf
        <div class="row">
          <div class="form-group col-lg-12">

            <select class="form-control form-control-xl" name="department" id="department">
              <option value="" selected="" disabled="">Please Select Customer Service Department</option>
              <option value="Customer Services Department">Customer Services Department</option>
              <option value="Account Department">Account Department</option>
              <option value="Transfer Department">Transfer Department</option>
              <option value="Card Services Department">Card Services Department</option>
              <option value="Loan Department">Loan Department</option>
              <option value="Bank Deposit Department">Bank Deposit Department</option>
            </select>
          </div>
          <div class="form-group col-lg-12">
            <textarea class="form-control form-control-xl" name="message" id="message"
              placeholder="Type your complaints"></textarea>
          </div>
          <div class="createResult"></div>
          <div class="form-group col-lg-12">
            <button class="btn btn-primary ticketBtn" type="submit" id="btn">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-------Previous tickets---->
  <div class="card card-bordered card-preview">
    <div class="card-header font-weight-bold text-light" style="background-color:#1A4DBE;">
      <h5 class="text-white"> <em class="icon ni ni-question-alt"></em> Previous support tickets </h5>
    </div>
    <div class="card-body">
      <table class="datatable-init table">
        <thead>
          <tr>
            <th>Department</th>
            <th>Ticket ID</th>
            <th>Date</th>
            <th>Comments</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($tickets as $tickets)
          <tr>
            <td>{{$tickets->ticket_department}}</td>
            <td>{{$tickets->ticket_id}}</td>
            <td>{{ \Carbon\Carbon::parse($tickets->created_at)->format('D, M j, Y g:i A') }}</td>
            <td>{{$tickets->ticket_comment}}</td>
            @if($tickets->ticket_status=='1')
            <td><strong class='text-success'>Completed</strong></td>
            @elseif($tickets->ticket_status=='0')
            <td><strong class='text-danger'>Pending</strong></td>
            @endif
            <td><a class="btn btn-danger btn-sm" href="{{ route('delete-ticket', $tickets->id) }}">Delete
                Ticket</a></td>
          </tr>

          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</div>
<script src="../js/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
 $('.ticketBtn').on('click', function() {
 var $this = $(this);
 var loadingText = '<i class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></i>&nbsp;Processing...';
 if ($(this).html() !== loadingText) {
 $this.data('original-text', $(this).html());
 $this.html(loadingText);
 }
 setTimeout(function() {
 $this.html($this.data('original-text'));
 },2000);
 });
 })
$(document).ready(function () {
    $('.ticketBt').click(function (e) {
      document.getElementById("btn").disabled = true;
      e.preventDefault();
      var department = $('#department').val();
      var message = $('#message').val();
      $.ajax
        ({
          type: "POST",
          url: "../scripts/create_support_ticket.php",
          data: {"department": department, "message": message},
          success: function (data) {
            document.getElementById("btn").disabled = false;
            $('.createResult').html(data);
            $('#form')[0].reset();
          }
        });
    });
  });
</script>
<script src="dash/assets/js/apps/chats.js?ver=2.4.0"></script>
@include('dashboard.footer')