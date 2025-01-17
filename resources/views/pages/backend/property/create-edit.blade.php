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
        <input type="hidden" name="product_id" id="product_id" value="{{ old('product_id', $property->id ?? null) }}">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="product_name">Property Title</label>
                            <input type="text" name="product_name" id="product_name" class="form-control @error('product_name') is-invalid @enderror" placeholder="Enter Property title" value="{{ old('product_name', $property->product_name ?? null) }}" required>
                            @error('product_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="product_description">Property Description</label>
                            <div id="product_description" class="snow-editor" style="height: 300px;">
                                {!! old('description', $property->description ?? null) !!}
                            </div>
                            <input type="hidden" name="description" id="description" value="{{ old('description', $property->description ?? null) }}">
                        </div>

                    </div>
                </div>
                <!-- end card -->

                <!-- Property Image -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Property Gallery</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <h5 class="fs-14 mb-1">Property Image</h5>
                            <p class="text-muted">Add Property main Image.</p>
                            <div class="text-center">
                                <div class="position-relative d-inline-block">
                                    <!-- Upload Icon & File Input -->
                                    <div class="position-absolute top-100 start-100 translate-middle">
                                        <label for="product-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                            <div class="avatar-xs">
                                                <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                    <i class="ri-image-fill"></i>
                                                </div>
                                            </div>
                                        </label>
                                        <input type="file" name="main_image" class="form-control d-none @error('main_image') is-invalid @enderror" id="product-image-input" accept="image/png, image/gif, image/jpeg">
                                        @error('main_image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!-- Image Preview -->
                                    <div class="avatar-lg">
                                        <div class="avatar-title bg-light rounded">
                                            <img src="{{ asset($property?->main_image ? 'public/' . $property->main_image : 'public/backend/images/product-img.png') }}" id="product-img" class="avatar-md h-auto" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <script>
                            document.getElementById('product-image-input').addEventListener('change', function() {
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
                            <input type="file" id="file-input" name="product_images[]" multiple style="display: none;">
                            <div class="preview-area" id="preview-area">
                                <!-- Preview items will be inserted here -->
                                @if ($property && $property->images->isNotEmpty())
                                    @foreach ($property->images as $item)
                                        @php
                                            $imagePath = public_path($item->image_path); // Full path to the image file
                                            $imageName = basename($item->image_path); // Extract the image name
                                            $imageSize = file_exists($imagePath) ? number_format(filesize($imagePath) / 1024, 2) : 'Unknown'; // Get file size in KB
                                        @endphp
                                    
                                        <div class="preview-item alert alert-success alert-dismissible fade show material-shadow" role="alert">
                                            <img src="{{ asset('public/' . $item->image_path) }}" height="50">
                                            <div>
                                                <p class="m-0"><strong>Name: </strong> {{ $imageName }} </p>
                                                <p class="m-0"><strong>Size: </strong> {{ $imageSize }} KB </p>
                                                <!-- Button to handle deletion -->
                                                <button type="button" id="delete-image" class="btn-close delete-item" data-id="{{ $item->id }}" data-url="{{ route('product-images.destroy', $item->id) }}" aria-label="Close"></button>
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

                <div class="text-end mb-3">
                    <button type="submit" id="product-submit" class="btn btn-success w-sm">Submit</button>
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
                                <option value="Scheduled" {{ old('status', $property->status ?? null) == 'Scheduled' ? 'selected' : '' }}>Scheduled</option>
                                <option value="Draft" {{ old('status', $property->status ?? null) == 'Draft' ? 'selected' : '' }}>Draft</option>
                            </select>
                        </div>                        

                        <div class="mb-3">
                            <label for="choices-publish-visibility-input" class="form-label">Visibility</label>
                            <select name="visibility" class="form-select" id="choices-publish-visibility-input" data-choices data-choices-search-false>
                                <option value="Public" {{ old('visibility', $property->visibility ?? null) == 'Public' ? 'selected' : '' }}>Public</option>
                                <option value="Hidden" {{ old('visibility', $property->visibility ?? null) == 'Hidden' ? 'selected' : '' }}>Hidden</option>
                            </select>
                        </div>                        
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Publish Schedule</h5>
                    </div>
                    <!-- end card body -->
                    <div class="card-body">
                        <div>
                            <label for="datepicker-publish-input" class="form-label">Publish Date & Time</label>
                            <input type="date" name="publish_schedule" class="form-control" value="{{old('publish_schedule')}}">
                        </div>
                    </div>
                </div>
                <!-- end card -->

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
            var quill = new Quill('#product_description', {
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
                var description = document.querySelector('#product_description .ql-editor').innerHTML;
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
            $('.delete-item').on('click', function() {
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
                                    $(this).closest('tr').remove();
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
