@extends('layouts.master')

@section('main-content')

<title>View Recently Reported Lost and Found Items</title>
<div class="text-center mb-4 mx-5">
                        
            <div class="row">
                <div class="col-sm-6">
                    <div class=" text-center mb-4 mx-5">
                        <label for="sub_category_id" class="control-label lbl-descriptive">What was Found
                            <small class="required">*</small>
                                <span class="label-detail">(Dog, Jacket, Smartphone, Wallet, etc.) This field is required.</span>
                        </label>

                        <input id="search_sub_cat" class="form-control search-item-input" placeholder="What was Found" name="sub_category_id" type="text" spellcheck="false" data-ms-editor="true">
                        <div class="search-box"></div>
                                            </div>

                    <div class="text-center mb-4 mx-5 ">
                        <label for="category_id" class="control-label lbl-descriptive">Category
                            <small class="required">*</small>
                            <span class="label-detail">(Animals/Pets, Clothing, Electronics, Personal Accessories etc.) This Field may Auto-Populate</span>
                        </label>

                        <input id="search_cat" class="form-control search-item-input" placeholder="Search Category" name="category_id" type="text" spellcheck="false" data-ms-editor="true">
                        <div class="search-box"></div>
                                            </div>

                    <div class="text-center mb-4 mx-5 ">
                        <label for="brand_id" class="control-label lbl-descriptive">
                            <span class="brand_label">Brand</span>
                            <span class="label-detail brand_desc_text">(Ralph Lauren, Samsung, KitchenAid, etc.)</span></label>

                        <input id="search_brand" class="form-control search-item-input" placeholder="Search Brand" name="brand_id" type="text" spellcheck="false" data-ms-editor="true">
                        <div class="search-box"></div>
                                            </div>

                    <div class="text-center mb-4 mx-5">
                        <label for="primary_color" class="control-label lbl-descriptive">Primary Color
                        <span class="label-detail">Please Add the Color That best represents the found property (Black, Red, Blue, etc.)</span>
                        </label>
                        <input id="primary_color" class="form-control search_color" placeholder="Search Primary Color" name="primary_color" type="text" spellcheck="false" data-ms-editor="true">
                        <div class="search-box"></div>
                    </div>

                    <div class="text-center mb-4 mx-5">
                        <label for="secondary_color" class="control-label lbl-descriptive">Secondary Item Color
                            <span class="label-detail">Please add a color that acts as a less dominant (Leave blank if not applicable.)</span>
                        </label>
                        <input id="secondary_color" class="form-control search_color" placeholder="Search Secondary Color" name="secondary_color" type="text" spellcheck="false" data-ms-editor="true">
                        <div class="search-box"></div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="text-center mb-4 mx-5">
                        <label for="date" class="control-label lbl-descriptive">Date Found
                            <small class="required">*</small>
                            <span class="label-detail">Please add the approximate date of when the item was found.</span>
                        </label>
                        <div class="input-group date">
                            <input id="incident_date" class="form-control" placeholder="Date Found" name="incident_date" type="text" spellcheck="false" data-ms-editor="true">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </div>
                                            </div>
                    <div class="text-center mb-4 mx-5">
                        <label for="time" class="control-label lbl-descriptive">Time Found
                            <small class="required">*</small>
                            <span class="label-detail">Please add the approximate time of day that the was item found.</span>
                        </label>
                        <div class="input-group">
                            <input id="time" class="form-control time" placeholder="Time Found" name="time" type="text" spellcheck="false" data-ms-editor="true">
                            <span class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                            </span>
                        </div>
                                            </div>

                    <div class="">
                        <label class="control-label lbl-descriptive">Upload Image
                        <span class="label-detail">(This image will display on the website.)<span>
                        </span></span></label>
                                                    <input placeholder="Upload an image or file of the item" class="form-control" id="upload_image_name" name="upload_image" type="hidden">
                                                <input id="upload_media_image" name="upload_image_name" type="hidden">
                                            </div>
                    <!---Image Container-->
                    <div id="upload-image-container" class="cropContainer"><div class="cropControls cropControlsUpload"> <i class="cropControlUpload"></i> </div><form class="upload-image-container_imgUploadForm" style="visibility: hidden;">  <input type="file" name="img" id="upload-image-container_imgUploadField">  </form></div>

                    <div class="text-center mb-4 mx-5 ">
                        <label for="additional_information" class="control-label lbl-descriptive">Additional Information
                        <span class="label-detail">Please provide any additional details/description of your found property.</span>
                        </label>
                        <textarea id="additional_information" class="form-control" placeholder="Additional Information" rows="5" name="additional_information" cols="50" spellcheck="false" data-ms-editor="true"></textarea>
                                            </div>
                </div>
            </div>
        </div>
@endsection