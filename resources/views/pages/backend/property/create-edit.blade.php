<x-app-layout>
    @push('style')
        <!-- Custom Styles -->
        <style>
            .upload-area {
                border: 2px dashed #d3d3d3;
                padding: 20px;
                text-align: center;
                cursor: pointer;
                border-radius: 5px;
                margin-bottom: 20px;
            }
            .upload-area:hover {
                background-color: #f0f0f0;
            }
            .upload-area i {
                font-size: 48px;
                color: #6c757d;
            }
            .upload-area p {
                margin-top: 10px;
                font-size: 16px;
                color: #6c757d;
            }
            .preview-area {
                margin-top: 10px;
            }
            .preview-item {
                display: flex;
                align-items: center;
                padding: 10px !important;
            }
            .preview-item img{
                margin-right: 25px;
            }
        </style>

        <!-- Quill CSS -->
        <link href="{{ asset('public/backend/libs/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/backend/libs/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/backend/libs/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />
    @endpush

    <form action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="property_id" id="property_id" value="{{ old('property_id', $property->id ?? null) }}">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Property Information</h5>
                    </div>
                    <div class="card-body">
                        <!-- Property Title -->
                        <div class="mb-3">
                            <label class="form-label" for="property_name">Property Title</label>
                            <input type="text" name="property_name" id="property_name" class="form-control @error('property_name') is-invalid @enderror" placeholder="Enter Property Title" value="{{ old('property_name', $property->property_name ?? '') }}" required>
                            @error('property_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Area Size & Price -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="area_size">Area Size (sq ft)</label>
                                    <input type="number" name="area_size" id="area_size" class="form-control" placeholder="Enter Area Size" value="{{ old('area_size', $property->area_size ?? '') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="price">Price (৳)</label>
                                    <input type="number" name="price" id="price" class="form-control" placeholder="Enter Price" value="{{ old('price', $property->price ?? '') }}">
                                </div>
                            </div>
                        </div>

                        <!-- Bedrooms, Bathrooms, Dining & Balcony Count -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="bedroom_count">Bedrooms</label>
                                    <input type="number" name="bedroom_count" id="bedroom_count" class="form-control" value="{{ old('bedroom_count', $property->bedroom_count ?? '') }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="bathroom_count">Bathrooms</label>
                                    <input type="number" name="bathroom_count" id="bathroom_count" class="form-control" value="{{ old('bathroom_count', $property->bathroom_count ?? '') }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="dining_room_count">Dining Rooms</label>
                                    <input type="number" name="dining_room_count" id="dining_room_count" class="form-control" value="{{ old('dining_room_count', $property->dining_room_count ?? '') }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="balcony_count">Balconies</label>
                                    <input type="number" name="balcony_count" id="balcony_count" class="form-control" value="{{ old('balcony_count', $property->balcony_count ?? '') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <!-- Upload Floor Plan -->
                                <div class="mb-3">
                                    <label class="form-label" for="floor_plan_path">Upload Floor Plan</label>
                                    <input type="file" name="floor_plan_path" id="floor_plan_path" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Upload Property PDF -->
                                <div class="mb-3">
                                    <label class="form-label" for="pdf_path">Upload Property Brochure (PDF)</label>
                                    <input type="file" name="pdf_path" id="pdf_path" class="form-control">
                                </div>
                            </div>
                        </div>
                        

                        <div class="mb-3">
                            <label for="property_description">Property Description</label>
                            <div id="property_description" class="snow-editor" style="height: 300px;">
                                {!! old('description', $property->description ?? null) !!}
                            </div>
                            <input type="hidden" name="description" id="description" value="{{ old('description', $property->description ?? null) }}">
                        </div>

                    </div>
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Property Address</Address></h5>
                    </div>
                    <div class="card-body">
                        <!-- Property Status -->
                        <div class="mb-3">
                            <label class="form-label" for="property_status">Property Status</label>
                            <select name="property_status" id="property_status" class="form-control" required>
                                <option value="">Select Status</option>
                                <option value="For Sale" {{ old('property_status', $propertyAddress->property_status ?? '') == 'For Sale' ? 'selected' : '' }}>For Sale</option>
                                <option value="For Rent" {{ old('property_status', $propertyAddress->property_status ?? '') == 'For Rent' ? 'selected' : '' }}>For Rent</option>
                            </select>
                        </div>

                        <!-- Property Type & Condition -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Property Type Dropdown -->
                                <div class="mb-3">
                                    <label class="form-label" for="property_type">Property Type</label>
                                    <select name="property_type" id="property_type" class="form-control form-select">
                                        <option value="">Select Property Type</option>
                                        <option value="Apartment" {{ old('property_type', $propertyAddress->property_type ?? '') == 'Apartment' ? 'selected' : '' }}>Apartment</option>
                                        <option value="House" {{ old('property_type', $propertyAddress->property_type ?? '') == 'House' ? 'selected' : '' }}>House</option>
                                        <option value="Condo" {{ old('property_type', $propertyAddress->property_type ?? '') == 'Condo' ? 'selected' : '' }}>Condo</option>
                                        <option value="Villa" {{ old('property_type', $propertyAddress->property_type ?? '') == 'Villa' ? 'selected' : '' }}>Villa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Property Condition Dropdown -->
                                <div class="mb-3">
                                    <label class="form-label" for="property_condition">Property Condition</label>
                                    <select name="property_condition" id="property_condition" class="form-control form-select">
                                        <option value="">Select Property Condition</option>
                                        <option value="New" {{ old('property_condition', $propertyAddress->property_condition ?? '') == 'New' ? 'selected' : '' }}>New</option>
                                        <option value="Good" {{ old('property_condition', $propertyAddress->property_condition ?? '') == 'Good' ? 'selected' : '' }}>Good</option>
                                        <option value="Needs Renovation" {{ old('property_condition', $propertyAddress->property_condition ?? '') == 'Needs Renovation' ? 'selected' : '' }}>Needs Renovation</option>
                                        <option value="Under Construction" {{ old('property_condition', $propertyAddress->property_condition ?? '') == 'Under Construction' ? 'selected' : '' }}>Under Construction</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Built Year & Dimension -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="built_year">Built Year</label>
                                    <input type="number" name="built_year" id="built_year" class="form-control" placeholder="Enter Built Year" value="{{ old('built_year', $propertyAddress->built_year ?? '') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="dimension">Dimension</label>
                                    <input type="text" name="dimension" id="dimension" class="form-control" placeholder="Enter Dimensions (e.g. 50x100 ft)" value="{{ old('dimension', $propertyAddress->dimension ?? '') }}">
                                </div>
                            </div>
                        </div>

                        <!-- Country & City -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="country">Country</label>
                                    <input type="text" name="country" id="country" class="form-control" placeholder="Enter Country" value="{{ old('country', $propertyAddress->country ?? '') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="city">City</label>
                                    <input type="text" name="city" id="city" class="form-control" placeholder="Enter City" value="{{ old('city', $propertyAddress->city ?? '') }}">
                                </div>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="mb-3">
                            <label class="form-label" for="location">Location</label>
                            <textarea name="location" id="location" class="form-control" rows="2" placeholder="Enter Exact Location">{{ old('location', $propertyAddress->location ?? '') }}</textarea>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end col -->

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Publish</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="choices-publish-status-input" class="form-label">Status</label>
                            <select name="status" class="form-select" id="choices-publish-status-input" data-choices data-choices-search-false>
                                <option value="Published" {{ old('status', $property->status ?? null) == 'Published' ? 'selected' : '' }}>Published</option>
                                <option value="Unpublished" {{ old('status', $property->status ?? null) == 'Unpublished' ? 'selected' : '' }}>Unpublished</option>
                                <option value="Draft" {{ old('status', $property->status ?? null) == 'Draft' ? 'selected' : '' }}>Draft</option>
                            </select>
                        </div>
                        
                        <!-- Phases & Agent -->
                        <div class="mb-3">
                            <label class="form-label" for="phases">Phases</label>
                            <select name="phases" id="phases" class="form-control">
                                <option value="">Select a Phase</option>
                                <option value="On Going" {{ old('phases', $property->phases ?? '') == 'On Going' ? 'selected' : '' }}>On Going</option>
                                <option value="Upcomming" {{ old('phases', $property->phases ?? '') == 'Upcomming' ? 'selected' : '' }}>Upcomming</option>
                                <option value="Completed" {{ old('phases', $property->phases ?? '') == 'Completed' ? 'selected' : '' }}>Completed</option>
                            </select>                                    
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="agent_id">Agent</label>
                            <select name="agent_id" id="agent_id" class="form-control">
                                <option value="">Select an Agent</option>
                                @foreach($agents as $agent)
                                    <option value="{{ $agent->id }}" {{ old('agent_id', $property->agent_id ?? '') == $agent->id ? 'selected' : '' }}>
                                        {{ $agent->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                     
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->


                <!-- Property Image -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Property Gallery (W:480px * H:287px)</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <h5 class="fs-14 mb-1">Property Image</h5>
                            <p class="text-muted">Add Property main Image.</p>
                            <div class="text-center">
                                <div class="position-relative d-inline-block">
                                    <!-- Upload Icon & File Input -->
                                    <div class="position-absolute top-100 start-100 translate-middle">
                                        <label for="property-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                            <div class="avatar-xs">
                                                <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                    <i class="ri-image-fill"></i>
                                                </div>
                                            </div>
                                        </label>
                                        <input type="file" name="image_path" class="form-control d-none @error('image_path') is-invalid @enderror" id="property-image-input" accept="image/png, image/gif, image/jpeg">
                                        @error('image_path')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!-- Image Preview -->
                                    <div class="avatar-lg">
                                        <div class="avatar-title bg-light rounded">
                                            <img src="{{ asset($property?->image_path ? 'public/' . $property->image_path : 'public/backend/images/product-img.png') }}" id="product-img" class="avatar-md h-auto" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <script>
                            document.getElementById('property-image-input').addEventListener('change', function() {
                                const [file] = this.files;
                                if (file) {
                                    // Validate file type and size in JavaScript (optional)
                                    if (!file.type.match('image.*')) {
                                        alert("Please select a valid image file.");
                                        this.value = ''; // Clear file input
                                        return;
                                    }
                                    if (file.size > 2 * 1024 * 1024) { // 2MB limit
                                        alert("File size exceeds the 2MB limit.");
                                        this.value = ''; // Clear file input
                                        return;
                                    }
                                    // Preview the image
                                    document.getElementById('product-img').src = URL.createObjectURL(file);
                                }
                            });
                        </script>


                        <!-- Property Gallery Images -->
                        <div class="container mt-5">
                            <h4>Property Gallery Images</h4>
                            <p>Add multiple images for the property gallery.</p>
                            <div class="upload-area" onclick="document.getElementById('file-input').click()">
                                <i class="mdi mdi-cloud-upload"></i>
                                <p>Drop files here to upload<br>or click to select files</p>
                            </div>
                            <input type="file" id="file-input" name="property_images[]" multiple style="display: none;">
                            <div class="preview-area" id="preview-area">
                                @if ($property && $property->propertyImages && $property->propertyImages->isNotEmpty())
                                    @foreach ($property->propertyImages as $item)
                                        @php
                                            $imagePath = public_path($item->property_image); // Full path to the image file
                                            $imageName = basename($item->property_image); // Extract the image name
                                            $imageSize = file_exists($imagePath) ? number_format(filesize($imagePath) / 1024, 2) : 'Unknown'; // Get file size in KB
                                        @endphp
                                    
                                        <div class="preview-item alert alert-success alert-dismissible fade show material-shadow" role="alert">
                                            <img src="{{ asset('public/' . $item->property_image) }}" height="50">
                                            <div>
                                                <p class="m-0"><strong>Name: </strong> {{ $imageName }} </p>
                                                <p class="m-0"><strong>Size: </strong> {{ $imageSize }} KB </p>
                                                <!-- Button to handle deletion -->
                                                <button type="button" class="delete-image btn-close" data-id="{{ $item->id }}" data-url="{{ route('property-images.destroy', $item->id) }}" aria-label="Close"></button>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                            <button type="button" id="clear-all" class="btn btn-danger" style="display: none">Clear All</button>
                        </div>

                    </div>
                </div>
                <!-- end card -->

                
                <div class="text-end mb-3 text-center">
                    <a href="{{ url()->previous() }}" class="btn btn-info">Go Back</a>
                    <button type="submit" id="product-submit" class="btn btn-success">Submit</button>
                </div>

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </form>

    @push('scripts')
        <!-- Quill JS -->
        <script src="{{ asset('public/backend/libs/quill/quill.min.js') }}"></script>

        <script>
            // Initialize Quill editor
            var quill = new Quill('#property_description', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        [{ 'font': [] }],                     // Font style
                        [{ 'header': [1, 2, 3, 4, 5, 6, false] }], // Header levels
                        ['bold', 'italic', 'underline'],      // Basic text styles
                        [{ 'color': [] }, { 'background': [] }],  // Text color and highlight
                        [{ 'script': 'sub'}, { 'script': 'super' }], // Subscript/Superscript
                        ['blockquote', 'code-block'],         // Blockquote and code block
                        [{ 'list': 'ordered'}, { 'list': 'bullet' }], // Lists
                        [{ 'indent': '-1'}, { 'indent': '+1' }], // Indent
                        [{ 'direction': 'rtl' }],             // Text direction
                        [{ 'align': [] }],                    // Text alignment
                        ['link'],                             // Insert link, image, and video
                        ['clean']                             // Clear formatting
                    ]
                }
            });

            // Update hidden field before form submission
            document.getElementById('product-submit').addEventListener('click', function (e) {
                var description = document.querySelector('#property_description .ql-editor').innerHTML;
                document.getElementById('description').value = description;
            });
        </script>
        
        <script>
            let allFiles = [];
        
            $(document).ready(function(){
                $(".upload-area").on("dragover", function(event) {
                    event.preventDefault();  
                    event.stopPropagation();
                    $(this).css("background-color", "#e9ecef");
                });
        
                $(".upload-area").on("dragleave", function(event) {
                    event.preventDefault();  
                    event.stopPropagation();
                    $(this).css("background-color", "#f9f9f9");
                });
        
                $(".upload-area").on("drop", function(event) {
                    event.preventDefault();  
                    event.stopPropagation();
                    $(this).css("background-color", "#f9f9f9");
        
                    let files = event.originalEvent.dataTransfer.files;
                    addFiles(files);
                });
        
                $("#file-input").on("change", function() {
                    let files = this.files;
                    addFiles(files);
                });
                $("#clear-all").on("click", function() {
                    allFiles = [];
                    showPreview();
                    $("#clear-all").hide();
                });
        
                function addFiles(files) {
                    for (let i = 0; i < files.length; i++) {
                        allFiles.push(files[i]);
                    }
                    showPreview();
                }
        
                function showPreview() {
                    $("#preview-area").empty();
                    $("#clear-all").show();
                    allFiles.forEach((file, i) => {
                        let reader = new FileReader();
        
                        reader.onload = function(e) {
                            let filePreview = `
                                <div data-index="${i}" class="preview-item alert alert-success alert-dismissible fade show material-shadow" role="alert">
                                    <img src="${e.target.result}" height="50">
                                    <div>
                                        <p class="m-0"><strong>Name: </strong> ${file.name} </p>
                                        <p class="m-0"><strong>Size: </strong> ${(file.size / 1024).toFixed(2)} KB </p>
                                        <!--<button type="button" class="btn-close" style="top: 15px"></button>-->
                                    </div>
                                </div>
                            `;
                            $("#preview-area").append(filePreview);
                        };
        
                        reader.readAsDataURL(file);
                    });
        
                    // Update the hidden file input with all selected files
                    let dataTransfer = new DataTransfer();
                    allFiles.forEach(file => dataTransfer.items.add(file));
                    document.getElementById('file-input').files = dataTransfer.files;
        
                    // Re-bind click event to remove buttons
                    $(".btn-close").off("click").on("click", function() {
                        let index = $(this).closest('.preview-item').data('index');
                        removeFile(index);
                    });
                }
        
                function removeFile(index) {
                    allFiles.splice(index, 1);
                    showPreview();
                }
            });
        </script>


        <script>
            $('.delete-image').on('click', function() {
                const imageId = $(this).data('id');
                const deleteUrl = $(this).data('url');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: deleteUrl,
                            type: 'DELETE',
                            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                            success: (response) => {
                                if (response.success) {
                                    $(`.preview-item:has(.delete-image[data-id="${imageId}"])`).remove();
                                    Swal.fire('Deleted!', 'Your image has been deleted.', 'success');
                                } else {
                                    Swal.fire('Error!', 'An error occurred while deleting the image.', 'error');
                                }
                            },
                            error: () => Swal.fire('Error!', 'An error occurred while deleting the image.', 'error')
                        });
                    }
                });
            });

        </script>
    @endpush

</x-app-layout>
