@extends('layouts.master')

@section('main-content')

<form action="{{ route('saveLostItem') }}" method="get">

    <input type="hidden" value="{{ $data['id'] ?? '' }}" name="id">

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Submit Lost Item</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>What was Lost <span>*</span></label><br>
                                <small>(Dog, Jacket, Smartphone, Wallet, etc.)</small><br>
                                <input type="text" class="form-control" value="{{ $data ['whatWasLost'] ?? '' }}" name="whatWasLost">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Category <span>*</span></label><br>
                                <small>(Animals/Pets, Clothing, Electronics, Personal Accessories etc.)</small><br>
                                <input type="text" class="form-control" value="{{ $data['category'] ?? '' }}" name="category">
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Brand <span>*</span></label><br>
                                <small>(Samsung, Adidas, GoPro, etc)</small><br>
                                <input type="text" class="form-control" value="{{ $data['brand'] ?? '' }}" name="brand">
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Primary Color <span>*</span></label><br>
                                <small>Please add the color that best represents the lost property (Black, Red, Blue, etc.)</small><br>
                                <input type="text" class="form-control" value="{{ $data['primaryColor'] ?? '' }}" name="primaryColor">
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Secondary Color <span>*</span></label><br>
                                <small>Please add a color that acts as a less dominant (Leave blank if not applicable.)</small><br>
                                <input type="text" class="form-control" value="{{ $data['secondaryColor'] ?? '' }}" name="secondaryColor">
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Date Lost <span>*</span></label><br>
                                <small>Please add the approximate date of when the item was lost.</small><br>
                                <input type="date" class="form-control" value="{{ $data['dateLost'] ?? '' }}" name="dateLost">
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Time Lost<span>*</span></label><br>
                                <small>Please add the approximate time of day the item was lost.</small><br>
                                <input type="time" class="form-control" value="{{ $data['timeLost'] ?? '' }}" name="timeLost">
                            </div>
                        </div>
                        <div class="form-group col-12">
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


@endsection
