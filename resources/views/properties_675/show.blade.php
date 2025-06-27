@extends('layouts.app_675')

@section('title', $property_675->title_675)

@section('content_675')
<!-- Page Header with Breadcrumb -->
<div class="property-detail-header fade-in-up">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('properties_675.index') }}">
                        <i class="fas fa-home"></i> Properties
                    </a>
                </li>
                <li class="breadcrumb-item active">{{ Str::limit($property_675->title_675, 30) }}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container">
    <div class="row g-4">
        <!-- Main Content - Property Image & Description -->
        <div class="col-lg-8">
            <!-- Property Image Section -->
            <div class="property-showcase card slide-in-right">
                <div class="property-image-wrapper">
                    @if($property_675->image_675)
                        <img src="{{ asset('storage/' . $property_675->image_675) }}" 
                             class="property-main-image" 
                             alt="{{ $property_675->title_675 }}">
                        
                        <!-- Image Overlay with Status -->
                        <div class="image-overlay">
                            <div class="property-status-badge status-{{ $property_675->status_675 }}">
                                @if($property_675->status_675 == 'available')
                                    <i class="fas fa-check-circle"></i> Available for Sale
                                @elseif($property_675->status_675 == 'sold')
                                    <i class="fas fa-times-circle"></i> Sold Out
                                @else
                                    <i class="fas fa-clock"></i> {{ ucfirst($property_675->status_675) }}
                                @endif
                            </div>
                            
                            <div class="property-type-badge">
                                <i class="fas fa-tag"></i> {{ ucfirst($property_675->type_675) }}
                            </div>
                        </div>
                    @else
                        <div class="property-image-placeholder">
                            <div class="placeholder-content">
                                <i class="fas fa-image"></i>
                                <h4>No Image Available</h4>
                                <p>Property image will be displayed here</p>
                            </div>
                        </div>
                    @endif
                </div>
                
                <!-- Property Title & Description -->
                <div class="property-content">
                    <div class="property-header">
                        <h1 class="property-title">{{ $property_675->title_675 }}</h1>
                        <div class="property-meta">
                            <span class="property-location">
                                <i class="fas fa-map-marker-alt"></i>
                                {{ $property_675->location_675 }}
                            </span>
                        </div>
                    </div>
                    
                    <div class="property-description">
                        <h5 class="section-title">
                            <i class="fas fa-info-circle"></i>
                            Property Description
                        </h5>
                        <div class="description-content">
                            {{ $property_675->description_675 }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sidebar - Property Details & Actions -->
        <div class="col-lg-4">
            <!-- Price Card -->
            <div class="price-card card fade-in-up" style="animation-delay: 0.2s">
                <div class="price-content">
                    <div class="price-label">Property Price</div>
                    <div class="price-value">Rp {{ number_format($property_675->price_675, 0, ',', '.') }}</div>
                    <div class="price-note">*Price may vary based on negotiations</div>
                </div>
            </div>
            
            <!-- Property Details Card -->
            <div class="details-card card fade-in-up" style="animation-delay: 0.4s">
                <div class="card-header">
                    <h5 class="card-title">
                        <i class="fas fa-list-ul"></i>
                        Property Specifications
                    </h5>
                </div>
                <div class="card-body">
                    <div class="details-grid">
                        <div class="detail-item">
                            <div class="detail-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="detail-content">
                                <span class="detail-label">Property Type</span>
                                <span class="detail-value">{{ ucfirst($property_675->type_675) }}</span>
                            </div>
                        </div>
                        
                        <div class="detail-item">
                            <div class="detail-icon">
                                <i class="fas fa-bed"></i>
                            </div>
                            <div class="detail-content">
                                <span class="detail-label">Bedrooms</span>
                                <span class="detail-value">{{ $property_675->bedrooms_675 }} Rooms</span>
                            </div>
                        </div>
                        
                        <div class="detail-item">
                            <div class="detail-icon">
                                <i class="fas fa-bath"></i>
                            </div>
                            <div class="detail-content">
                                <span class="detail-label">Bathrooms</span>
                                <span class="detail-value">{{ $property_675->bathrooms_675 }} Rooms</span>
                            </div>
                        </div>
                        
                        <div class="detail-item">
                            <div class="detail-icon">
                                <i class="fas fa-ruler-combined"></i>
                            </div>
                            <div class="detail-content">
                                <span class="detail-label">Total Area</span>
                                <span class="detail-value">{{ $property_675->area_675 }} m²</span>
                            </div>
                        </div>
                        
                        <div class="detail-item">
                            <div class="detail-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="detail-content">
                                <span class="detail-label">Location</span>
                                <span class="detail-value">{{ $property_675->location_675 }}</span>
                            </div>
                        </div>
                        
                        <div class="detail-item highlight">
                            <div class="detail-icon">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div class="detail-content">
                                <span class="detail-label">Availability Status</span>
                                <span class="detail-value">
                                    <span class="status-badge status-{{ $property_675->status_675 }}">
                                        @if($property_675->status_675 == 'available')
                                            <i class="fas fa-check-circle"></i> Available
                                        @elseif($property_675->status_675 == 'sold')
                                            <i class="fas fa-times-circle"></i> Sold
                                        @else
                                            <i class="fas fa-clock"></i> {{ ucfirst($property_675->status_675) }}
                                        @endif
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Action Buttons Card -->
            <div class="actions-card card fade-in-up" style="animation-delay: 0.6s">
                <div class="card-header">
                    <h5 class="card-title">
                        <i class="fas fa-cogs"></i>
                        Property Actions
                    </h5>
                </div>
                <div class="card-body">
                    <div class="action-buttons">
                        <!-- Edit Button -->
                        <a href="{{ route('properties_675.edit', $property_675) }}" 
                           class="btn btn-edit">
                            <div class="btn-icon">
                                <i class="fas fa-edit"></i>
                            </div>
                            <div class="btn-content">
                                <span class="btn-title">Edit Property</span>
                                <span class="btn-subtitle">Modify property details</span>
                            </div>
                        </a>
                        
                        <!-- Delete Button -->
                        <form action="{{ route('properties_675.destroy', $property_675) }}" 
                              method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" 
                                    onclick="return confirm('Are you sure you want to delete this property? This action cannot be undone.')">
                                <div class="btn-icon">
                                    <i class="fas fa-trash"></i>
                                </div>
                                <div class="btn-content">
                                    <span class="btn-title">Delete Property</span>
                                    <span class="btn-subtitle">Remove from listings</span>
                                </div>
                            </button>
                        </form>
                        
                        <!-- Back Button -->
                        <a href="{{ route('properties_675.index') }}" 
                           class="btn btn-back">
                            <div class="btn-icon">
                                <i class="fas fa-arrow-left"></i>
                            </div>
                            <div class="btn-content">
                                <span class="btn-title">Back to Properties</span>
                                <span class="btn-subtitle">Return to main listing</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* ===== PROPERTY DETAIL PAGE STYLES ===== */

/* Page Header */
.property-detail-header {
    background: linear-gradient(135deg, var(--bg-white) 0%, var(--bg-light) 100%);
    padding: 1.5rem 0;
    margin-bottom: 2rem;
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-light);
}

