@extends('admin.base')

@section('content')

    <!-- DataTales Example -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                {{$pageName}}
            </h6>
        </div>
        <div class="card-body row">
            <div class="col-md-12 mx-auto">
                <form method="post" action="{{route('admin.package.update')}}">
                    @csrf
                    @include('templates.notification')
                    <div class="form-row">
                        <div class="form-group col-md-6" style="display: none;">
                            <label for="inputEmail4">Id</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Name"
                                   value="{{$package->id}}" name="id">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Name"
                                   value="{{$package->name}}" name="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">ROI</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Email"
                                   value="{{$package->roi}}" name="roi">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Minimum Amount($)</label>
                            <input type="number" class="form-control" id="inputAddress"
                                   value="{{$package->minAmount}}" name="minAmount">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Maximum Amount($)</label>
                            <input type="number" class="form-control" id="inputAddress"
                                   value="{{$package->maxAmount}}" name="maxAmount">
                            <small>Leave empty for unlimited amount</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Duration</label>
                            <input type="text" class="form-control" id="inputAddress"
                                   value="{{$package->Duration}}" name="duration">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Number of Returns</label>
                            <input type="text" class="form-control" id="inputAddress"
                                   value="{{$package->numberOfReturns}}" name="numberOfReturns">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Referral Bonus(%)</label>
                            <input type="number" step="0.01" class="form-control" id="inputAddress"
                                   name="referral" value="{{$package->referral}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Return Type</label>
                            <select type="text" class="form-control" id="inputAddress"
                                    name="returnType">
                                <option value="">Select Return Type</option>
                                <option value="{{$package->returnType}}" selected>{{$returnType->name}}</option>
                                @foreach($returnTypes as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputAddress">Status</label>
                            <select type="text" class="form-control" id="inputAddress"
                                    name="status">
                                <option value="">Select Status</option>
                                @if($package->status ==1)
                                    <option value="1" selected>Active</option>
                                    <option value="2" >Inactive</option>
                                @else
                                    <option value="1" >Active</option>
                                    <option value="2" selected>Inactive</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
