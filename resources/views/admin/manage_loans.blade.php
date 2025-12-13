@include('admin.header')
<div class="main-panel">
	<div class="content bg-dark">
		<div class="page-inner">
			@if(session('message'))
			<div class="alert alert-success mb-2">{{session('message')}}</div>
			@endif
			<div class="mt-2 mb-4">
				<h1 class="title1 text-light">Manage clients Loans</h1>
			</div>
			<div>
			</div>
			<div>
			</div>
			<div class="mb-5 row">
				<div class="col card p-3 shadow bg-dark">
					<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
						<span style="margin:3px;">
							<table id="ShipTable" class="table table-hover text-light">
								<thead>
									<tr>

										<th>Client Name</th>
										<th>Client Email</th>
										<th>Loan Amount</th>
										<th>Loan Facility</th>
										<th>Loan Tenure</th>
										<th>Loan Purpose</th>
										<th>Status</th>
										<th>Date created</th>
										<th>Option</th>
									</tr>
								</thead>
								<tbody>
									@foreach($loans as $loans) <tr>

										<td>{{$loans->first_name}} {{$loans->middle_name}}
											{{$loans->last_name}}</td>
										<td>{{$loans->email}}</td>
										<td>{{$loans->currency}}{{number_format($loans->loan_amount,
											2)}}</td>
										<td>{{$loans->loan_facility}}</td>
										<td>{{$loans->loan_tenure}}</td>
										<td>{{$loans->loan_purpose}}</td>
										<td>
											@if($loans->loan_status==='0')
											<span class="badge badge-danger">Pending</span>
											@elseif($loans->loan_status==='1')
											<span class="badge badge-success">Processed</span>
											@endif

										</td>
										<td>{{ \Carbon\Carbon::parse($loans->created_at)->format('D, M j, Y g:i A') }}
										</td>
										<td>
											<a href="{{ route('approve.loan',$loans->id) }}"
												class="btn btn-primary btn-sm"><i class="text-white fa fa-pencil"></i>
												Approve
											</a> &nbsp;
											<a href="{{ route('decline.loan',$loans->id) }}"
												class="btn btn-danger btn-sm"><i class="text-white fa fa-times"></i>
												Decline
											</a>
										</td>
										@endforeach
									</tr>

								</tbody>
							</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('admin.footer')