/* Breadcrumb Styling */
.breadcrumb {
    background: none;
    margin-bottom: 0;
    padding: 0;
}

.breadcrumb-item {
    font-size: 0.9rem;
    font-weight: 500;
}

.breadcrumb-item a {
    color: var(--primary-color);
    text-decoration: none;
    transition: var(--transition);
}

.breadcrumb-item a:hover {
    color: var(--accent-gold);
}

.breadcrumb-item.active {
    color: var(--text-light);
}

/* Property Showcase Card */
.property-showcase {
    overflow: hidden;
    border: none;
    box-shadow: var(--shadow-medium);
}

.property-image-wrapper {
    position: relative;
    height: 450px;
    overflow: hidden;
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--border-color) 100%);
}

.property-main-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: var(--transition);
}

.property-showcase:hover .property-main-image {
    transform: scale(1.02);
}

/* Image Placeholder */
.property-image-placeholder {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    background: linear-gradient(135deg, var(--bg-light) 0%, #e2e8f0 100%);
}

.placeholder-content {
    text-align: center;
    color: var(--text-light);
}

.placeholder-content i {
    font-size: 4rem;
    margin-bottom: 1rem;
    opacity: 0.5;
}

.placeholder-content h4 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
    color: var(--text-dark);
}

.placeholder-content p {
    font-size: 1rem;
    margin: 0;
}

