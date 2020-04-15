<div class="modal fade bd-example-modal-lg" id="createModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('lead.store')}}" method="post">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Lead</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Company Name</label>
                                <input type="text" class="form-control" name="company_name" value="{{ old('company_name') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Company Email</label>
                                <input type="text" class="form-control" name="company_email" value="{{ old('company_email') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Company Category select</label>
                                <select class="form-control" name="category_id" data-style="btn btn-link" id="exampleFormControlSelect1">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        @if (old('category_id') == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Company Subcategory select</label>
                                <select class="form-control" name="subcategory_id" data-style="btn btn-link" id="exampleFormControlSelect1">
                                    <option value="">Select Subcategory</option>
                                    @foreach ($subcategories as $subcategory)
                                        @if (old('subcategory_id') == $subcategory->id)
                                            <option value="{{ $subcategory->id }}" selected>{{ $subcategory->name }}</option>
                                        @else
                                            <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Company Phone</label>
                                <input type="text" class="form-control" name="company_phone" value="{{ old('company_phone') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Company Website</label>
                                <input type="text" class="form-control" name="company_website" value="{{ old('company_website') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Fist Name</label>
                                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Last Name</label>
                                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Designation</label>
                                <input type="text" class="form-control" name="designation" value="{{ old('designation') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Email</label>
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Company Facebook</label>
                                <input type="text" class="form-control" name="company_facebook" value="{{ old('company_facebook') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Company Twitter</label>
                                <input type="text" class="form-control" name="company_twitter" value="{{ old('company_twitter') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Company Linkdin</label>
                                <input type="text" class="form-control" name="company_linkdin" value="{{ old('company_linkdin') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Company Instagram</label>
                                <input type="text" class="form-control" name="company_instagram" value="{{ old('company_instagram') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Postcode</label>
                                <input type="text" class="form-control" name="postcode" value="{{ old('postcode') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Country select</label>
                                <select class="form-control" name="country_id" data-style="btn btn-link" id="exampleFormControlSelect1">
                                    <option value="">Select Country</option>
                                    @foreach ($countries as $country)
                                        @if (old('country_id') == $country->id)
                                            <option value="{{ $country->id }}" selected>{{ $country->name }}</option>
                                        @else
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Division select</label>
                                <select class="form-control" name="division_id" data-style="btn btn-link" id="exampleFormControlSelect1">
                                    <option value="">Select Division</option>
                                    @foreach ($divisions as $division)
                                        @if (old('division_id') == $division->id)
                                            <option value="{{ $division->id }}" selected>{{ $division->name }}</option>
                                        @else
                                            <option value="{{$division->id}}">{{$division->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">City select</label>
                                <select class="form-control" name="city_id" data-style="btn btn-link" id="exampleFormControlSelect1">
                                    <option value="">Select City</option>
                                    @foreach ($cities as $city)
                                        @if (old('city_id') == $city->id)
                                            <option value="{{ $city->id }}" selected>{{ $city->name }}</option>
                                        @else
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Area select</label>
                                <select class="form-control" name="area_id" data-style="btn btn-link" id="exampleFormControlSelect1">
                                    <option value="">Select Area</option>
                                    @foreach ($areas as $area)
                                        @if (old('area_id') == $area->id)
                                            <option value="{{ $area->id }}" selected>{{ $area->name }}</option>
                                        @else
                                            <option value="{{$area->id}}">{{$area->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating"> Address</label>
                                <textarea class="form-control" name="address" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>    
        </div>
    </div>
</div>