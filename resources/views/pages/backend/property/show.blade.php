<x-app-layout>
    @push('style')
        <!-- Custom Styles -->
        <style>
            .product-image {
                max-width: 100%;
                height: auto;
            }

            .product-gallery img {
                width: 100px;
                height: 100px;
                object-fit: cover;
                margin: 5px;
                border-radius: 10px;
            }
        </style>
    @endpush

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Property Details</h4>
            </div>
            <div class="card-body">
                <!-- Property Details -->
                <h5>Property Title: {{ $property->property_name }}</h5>
                <p><strong>Area Size:</strong> {{ $property->area_size }} sq ft</p>
                <p><strong>Price:</strong> ${{ number_format($property->price, 2) }}</p>
                <p><strong>Bedrooms:</strong> {{ $property->bedroom_count }}</p>
                <p><strong>Bathrooms:</strong> {{ $property->bathroom_count }}</p>
                <p><strong>Dining Rooms:</strong> {{ $property->dining_room_count }}</p>
                <p><strong>Balcony Count:</strong> {{ $property->balcony_count }}</p>
                <p><strong>Description:</strong> {!! old('description', $property->description ?? null) !!}</p>
    
                <!-- Property Address -->
                <h6>Property Address:</h6>
                <p><strong>Country:</strong> {{ $property->propertyAddress->country }}</p>
                <p><strong>City:</strong> {{ $property->propertyAddress->city }}</p>
                <p><strong>Location:</strong> {{ $property->propertyAddress->location }}</p>
                <p><strong>Property Status:</strong> {{ $property->propertyAddress->property_status }}</p>
                <p><strong>Property Type:</strong> {{ $property->propertyAddress->property_type }}</p>
                <p><strong>Condition:</strong> {{ $property->propertyAddress->property_condition }}</p>
                <p><strong>Built Year:</strong> {{ $property->propertyAddress->built_year }}</p>
    
                <!-- Property Images -->
                <h6>Property Images:</h6>
                @foreach ($property->propertyImages as $image)
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="Property Image" width="200">
                        <p>{{ $image->image_path }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