/* Image Overlay */
.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, transparent 50%, rgba(0,0,0,0.2) 100%);
    pointer-events: none;
}

.image-overlay .property-status-badge {
    position: absolute;
    top: 1.5rem;
    right: 1.5rem;
    padding: 0.75rem 1rem;
    border-radius: 25px;
    font-size: 0.85rem;
    font-weight: 600;
    backdrop-filter: blur(15px);
    box-shadow: var(--shadow-medium);
    pointer-events: auto;
}

.image-overlay .property-type-badge {
    position: absolute;
    top: 1.5rem;
    left: 1.5rem;
    background: rgba(26, 54, 93, 0.9);
    color: white;
    padding: 0.6rem 1rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    backdrop-filter: blur(15px);
    pointer-events: auto;
}

/* Property Content */
.property-content {
    padding: 2.5rem;
}

.property-header {
    margin-bottom: 2rem;
    padding-bottom: 1.5rem;
    border-bottom: 2px solid var(--border-color);
}

.property-title {
    font-family: 'Playfair Display', serif;
    font-weight: 600;
    font-size: 2.5rem;
    color: var(--text-dark);
    margin-bottom: 1rem;
    line-height: 1.2;
}

.property-meta {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.property-location {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--text-light);
    font-size: 1.1rem;
    font-weight: 500;
}

.property-location i {
    color: var(--primary-color);
}

/* Property Description */
.property-description .section-title {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--primary-color);
    font-weight: 600;
    margin-bottom: 1rem;
    font-size: 1.2rem;
}

.description-content {
    font-size: 1.1rem;
    line-height: 1.7;
    color: var(--text-dark);
    text-align: justify;
}

/* Price Card */
.price-card {
    margin-bottom: 1.5rem;
    border: none;
    box-shadow: var(--shadow-medium);
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-hover) 100%);
    color: white;
    overflow: hidden;
}

.price-content {
    padding: 2rem;
    text-align: center;
    position: relative;
}

.price-content::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="price-pattern" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23price-pattern)"/></svg>');
    opacity: 0.3;
}

.price-content > * {
    position: relative;
    z-index: 1;
}

.price-label {
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 0.5rem;
    opacity: 0.9;
    font-weight: 600;
}

.price-value {
    font-size: 2.5rem;
    font-weight: 700;
    font-family: 'Playfair Display', serif;
    margin-bottom: 0.5rem;
    text-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.price-note {
    font-size: 0.8rem;
    opacity: 0.8;
    font-style: italic;
}

/* Details Card */
.details-card {
    margin-bottom: 1.5rem;
    border: none;
    box-shadow: var(--shadow-medium);
}

.details-card .card-header {
    background: linear-gradient(135deg, var(--bg-white) 0%, var(--bg-light) 100%);
    border-bottom: 2px solid var(--border-color);
    padding: 1.5rem 2rem;
}

.details-card .card-title {
    margin: 0;
    color: var(--text-dark);
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.details-card .card-title i {
    color: var(--primary-color);
}

/* Details Grid */
.details-grid {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.detail-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1rem;
    border-radius: var(--border-radius);
    transition: var(--transition);
    border: 1px solid transparent;
}

.detail-item:hover {
    background: var(--bg-light);
    border-color: var(--border-color);
    transform: translateX(5px);
}

.detail-item.highlight {
    background: linear-gradient(135deg, var(--success-light) 0%, #e6fffa 100%);
    border-color: var(--success-color);
}

.detail-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-hover) 100%);
    color: white;
    border-radius: 50%;
    font-size: 1rem;
    flex-shrink: 0;
}

.detail-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 0.25rem;
}

.detail-label {
    font-size: 0.85rem;
    color: var(--text-light);
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.detail-value {
    font-size: 1rem;
    color: var(--text-dark);
    font-weight: 600;
}

/* Status Badge in Details */
.status-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.25rem;
    padding: 0.4rem 0.8rem;
    border-radius: 15px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.status-available {
    background: var(--success-color);
    color: white;
}

.status-sold {
    background: #dc3545;
    color: white;
}

.status-pending {
    background: var(--accent-gold);
    color: white;
}

/* Actions Card */
.actions-card {
    border: none;
    box-shadow: var(--shadow-medium);
}

.actions-card .card-header {
    background: linear-gradient(135deg, var(--secondary-color) 0%, var(--text-dark) 100%);
    color: white;
    border-bottom: none;
    padding: 1.5rem 2rem;
}

.actions-card .card-title {
    margin: 0;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

/* Action Buttons */
.action-buttons {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.action-buttons .btn {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.25rem;
    border-radius: var(--border-radius);
    border: 2px solid transparent;
    text-decoration: none;
    transition: var(--transition);
    background: var(--bg-white);
    color: var(--text-dark);
    box-shadow: var(--shadow-light);
}

.btn-icon {
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.btn-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: left;
}

.btn-title {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.btn-subtitle {
    font-size: 0.8rem;
    opacity: 0.7;
}

/* Button Variants */
.btn-edit {
    border-color: #ffc107;
}

.btn-edit:hover {
    background: #ffc107;
    color: var(--text-dark);
    transform: translateY(-2px);
    box-shadow: var(--shadow-medium);
    border-color: #ffc107;
}

.btn-edit .btn-icon {
    background: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);
    color: var(--text-dark);
}

.btn-delete {
    border-color: #dc3545;
}

.btn-delete:hover {
    background: #dc3545;
    color: white;
    transform: translateY(-2px);
    box-shadow: var(--shadow-medium);
    border-color: #dc3545;
}

.btn-delete .btn-icon {
    background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
    color: white;
}

.btn-back {
    border-color: var(--primary-color);
}

.btn-back:hover {
    background: var(--primary-color);
    color: white;
    transform: translateY(-2px);
    box-shadow: var(--shadow-medium);
    border-color: var(--primary-color);
}

.btn-back .btn-icon {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-hover) 100%);
    color: white;
}

/* Responsive Design */
@media (max-width: 992px) {
    .property-title {
        font-size: 2rem;
    }
    
    .price-value {
        font-size: 2rem;
    }
    
    .property-content {
        padding: 2rem;
    }
}

@media (max-width: 768px) {
    .property-detail-header {
        padding: 1rem 0;
        margin-bottom: 1.5rem;
    }
    
    .property-image-wrapper {
        height: 300px;
    }
    
    .property-title {
        font-size: 1.75rem;
    }
    
    .property-content {
        padding: 1.5rem;
    }
    
    .price-content {
        padding: 1.5rem;
    }
    
    .price-value {
        font-size: 1.75rem;
    }
    
    .details-card .card-header,
    .actions-card .card-header {
        padding: 1.25rem 1.5rem;
    }
    
    .action-buttons .btn {
        padding: 1rem;
    }
    
    .btn-icon {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
}

@media (max-width: 576px) {
    .property-title {
        font-size: 1.5rem;
    }
    
    .property-location {
        font-size: 1rem;
    }
    
    .price-value {
        font-size: 1.5rem;
    }
    
    .description-content {
        font-size: 1rem;
    }
    
    .detail-item {
        padding: 0.75rem;
    }
    
    .detail-icon {
        width: 35px;
        height: 35px;
        font-size: 0.9rem;
    }
    
    .image-overlay .property-status-badge,
    .image-overlay .property-type-badge {
        padding: 0.5rem 0.75rem;
        font-size: 0.75rem;
    }
    
    .breadcrumb-item {
        font-size: 0.8rem;
    }
}

/* Animation Enhancements */
.property-showcase:hover {
    transform: translateY(-5px);
}

.detail-item:hover .detail-icon {
    transform: scale(1.1);
}

.action-buttons .btn:hover .btn-icon {
    transform: scale(1.1) rotate(5deg);
}

/* Loading States */
.fade-in-up {
    opacity: 0;
    animation: fadeInUp 0.6s ease-out forwards;
}

.slide-in-right {
    opacity: 0;
    animation: slideInRight 0.6s ease-out forwards;
}
</style>
@endsection