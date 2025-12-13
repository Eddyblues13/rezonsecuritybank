@include('dashboard.header')
<!-- main header @e -->
<div class="nk-content nk-content-fluid">
    <div class="nk-block">

        <!-- .nk-block-head -->
        <div class="card card-bordered">
            <table class="table table-ulogs">
                <thead class="thead-light">
                    <tr>
                        <th class="tb-col-os"><span class="overline-title">Browser <span class="d-sm-none">/
                                    IP</span></span>
                        </th>
                        <th class="tb-col-ip"><span class="overline-title">IP</span></th>
                        <th class="tb-col-time"><span class="overline-title">Time</span></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($activity as $activity)
                    <tr>
                        <td class="tb-col-os">{{$activity->last_login_user_agent}}</td>
                        <td class="tb-col-ip"><span class="sub-text">{{$activity->last_login_ip}}</span></td>
                        <td class="tb-col-time"><span class="sub-text">{{
                                \Carbon\Carbon::parse($activity->last_login_at)->format('D, M
                                j, Y g:i A') }}</span></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- .card -->
    </div>
    <!-- .nk-block -->
</div>
@include('dashboard.footer')