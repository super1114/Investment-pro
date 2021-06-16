@extends('layouts.admin')
@section('style')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Set bitcoin rate</h2>
            <div class="row" style="margin-top: 30px;">
                <label class="col-sm-2 control-label">Bitcoin Rate:</label>
                <div class="col-sm-4">
                    <input class="form-control" value="{{$bitcoin->bitcoin_rate}}" id="bitcoin_rate" type="text" placeholder="Enter Bitcoin Rate (46,572.00)">
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-sm btn-success save_bitcoin">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    var save_bitcoin_url = "{{route('save_bitcoin')}}";
</script>
<script type="text/javascript" src="{{asset('js/admin/bitcoin.js')}}"></script>
@endsection