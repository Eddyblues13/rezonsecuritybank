@include('admin.header')

<!-- End Sidebar -->
<div class="main-panel">
	<div class="content bg-dark">
		<div class="page-inner">
			@if(session('message'))
			<div class="alert alert-success mb-2">{{session('message')}}</div>
			@endif
			<div class="mt-2 mb-4">
				<h1 class="title1 text-light">User Transfers</h1>
			</div>
			<div>
			</div>
			<div>
			</div>
			<div class="mb-5 row">

				@foreach($transfers as $transfers)
				<div class="col-lg-4">

					<div class="pricing-table purple border p-4 card bg-dark shadow">
						<div class="price-tag">

							<center><i>Name: {{$profileData->first_name}} {{$profileData->middle_name}}
									{{$profileData->last_name}}</i></center>


						</div>
						<!-- Features -->
						<div class="pricing-features">
							<div class="feature text-light">Email:<span
									class="text-light">{{$profileData->email}}</span>
							</div>

							<div class="feature text-light">Transfer Amount:<span
									class="text-light">{{$profileData->currency}}{{number_format($transfers->transfer_amount,
									2)}}</span></div>
							<div class="feature text-light">Bank Name:<span class="text-light">{{$transfers->bank_name}}
								</span></div>
							<div class="feature text-light">Account Holder:<span
									class="text-light">{{$transfers->account_holder}}</span></div>

							<div class="feature text-light">Account Number:<span
									class="text-light">{{$transfers->account_number}}</span></div>
							<div class="feature text-light">Description:<span
									class="text-light">{{$transfers->description}}</span></div>
							<br>
							<div class="feature text-light">Transfer Status:<span class="text-light">
									@if($transfers->transfer_status==='0')
									<span class="badge badge-danger">Pending</span>
									@elseif($transfers->transfer_status==='1')
									<span class="badge badge-success">Approved</span>
									@endif
								</span></div>
							<br>

						</div>


						<!-- Button -->
						<div class="text-center">

							<a href="{{ route('approve.transfer',$transfers->id) }}" class="btn btn-primary"><i
									class="text-white fa fa-pencil"></i>
								Approve
							</a> &nbsp;
							<a href="{{ route('decline.transfer',$transfers->id) }}" class="btn btn-danger"><i
									class="text-white fa fa-times"></i>
								Decline
							</a>


						</div>
					</div>

				</div>
				@endforeach
			</div>

		</div>
	</div>
</div>



@include('admin.footer')