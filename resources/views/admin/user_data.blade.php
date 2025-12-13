@include('admin.header')
<div class="main-panel">
    <div class="content bg-dark">
        <div class="page-inner">
            @if(session('message'))
            <div class="alert alert-success mb-2">{{session('message')}}</div>
            @endif
            <div>
            </div>
            <div>
            </div> <!-- Beginning of  Dashboard Stats  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="p-3 card bg-dark">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <h1 class="d-inline text-primary">{{$profileData->first_name}}</h1><span></span>
                                    <div class="d-inline">
                                        <div class="float-right btn-group">
                                            <a class="btn btn-primary btn-sm" href="{{route('manage.users')}}"> <i
                                                    class="fa fa-arrow-left"></i> back</a> &nbsp;
                                            <button type="button" class="btn btn-secondary dropdown-toggle btn-sm"
                                                data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                                aria-expanded="false">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-lg-right">

                                                <a class="dropdown-item"
                                                    href="{{route('manage.user.transfers',$profileData->id)}}">Transfer
                                                    History</a>
                                                <a class="dropdown-item"
                                                    href="{{route('manage.user.transactions',$profileData->id)}}">Transaction
                                                    History</a>
                                                <a class="dropdown-item"
                                                    href="{{route('manage.user.loans',$profileData->id)}}">Loan
                                                    History</a>
                                                <a class="dropdown-item"
                                                    href="{{route('manage.user.deposits',$profileData->id)}}">Deposit
                                                    History</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal"
                                                    data-target="#accountSuspension">Account Suspension</a>
                                                <a href="#" data-toggle="modal" data-target="#topupModal"
                                                    class="dropdown-item">Account Funding</a>
                                                <a href="#" data-toggle="modal" data-target="#accountverificationModal"
                                                    class="dropdown-item">Account Verification</a>
                                                <a href="#" data-toggle="modal" data-target="#clearacctModal"
                                                    class="dropdown-item">Clear Account</a>
                                                <a href="#" data-toggle="modal" data-target="#sendmailtooneuserModal"
                                                    class="dropdown-item">Send Email</a>
                                                <a href="#" data-toggle="modal" data-target="#switchuserModal"
                                                    class="dropdown-item text-success">Gain Access</a>
                                                <a href="#" data-toggle="modal" data-target="#deleteModal"
                                                    class="dropdown-item text-danger">Delete
                                                    {{$profileData->first_name}}</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 mt-4 border rounded row text-light">
                                <div class=" col-sm-6 col-md-3">
                                    <h5 class="text-bold">Account Balance</h5>
                                    <p>{{$profileData->currency}}{{number_format($user_balance, 2)}}</p>
                                </div>

                                <br />
                                <div class="col-md-3 card">

                                    <h5 class="text-bold">Total Deposits</h5>
                                    <p>{{$profileData->currency}}{{number_format($total_deposit, 2)}}</p>
                                    <a class="btn btn-sm btn-primary d-inline"
                                        href="{{route('manage.user.deposits',$profileData->id)}}">View Deposits</a>
                                </div>
                                <br />
                                <div class="col-md-3 card">
                                    <h5 class="text-bold">Total Loans</h5>
                                    <p>{{$profileData->currency}}{{number_format($total_loan, 2)}}</p>
                                    <a class="btn btn-sm btn-primary d-inline"
                                        href="{{route('manage.user.loans',$profileData->id)}}">View Loans</a>
                                </div>
                                <br />

                                <div class="col-md-3 card">
                                    <h5>Total Transfers</h5>
                                    <p>{{$profileData->currency}}{{number_format($total_transfer, 2)}}</p>
                                    <a class="btn btn-sm btn-primary d-inline"
                                        href="{{route('manage.user.transfers',$profileData->id)}}">View Transfers</a>

                                </div>

                                <br />
                                {{-- <div class="col-md-3 card">
                                    <h5>Kyc</h5>

                                    <a class="btn btn-sm btn-primary d-inline"
                                        href="{{route('kyc.details',$profileData->id)}}">View Kyc</a>

                                </div> --}}

                                <br />
                                <div class="col-md-3 card">
                                    <h5>User Status</h5>
                                    @if($profileData->user_status=="0")
                                    <span class="badge badge-danger">Not Verified Yet</span>
                                    @elseif($profileData->user_status=="1")
                                    <span class="badge badge-success">Verified</span>
                                    @endif
                                </div>
                            </div>
                            <div class="mt-3 row text-light">
                                <div class="col-md-12">
                                    <h5>USER INFORMATION</h5>
                                </div>
                            </div>
                            <div class="p-3 border row text-light">
                                <div class="col-md-4 border-right">
                                    <h5>Fullname</h5>
                                </div>
                                <div class="col-md-8">
                                    <h5>{{$profileData->first_name}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row text-light">
                                <div class="col-md-4 border-right">
                                    <h5>Email Address</h5>
                                </div>
                                <div class="col-md-8">
                                    <h5>{{$profileData->email}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row text-light">
                                <div class="col-md-4 border-right">
                                    <h5>Mobile Number</h5>
                                </div>
                                <div class="col-md-8">
                                    <h5>{{$profileData->phone_number}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row text-light">
                                <div class="col-md-4 border-right">
                                    <h5>IC Code</h5>
                                </div>
                                <div class="col-md-8">
                                    <h5>{{$profileData->ic_code}}</h5>
                                </div>

                                <a class="btn btn-sm btn-primary d-inline" href="#" data-toggle="modal"
                                    data-target="#icCodeModal">Update IC Code</a>
                            </div>
                            <div class="p-3 border row text-light">
                                <div class="col-md-4 border-right">
                                    <h5>TIN Code</h5>
                                </div>
                                <div class="col-md-8">
                                    <h5>{{$profileData->tin_code}}</h5>
                                </div>

                                <a class="btn btn-sm btn-primary d-inline" href="#" data-toggle="modal"
                                    data-target="#tinCodeModal">Update TIN Code</a>
                            </div>
                            <div class="p-3 border row text-light">
                                <div class="col-md-4 border-right">
                                    <h5>TAC Code</h5>
                                </div>
                                <div class="col-md-8">
                                    <h5>{{$profileData->tac_code}}</h5>
                                </div>

                                <a class="btn btn-sm btn-primary d-inline" href="#" data-toggle="modal"
                                    data-target="#tacCodeModal">Update TAC Code</a>
                            </div>
                            <div class="p-3 border row text-light">
                                <div class="col-md-4 border-right">
                                    <h5>Account Number</h5>
                                </div>
                                <div class="col-md-8">
                                    <h5>{{$profileData->account_number}}</h5>
                                </div>
                            </div>

                            <div class="p-3 border row text-light">
                                <div class="col-md-4 border-right">
                                    <h5>Nationality</h5>
                                </div>
                                <div class="col-md-8">
                                    <h5>{{$profileData->country}}</h5>
                                </div>
                            </div>

                            <div class="p-3 border row text-light">
                                <div class="col-md-4 border-right">
                                    <h5>Registered</h5>
                                </div>
                                <div class="col-md-8">
                                    <h5>{{ \Carbon\Carbon::parse($profileData->created_at)->format('D, M j, Y g:i A') }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Up Modal first -->
    <div id="topupModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">Credit/Debit {{$profileData->first_name}} account.</strong></h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                    <form action="{{route('credit-debit')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="user_id" value="{{$profileData->id}}">
                            <input type="hidden" class="form-control" name="name"
                                value="{{$profileData->first_name}} {{$profileData->middle_name}} {{$profileData->last_name}}">
                            <input type="hidden" class="form-control" name="email" value="{{$profileData->email}}">
                            <input type="hidden" class="form-control" name="currency"
                                value="{{$profileData->currency}}">
                            <input type="hidden" class="form-control" name="account_number"
                                value="{{$profileData->account_number}}">
                        </div>
                        <div class="form-group">
                            <input class="form-control bg-dark text-light" placeholder="Enter amount" type="text"
                                name="amount" required>
                        </div>
                        <div class="form-group">
                            <h5 class="text-light">Scope</h5>
                            <select class="form-control bg-dark text-light" name="scope" required>
                                <option value="" selected disabled>Select Scope</option>
                                <option value="Local Transfer">Local Transfer</option>
                                <option value="International Transfer">International Transfer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control bg-dark text-light" placeholder="Description"
                                name="decscription">Description</textarea>
                        </div>

                        <div class="form-group">
                            <h5 class="text-light">Select credit to add, debit to subtract.</h5>
                            <select class="form-control bg-dark text-light" name="type" required>
                                <option value="">Select type</option>
                                <option value="Credit">Credit</option>
                                <option value="Debit">Debit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-light" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Switch useraccount Modal -->
    <div id="switchuserModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">You are about to login as {{$profileData->first_name}}.</strong>
                    </h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                    <a class="btn btn-success" href="{{ route('users.impersonate', $profileData->id) }}">Proceed</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Switch user account Modal -->

    <!-- set user ic code Modal-->
    <div id="icCodeModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">IC CODE</h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                    <p class="text-light">Set {{$profileData->first_name}}
                        {{$profileData->middle_name}} {{$profileData->last_name}} ICS Code</p>
                    <form style="padding:3px;" role="form" method="post" action="{{ route('ic-code')}}">
                        @csrf


                        <div class=" form-group">
                            <input type="number" name="ic_code" class="form-control bg-dark text-light"
                                placeholder="{{$profileData->ic_code}}" required>
                        </div>

                        <div class=" form-group">
                            <input type="submit" class="btn btn-light" value="Set Code">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- set user tin code Modal-->
    <div id="tinCodeModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">TIN CODE</h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                    <p class="text-light">Set {{$profileData->first_name}}
                        {{$profileData->middle_name}} {{$profileData->last_name}} TIN Code</p>
                    <form style="padding:3px;" role="form" method="post" action="{{ route('tin-code')}}">
                        @csrf


                        <div class=" form-group">
                            <input type="number" name="tin_code" class="form-control bg-dark text-light"
                                placeholder="{{$profileData->tin_code}}" required>
                        </div>

                        <div class=" form-group">
                            <input type="submit" class="btn btn-light" value="Set Code">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- set user tin code Modal-->
    <div id="tacCodeModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">TAC CODE</h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                    <p class="text-light">Set {{$profileData->first_name}}
                        {{$profileData->middle_name}} {{$profileData->last_name}} TAC Code</p>
                    <form style="padding:3px;" role="form" method="post" action="{{ route('tac-code')}}">
                        @csrf


                        <div class=" form-group">
                            <input type="number" name="tac_code" class="form-control bg-dark text-light"
                                placeholder="{{$profileData->tac_code}}" required>
                        </div>

                        <div class=" form-group">
                            <input type="submit" class="btn btn-light" value="Set Code">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Trading History Modal -->

    <!-- send a single user email Modal-->
    <div id="sendmailtooneuserModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">Send Email</h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                    <p class="text-light">This message will be sent to {{$profileData->first_name}}</p>
                    <form style="padding:3px;" role="form" method="post" action="{{ route('send.mail')}}">
                        @csrf

                        <div class=" form-group">
                            <input type="email" name="email" class="form-control bg-dark text-light"
                                value="{{$profileData->email}}">
                        </div>
                        <div class=" form-group">
                            <input type="text" name="subject" class="form-control bg-dark text-light"
                                placeholder="Subject" required>
                        </div>
                        <div class=" form-group">
                            <textarea placeholder="Type your message here" class="form-control bg-dark text-light"
                                name="message" row="8" placeholder="Type your message here" required></textarea>
                        </div>
                        <div class=" form-group">
                            <input type="hidden" name="user_id" value="151">
                            <input type="submit" class="btn btn-light" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Trading History Modal -->



    <!-- Account verification Modal -->
    <div id="accountverificationModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">You are about to verify {{$profileData->first_name}}'s account,
                        Ones you verify thier account they wil be able to access thier account.</strong></h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                    <a class="btn btn-success" href="{{ route('user.a', $profileData->id) }}">Verify</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Account verification Modal -->

    <!-- Account suspension Modal -->
    <div id="accountSuspension" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">You are about to suspend {{$profileData->first_name}}'s account,
                        Ones you verify thier account they wil not be able to access thier account.</strong></h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                    <a class="btn btn-success" href="{{ route('user.suspension', $profileData->id) }}">Account
                        Suspension</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Account suspension Modal -->

    <!-- Clear account Modal -->
    <div id="clearacctModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">Clear Account</strong></h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                    <p class="text-light">You are clearing account for {{$profileData->first_name}} to $0.00</p>
                    <a class="btn btn-light" href="{{route('clear.account',$profileData->id)}}">Proceed</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Clear account Modal -->

    <!-- Delete user Modal -->
    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">

                    <h4 class="modal-title text-light">Delete User</strong></h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark p-3">
                    <p class="text-light">Are you sure you want to delete {{$profileData->first_name}} Account?
                        Everything associated with this account will be loss.</p>
                    <a class="btn btn-danger" href="{{ route('delete.user', $profileData->id) }}">Yes i'm sure</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete user Modal -->

    @include('admin.footer')