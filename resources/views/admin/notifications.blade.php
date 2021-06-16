@extends('layouts.admin')
@section('style')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Notifications</h2>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Referral Id</th>
                        <th>Bitcoin Address</th>
                        <th>Content</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($res as $index=>$item)
                    <tr data-id="{{$item->id}}">
                        <td>{{$item->username}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->referral_id}}</td>
                        <td>{{$item->bit_addr}}</td>
                        <td>{{$item->content}}</td>
                        <td>{{$item->amount}} USD</td>
                        <td>
                            @if($item->status=='unread')
                            <span class="label label-danger">unread</span>
                            @else
                            <span class="label label-info">read</span>
                            @endif
                        </td>
                        <td>{{$item->date}}</td>
                        <td><button class="btn btn-xs btn-danger">read</button></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9" class="text-center">There is no notifications</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <ul class="pagination">
                
            </ul>
        </div>
    </div>
</div>

@endsection
@section('script')
<script type="text/javascript">
    
</script>
<script type="text/javascript" src="{{asset('js/admin/notifications.js')}}"></script>
@endsection