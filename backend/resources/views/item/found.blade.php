@extends('layouts.master')

@section('main-content')

<title>View Recently Reported Lost and Found Items</title>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Submit Found Item</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="what-was-found-column">What was Found <span aria-hidden="true">*</span></label><br>
                                <small id="found-helper">(Dog, Jacket, Smartphone, Wallet, etc.)</small>
                                <small id="found-error" class="error" style="color: red; display: none;">This field is required</small>
                                <input type="text" id="what-was-found-column" class="form-control" placeholder="What was Found" name="what-was-found-column" spellcheck="false" data-ms-editor="true" aria describedly="found-helper found-error">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="category-column">Category <span aria-hidden="true">*</span></label><br>
                                <small id="category-helper">(Animals/Pets, Clothing, Electronics, Personal Accessories etc.)</small>
                                <small id="category-error" class="error" style="color: red; display: none;">This feild is required</small>
                                <input type="text" id="category-column" class="form-control" placeholder="Category" name="category-column" spellcheck="false" data-ms-editor="true" aria describedly="category-helper category-error">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="brand-column">Brand <span aria-hidden="true">*</span></label><br>
                                <small id="brand-helper">(Samsung, Adidas, GoPro, etc)</small>
                                <small id="brand-error" class="error" style="color: red; display: none;">This field is required</small>
                                <input type="text" id="brand-column" class="form-control" placeholder="Brand" name="brand-column" spellcheck="false" data-ms-editor="true" aria describedly="brand-helper brand-error">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="country-floating">Primary Color <span>*</span></label>
                                <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country" spellcheck="false" data-ms-editor="true">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="company-column">Secondary Color <span>*</span></label>
                                <input type="text" id="company-column" class="form-control" name="company-column" placeholder="Company" spellcheck="false" data-ms-editor="true">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="email-id-column">Email</label>
                                <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group col-12">
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
