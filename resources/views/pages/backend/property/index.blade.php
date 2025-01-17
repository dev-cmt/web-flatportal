<x-app-layout :title="'Products List'">
    @push('style')

    @endpush
    @push('scripts')
        <!-- Display Toastr notifications -->
        <script>
            @if(session('success'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "timeOut": "5000",
                    "extendedTimeOut": "1000"
                };
                toastr.success("{{ session('success') }}");
            @endif

            @if($errors->any())
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "timeOut": "5000",
                    "extendedTimeOut": "1000"
                };
                @foreach ($errors->all() as $error)
                    toastr.error("{{ $error }}");
                @endforeach
            @endif
        </script>
    @endpush

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Products</h4>
                    <div class="flex-shrink-0">
                        <a href="{{ route('property.create') }}" class="btn btn-sm btn-success edit-item-btn">Add New Propertys</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-nowrap table-striped-columns mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Property Title</th>
                                    <th scope="col">Area Size</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Bedrooms</th>
                                    <th scope="col">Bathrooms</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="product-list">
                                @foreach ($property as $item)
                                    <tr data-id="{{ $item->id }}">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->property_name }}</td> <!-- Changed to property_name -->
                                        <td>{{ $item->area_size }}</td> <!-- Changed to area_size -->
                                        <td>{{ $item->price }}</td> <!-- Changed to price -->
                                        <td>{{ $item->bedroom_count }}</td> <!-- Changed to bedroom_count -->
                                        <td>{{ $item->bathroom_count }}</td> <!-- Changed to bathroom_count -->
                                        <td>{{ $item->status === 'Published' ? 'Published' : ($item->status === 'Unpublished' ? 'Unpublished' : 'Draft') }}</td>
                                        <td>
                                            <a href="{{ route('property.edit', $item->id) }}" class="btn btn-sm btn-primary edit-category">Edit</a> <!-- Changed to property.edit -->
                                            <a href="{{ route('property.show', $item->id) }}" class="btn btn-sm btn-info show-category">Show</a> <!-- Changed to property.show -->
                                            <form action="{{ route('property.destroy', $item->id) }}" method="POST" style="display:inline-block;"> <!-- Changed to property.destroy -->
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger edit-item-btn" onclick="return confirm('Are you sure you want to delete this property?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


</x-app-layout>