@extends('layouts.app_675')

@section('title', 'Edit Property')

@section('content_675')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Edit Property 675: {{ $property_675->title_675 }}</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('properties_675.update', $property_675) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title_675" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title_675') is-invalid @enderror" 
                               id="title_675" name="title_675" value="{{ old('title_675', $property_675->title_675) }}">
                        @error('title_675')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description_675" class="form-label">Description</label>
                        <textarea class="form-control @error('description_675') is-invalid @enderror" 
                                  id="description_675" name="description_675" rows="4">{{ old('description_675', $property_675->description_675) }}</textarea>
                        @error('description_675')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="price_675" class="form-label">Price (Rp)</label>
                                <input type="number" class="form-control @error('price_675') is-invalid @enderror" 
                                       id="price_675" name="price_675" value="{{ old('price_675', $property_675->price_675) }}">
                                @error('price_675')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="location_675" class="form-label">Location</label>
                                <input type="text" class="form-control @error('location_675') is-invalid @enderror" 
                                       id="location_675" name="location_675" value="{{ old('location_675', $property_675->location_675) }}">
                                @error('location_675')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="type_675" class="form-label">Type</label>
                                <select class="form-select @error('type_675') is-invalid @enderror" 
                                        id="type_675" name="type_675">
                                    <option value="">Choose Type</option>
                                    <option value="house" {{ old('type_675', $property_675->type_675) == 'house' ? 'selected' : '' }}>House</option>
                                    <option value="apartment" {{ old('type_675', $property_675->type_675) == 'apartment' ? 'selected' : '' }}>Apartment</option>
                                    <option value="villa" {{ old('type_675', $property_675->type_675) == 'villa' ? 'selected' : '' }}>Villa</option>
                                    <option value="office" {{ old('type_675', $property_675->type_675) == 'office' ? 'selected' : '' }}>Office</option>
                                </select>
                                @error('type_675')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="status_675" class="form-label">Status</label>
                                <select class="form-select @error('status_675') is-invalid @enderror" 
                                        id="status_675" name="status_675">
                                    <option value="">Choose Status</option>
                                    <option value="available" {{ old('status_675', $property_675->status_675) == 'available' ? 'selected' : '' }}>Available</option>
                                    <option value="sold" {{ old('status_675', $property_675->status_675) == 'sold' ? 'selected' : '' }}>Sold</option>
                                    <option value="rented" {{ old('status_675', $property_675->status_675) == 'rented' ? 'selected' : '' }}>Rented</option>
                                </select>
                                @error('status_675')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="bedrooms_675" class="form-label">Bedrooms</label>
                                <input type="number" class="form-control @error('bedrooms_675') is-invalid @enderror" 
                                       id="bedrooms_675" name="bedrooms_675" value="{{ old('bedrooms_675', $property_675->bedrooms_675) }}">
                                @error('bedrooms_675')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="bathrooms_675" class="form-label">Bathrooms</label>
                                <input type="number" class="form-control @error('bathrooms_675') is-invalid @enderror" 
                                       id="bathrooms_675" name="bathrooms_675" value="{{ old('bathrooms_675', $property_675->bathrooms_675) }}">
                                @error('bathrooms_675')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="area_675" class="form-label">Area (m²)</label>
                                <input type="number" class="form-control @error('area_675') is-invalid @enderror" 
                                       id="area_675" name="area_675" value="{{ old('area_675', $property_675->area_675) }}">
                                @error('area_675')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="image_675" class="form-label">Image</label>
                        @if($property_675->image_675)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $property_675->image_675) }}" 
                                     alt="Current Image" class="img-thumbnail" style="max-height: 200px;">
                                <p class="text-muted mt-1">Current image - upload new to replace</p>
                            </div>
                        @endif
                        <input type="file" class="form-control @error('image_675') is-invalid @enderror" 
                               id="image_675" name="image_675" accept="image/*">
                        @error('image_675')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('properties_675.show', $property_675) }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Update Property
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection