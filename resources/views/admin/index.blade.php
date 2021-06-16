@extends('layouts.admin')
@section('style')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Users</h2>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Referral Id</th>
                        <th>Bitcoin Address</th>
                        <th>Role</th>
                        <th>Investment</th>
                        <th>Profit</th>
                        <th>Commission</th>
                        <th>Investment Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $index=>$user)
                    <tr data-id="{{$user->id}}" data-name="{{$user->username}}" data-inv="{{$user->investment}}" data-com="{{$user->commission}}">
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->referral_id}}</td>
                        <td>{{$user->bit_addr}}</td>
                        <td>
                            @if($user->role==1)
                                <span class="label label-info">User</span>
                            @else
                                <span class="label label-danger">Admin</span>
                            @endif
                        </td>
                        <td>{{$user->investment}}</td>
                        <td>{{$user->profit}}</td>
                        <td>{{$user->commission}}</td>
                        <td>{{$user->date}}</td>
                        <td><span class="btn btn-xs btn-success edit_btn"><i class="fa fa-edit"></i></span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <ul class="pagination">
                @for ($i = 0; $i < $page_count; $i++)
                    <li class="{{($i+1)==$page_index?'active':''}}"><a href="{{route('admin',['page_index'=>$i+1])}}">{{$i+1}}</a></li>
                @endfor
            </ul>
        </div>
    </div>
</div>
<div class="modal fade" id="edit_modal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Modal</h4>
            </div>
            <div class="modal-body">
                <input id="user_id" type="text" value="" style="display: none;">
                <div class="row">
                    <label class="col-sm-4 control-label">Investment</label>
                    <div class="col-sm-8">
                        <input class="form-control" id="inv_amount" type="text" placeholder="Investment(USD)">
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <label class="col-sm-4 control-label">Commission</label>
                    <div class="col-sm-8">
                        <input class="form-control" id="com_amount" type="text" placeholder="Commission(USD)">
                    </div>
                </div>    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success save_btn">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    var save_wallet_url = "{{route('save_wallet')}}";
</script>
<script type="text/javascript" src="{{asset('js/admin/index.js')}}"></script>
@endsection