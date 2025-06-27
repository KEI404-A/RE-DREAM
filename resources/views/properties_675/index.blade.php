@extends('layouts.app_675')

@section('title', 'Properties List')

@section('content_675')
<!-- Hero Section (Landing Page Element) -->
<div class="hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="container">
            <div class="row align-items-center min-vh-75">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="hero-title fade-in-up">
                        Find Your Perfect Property
                    </h1>
                    <p class="hero-subtitle fade-in-up" style="animation-delay: 0.2s">
                        Discover premium real estate opportunities with our curated collection of exceptional properties
                    </p>
                    <div class="hero-stats fade-in-up" style="animation-delay: 0.4s">
                        <div class="stat-item">
                            <span class="stat-number">{{ $properties_675->total() ?? $properties_675->count() }}</span>
                            <span class="stat-label">Properties</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <span class="stat-number">{{ $properties_675->where('status_675', 'available')->count() }}</span>
                            <span class="stat-label">Available</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <span class="stat-number">{{ $properties_675->where('status_675', 'sold')->count() }}</span>
                            <span class="stat-label">Sold</span>
                        </div>
                    </div>
                    <div class="hero-actions fade-in-up" style="animation-delay: 0.6s">
                        <a href="#properties-section" class="btn btn-hero-primary smooth-scroll">
                            <i class="fas fa-search"></i> Explore Properties
                        </a>
                        <a href="{{ route('properties_675.create') }}" class="btn btn-hero-secondary">
                            <i class="fas fa-plus"></i> List Property
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-scroll-indicator">
        <a href="#properties-section" class="scroll-down smooth-scroll">
            <i class="fas fa-chevron-down"></i>
        </a>
    </div>
</div>

<!-- Features Section (Landing Page Element) -->
<div class="features-section">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title fade-in-up">Why Choose Our Platform</h2>
                <p class="section-subtitle fade-in-up" style="animation-delay: 0.2s">
                    Experience the difference with our comprehensive property management solution
                </p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card fade-in-up" style="animation-delay: 0.1s">
                    <div class="feature-icon">
                        <i class="fas fa-search-location"></i>
                    </div>
                    <h4 class="feature-title">Smart Search</h4>
                    <p class="feature-description">Find properties that match your exact criteria with our advanced filtering system</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card fade-in-up" style="animation-delay: 0.2s">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 class="feature-title">Verified Listings</h4>
                    <p class="feature-description">All properties are thoroughly verified to ensure quality and authenticity</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card fade-in-up" style="animation-delay: 0.3s">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h4 class="feature-title">24/7 Support</h4>
                    <p class="feature-description">Get expert assistance whenever you need it with our dedicated support team</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Properties Section (Original Functionality) -->
<div id="properties-section" class="properties-section">
    <!-- Page Header -->
    <div class="page-header fade-in-up">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div>
                    <h1 class="page-title mb-0">
                        <i class="fas fa-building text-gradient"></i>
                        Properties Collection
                    </h1>
                    <p class="page-subtitle mt-2 mb-0">Discover your dream property from our premium listings</p>
                </div>
                <a href="{{ route('properties_675.create') }}" class="btn btn-primary slide-in-right">
                    <i class="fas fa-plus"></i> Add New Property
                </a>
            </div>
        </div>
    </div>

    <!-- Properties Grid -->
    <div class="container">
        <div class="row g-4">
            @forelse($properties_675 as $property_675)
                <div class="col-md-6 col-xl-4">
                    <div class="property-card card h-100 fade-in-up" style="animation-delay: {{ $loop->index * 0.1 }}s">
                        <!-- Property Image -->
                        <div class="property-image-container">
                            @if($property_675->image_675)
                                <img src="{{ asset('storage/' . $property_675->image_675) }}" 
                                     class="property-image" 
                                     alt="{{ $property_675->title_675 }}">
                            @else
                                <div class="property-image-placeholder">
                                    <i class="fas fa-image"></i>
                                    <span>No Image</span>
                                </div>
                            @endif
                            
                            <!-- Status Badge -->
                            <div class="property-status-badge status-{{ $property_675->status_675 }}">
                                @if($property_675->status_675 == 'available')
                                    <i class="fas fa-check-circle"></i> Available
                                @elseif($property_675->status_675 == 'sold')
                                    <i class="fas fa-sold-out"></i> Sold
                                @else
                                    <i class="fas fa-clock"></i> {{ ucfirst($property_675->status_675) }}
                                @endif
                            </div>
                            
                            <!-- Property Type Badge -->
                            <div class="property-type-badge">
                                <i class="fas fa-tag"></i> {{ ucfirst($property_675->type_675) }}
                            </div>
                        </div>
                        
                        <!-- Card Body -->
                        <div class="card-body d-flex flex-column">
                            <!-- Property Title & Description -->
                            <div class="property-header mb-3">
                                <h5 class="property-title">{{ $property_675->title_675 }}</h5>
                                <p class="property-description">{{ Str::limit($property_675->description_675, 80) }}</p>
                            </div>
                            
                            <!-- Property Price -->
                            <div class="property-price mb-3">
                                <span class="price-label">Price</span>
                                <span class="price-value">Rp {{ number_format($property_675->price_675, 0, ',', '.') }}</span>
                            </div>
                            
                            <!-- Property Details -->
                            <div class="property-details mb-3">
                                <div class="detail-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>{{ $property_675->location_675 }}</span>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-bed"></i>
                                    <span>{{ $property_675->bedrooms_675 }} Bedrooms</span>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-ruler-combined"></i>
                                    <span>{{ $property_675->area_675 }} m²</span>
                                </div>
                            </div>
                            
                            <!-- Action Buttons -->
                            <div class="property-actions mt-auto">
                                <div class="btn-group w-100" role="group">
                                    <a href="{{ route('properties_675.show', $property_675) }}" 
                                       class="btn btn-outline-primary btn-action">
                                        <i class="fas fa-eye"></i>
                                        <span>View</span>
                                    </a>
                                    <a href="{{ route('properties_675.edit', $property_675) }}" 
                                       class="btn btn-outline-warning btn-action">
                                        <i class="fas fa-edit"></i>
                                        <span>Edit</span>
                                    </a>
                                    <form action="{{ route('properties_675.destroy', $property_675) }}" 
                                          method="POST" class="d-inline flex-fill">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="btn btn-outline-danger btn-action w-100" 
                                                onclick="return confirm('Are you sure you want to delete this property?')">
                                            <i class="fas fa-trash"></i>
                                            <span>Delete</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <!-- Empty State -->
                <div class="col-12">
                    <div class="empty-state fade-in-up">
                        <div class="empty-state-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h3 class="empty-state-title">No Properties Found</h3>
                        <p class="empty-state-text">Start building your property portfolio by adding your first listing.</p>
                        <a href="{{ route('properties_675.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add Your First Property
                        </a>
                    </div>
                </div>
            @endforelse
        </div>
        
        <!-- Pagination -->
        @if($properties_675->hasPages())
            <div class="pagination-container mt-5 fade-in-up">
                <div class="d-flex justify-content-center">
                    {{ $properties_675->links() }}
                </div>
            </div>
        @endif
    </div>
</div>

<!-- CTA Section (Landing Page Element) -->
<div class="cta-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="cta-content fade-in-up">
                    <h2 class="cta-title">Ready to Find Your Dream Property?</h2>
                    <p class="cta-description">
                        Join thousands of satisfied customers who found their perfect property through our platform
                    </p>
                    <div class="cta-actions">
                        <a href="{{ route('properties_675.create') }}" class="btn btn-cta-primary">
                            <i class="fas fa-plus"></i> List Your Property
                        </a>
                        <a href="#properties-section" class="btn btn-cta-secondary smooth-scroll">
                            <i class="fas fa-search"></i> Browse Properties
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* ===== HERO SECTION STYLES ===== */
.hero-section {
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    background: linear-gradient(135deg, 
        var(--primary-color) 0%, 
        rgba(26, 54, 93, 0.9) 50%, 
        var(--accent-gold) 100%);
    background-attachment: fixed;
    overflow: hidden;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
    opacity: 0.3;
}

.hero-content {
    position: relative;
    z-index: 2;
    color: white;
}

.hero-title {
    font-family: 'Playfair Display', serif;
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    line-height: 1.2;
}

.hero-subtitle {
    font-size: 1.25rem;
    margin-bottom: 2rem;
    opacity: 0.95;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.6;
}

.hero-stats {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    margin-bottom: 3rem;
    flex-wrap: wrap;
}

.stat-item {
    text-align: center;
}

.stat-number {
    display: block;
    font-size: 2.5rem;
    font-weight: 700;
    font-family: 'Playfair Display', serif;
    color: var(--accent-gold);
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

.stat-label {
    display: block;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    opacity: 0.8;
    margin-top: 0.25rem;
}

.stat-divider {
    width: 1px;
    height: 40px;
    background: rgba(255,255,255,0.3);
}

.hero-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-hero-primary, .btn-hero-secondary {
    padding: 1rem 2rem;
    font-size: 1.1rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    border-radius: 50px;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    text-decoration: none;
    border: 2px solid transparent;
}

.btn-hero-primary {
    background: var(--accent-gold);
    color: var(--text-dark);
    box-shadow: 0 8px 25px rgba(214, 158, 46, 0.3);
}

.btn-hero-primary:hover {
    background: transparent;
    color: var(--accent-gold);
    border-color: var(--accent-gold);
    transform: translateY(-3px);
    box-shadow: 0 12px 35px rgba(214, 158, 46, 0.4);
}

.btn-hero-secondary {
    background: transparent;
    color: white;
    border-color: rgba(255,255,255,0.5);
}

.btn-hero-secondary:hover {
    background: white;
    color: var(--primary-color);
    border-color: white;
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(255,255,255,0.2);
}

.hero-scroll-indicator {
    position: absolute;
    bottom: 2rem;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
}

.scroll-down {
    display: inline-block;
    color: white;
    font-size: 1.5rem;
    animation: bounce 2s infinite;
    opacity: 0.7;
    transition: var(--transition);
    text-decoration: none;
}

.scroll-down:hover {
    opacity: 1;
    color: var(--accent-gold);
}

/* ===== FEATURES SECTION STYLES ===== */
.features-section {
    padding: 6rem 0;
    background: var(--bg-light);
}

.section-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 1rem;
}

.section-subtitle {
    font-size: 1.1rem;
    color: var(--text-light);
    margin-bottom: 3rem;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
}

.feature-card {
    text-align: center;
    padding: 3rem 2rem;
    background: white;
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-light);
    transition: var(--transition);
    height: 100%;
}

.feature-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-heavy);
}

.feature-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--primary-color), var(--accent-gold));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    color: white;
    font-size: 2rem;
}

.feature-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 1rem;
}

.feature-description {
    color: var(--text-light);
    line-height: 1.6;
}

/* ===== PROPERTIES SECTION STYLES ===== */
.properties-section {
    padding: 4rem 0;
    background: white;
}

/* ===== CTA SECTION STYLES ===== */
.cta-section {
    padding: 6rem 0;
    background: linear-gradient(135deg, var(--text-dark) 0%, var(--primary-color) 100%);
    color: white;
}

.cta-content {
    text-align: center;
}

.cta-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

.cta-description {
    font-size: 1.1rem;
    margin-bottom: 2.5rem;
    opacity: 0.9;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.6;
}

.cta-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-cta-primary, .btn-cta-secondary {
    padding: 1rem 2rem;
    font-size: 1rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    border-radius: 50px;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    text-decoration: none;
    border: 2px solid transparent;
}

.btn-cta-primary {
    background: var(--accent-gold);
    color: var(--text-dark);
    box-shadow: 0 8px 25px rgba(214, 158, 46, 0.3);
}

.btn-cta-primary:hover {
    background: transparent;
    color: var(--accent-gold);
    border-color: var(--accent-gold);
    transform: translateY(-3px);
}

.btn-cta-secondary {
    background: transparent;
    color: white;
    border-color: rgba(255,255,255,0.5);
}

.btn-cta-secondary:hover {
    background: white;
    color: var(--primary-color);
    border-color: white;
    transform: translateY(-3px);
}

/* ===== ORIGINAL PROPERTIES STYLES ===== */
/* Property Card Styling */
.property-card {
    transition: var(--transition);
    overflow: hidden;
    border: none;
    box-shadow: var(--shadow-light);
}

.property-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-heavy);
}

/* Property Image Container */
.property-image-container {
    position: relative;
    height: 250px;
    overflow: hidden;
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--border-color) 100%);
}

.property-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: var(--transition);
}

.property-card:hover .property-image {
    transform: scale(1.05);
}

.property-image-placeholder {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
    color: var(--text-light);
    background: var(--bg-light);
}

.property-image-placeholder i {
    font-size: 3rem;
    margin-bottom: 0.5rem;
    opacity: 0.5;
}

.property-image-placeholder span {
    font-size: 0.9rem;
    font-weight: 500;
}

/* Status Badge */
.property-status-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    padding: 0.5rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    backdrop-filter: blur(10px);
    box-shadow: var(--shadow-light);
    display: flex;
    align-items: center;
    gap: 0.25rem;
}

.status-available {
    background: rgba(56, 161, 105, 0.9);
    color: white;
}

.status-sold {
    background: rgba(220, 53, 69, 0.9);
    color: white;
}

.status-pending {
    background: rgba(214, 158, 46, 0.9);
    color: white;
}

/* Property Type Badge */
.property-type-badge {
    position: absolute;
    top: 1rem;
    left: 1rem;
    background: rgba(26, 54, 93, 0.9);
    color: white;
    padding: 0.4rem 0.75rem;
    border-radius: 15px;
    font-size: 0.7rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    backdrop-filter: blur(10px);
    display: flex;
    align-items: center;
    gap: 0.25rem;
}

/* Property Header */
.property-header {
    border-bottom: 1px solid var(--border-color);
    padding-bottom: 1rem;
}

.property-title {
    font-family: 'Playfair Display', serif;
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 0.5rem;
    font-size: 1.25rem;
    line-height: 1.3;
}

.property-description {
    color: var(--text-light);
    font-size: 0.9rem;
    line-height: 1.5;
    margin-bottom: 0;
}

/* Property Price */
.property-price {
    text-align: center;
    padding: 1rem;
    background: linear-gradient(135deg, var(--bg-light) 0%, rgba(26, 54, 93, 0.05) 100%);
    border-radius: var(--border-radius);
    border: 1px solid var(--border-color);
}

.price-label {
    display: block;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: var(--text-light);
    margin-bottom: 0.25rem;
    font-weight: 600;
}

.price-value {
    display: block;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary-color);
    font-family: 'Playfair Display', serif;
}

/* Property Details */
.property-details {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
}

.detail-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-size: 0.9rem;
    color: var(--text-dark);
}

.detail-item i {
    width: 16px;
    color: var(--primary-color);
    text-align: center;
}

/* Action Buttons */
.property-actions .btn-group {
    box-shadow: var(--shadow-light);
    border-radius: var(--border-radius);
    overflow: hidden;
}

.btn-action {
    border: none;
    padding: 0.75rem 0.5rem;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: var(--transition);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.25rem;
    background: var(--bg-white);
}

.btn-action i {
    font-size: 1rem;
}

.btn-action span {
    font-size: 0.7rem;
}

.btn-outline-primary.btn-action:hover {
    background: var(--primary-color);
    color: white;
    transform: translateY(-2px);
}

.btn-outline-warning.btn-action:hover {
    background: #ffc107;
    color: var(--text-dark);
    transform: translateY(-2px);
}

.btn-outline-danger.btn-action:hover {
    background: #dc3545;
    color: white;
    transform: translateY(-2px);
}

/* Empty State */
.empty-state {
    text-align: center;
    padding: 4rem 2rem;
    background: var(--bg-white);
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-light);
    margin: 2rem 0;
}

.empty-state-icon {
    font-size: 4rem;
    color: var(--text-light);
    margin-bottom: 1.5rem;
    opacity: 0.6;
}

.empty-state-title {
    font-family: 'Playfair Display', serif;
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 1rem;
    font-size: 1.75rem;
}

.empty-state-text {
    color: var(--text-light);
    font-size: 1.1rem;
    margin-bottom: 2rem;
    max-width: 400px;
    margin-left: auto;
    margin-right: auto;
}

/* Pagination Container */
.pagination-container {
    padding: 2rem 0;
    border-top: 1px solid var(--border-color);
}

/* ===== UTILITY CLASSES ===== */
.smooth-scroll {
    scroll-behavior: smooth;
}

.min-vh-75 {
    min-height: 75vh;
}

.text-gradient {
    background: linear-gradient(135deg, var(--primary-color), var(--accent-gold));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* ===== ANIMATIONS ===== */
@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0) translateX(-50%);
    }
    40% {
        transform: translateY(-10px) translateX(-50%);
    }
    60% {
        transform: translateY(-5px) translateX(-50%);
    }
}

/* Enhanced Hover Effects */
.property-card:hover .property-status-badge {
    transform: scale(1.05);
}

.property-card:hover .property-type-badge {
    transform: scale(1.05);
}

.property-card:hover .price-value {
    color: var(--accent-gold);
}

/* ===== RESPONSIVE DESIGN ===== */
@media (max-width: 768px) {
    /* Hero Section Mobile */
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-subtitle {
        font-size: 1.1rem;
    }
    
    .hero-stats {
        gap: 1rem;
    }
    
    .stat-number {
        font-size: 2rem;
    }
    
    .stat-divider {
        display: none;
    }
    
    .hero-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .btn-hero-primary,
    .btn-hero-secondary {
        width: 100%;
        max-width: 300px;
        justify-content: center;
    }
    
    /* Features Section Mobile */
    .section-title {
        font-size: 2rem;
    }
    
    .feature-card {
        padding: 2rem 1.5rem;
    }
    
    .feature-icon {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }
    
    /* CTA Section Mobile */
    .cta-title {
        font-size: 2rem;
    }
    
    .cta-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .btn-cta-primary,
    .btn-cta-secondary {
        width: 100%;
        max-width: 300px;
        justify-content: center;
    }
    
    /* Properties Section Mobile */
    .page-header .d-flex {
        flex-direction: column;
        align-items: stretch;
        text-align: center;
    }
    
    .page-title {
        font-size: 1.75rem;
    }
    
    .property-image-container {
        height: 200px;
    }
    
    .property-title {
        font-size: 1.1rem;
    }
    
    .price-value {
        font-size: 1.25rem;
    }
    
    .btn-action {
        padding: 0.6rem 0.4rem;
        font-size: 0.75rem;
    }
    
    .btn-action i {
        font-size: 0.9rem;
    }
    
    .btn-action span {
        font-size: 0.65rem;
    }
    
    .empty-state {
        padding: 3rem 1.5rem;
    }
    
    .empty-state-icon {
        font-size: 3rem;
    }
    
    .empty-state-title {
        font-size: 1.5rem;
    }
}

@media (max-width: 576px) {
    /* Hero Section Extra Small */
    .hero-title {
        font-size: 2rem;
    }
    
    .hero-subtitle {
        font-size: 1rem;
    }
    
    .hero-stats {
        flex-direction: column;
        gap: 1.5rem;
    }
    
    .stat-item {
        padding: 1rem;
        background: rgba(255,255,255,0.1);
        border-radius: var(--border-radius);
        backdrop-filter: blur(10px);
    }
    
    /* Features Section Extra Small */
    .features-section {
        padding: 4rem 0;
    }
    
    .section-title {
        font-size: 1.75rem;
    }
    
    .feature-card {
        padding: 2rem 1rem;
        margin-bottom: 2rem;
    }
    
    /* CTA Section Extra Small */
    .cta-section {
        padding: 4rem 0;
    }
    
    .cta-title {
        font-size: 1.75rem;
    }
    
    .cta-description {
        font-size: 1rem;
    }
    
    /* Properties Section Extra Small */
    .property-details {
        gap: 0.5rem;
    }
    
    .detail-item {
        font-size: 0.8rem;
    }
    
    .property-actions .btn-group {
        flex-direction: column;
    }
    
    .btn-action {
        flex-direction: row;
        justify-content: center;
        padding: 0.75rem 1rem;
    }
    
    .btn-action span {
        font-size: 0.8rem;
    }
    
    .empty-state {
        padding: 2rem 1rem;
    }
}

/* ===== SMOOTH SCROLL BEHAVIOR ===== */
html {
    scroll-behavior: smooth;
}

/* ===== LOADING ANIMATIONS ===== */
.property-card {
    opacity: 0;
    animation: fadeInUp 0.6s ease-out forwards;
}

.fade-in-up {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 0.8s ease-out forwards;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.slide-in-right {
    opacity: 0;
    transform: translateX(30px);
    animation: slideInRight 0.8s ease-out forwards;
}

@keyframes slideInRight {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* ===== ENHANCED INTERACTIONS ===== */
.feature-card:hover .feature-icon {
    transform: scale(1.1) rotate(5deg);
}

.hero-actions .btn-hero-primary:hover,
.hero-actions .btn-hero-secondary:hover,
.cta-actions .btn-cta-primary:hover,
.cta-actions .btn-cta-secondary:hover {
    animation: pulse 0.6s ease-in-out;
}

@keyframes pulse {
    0% { transform: scale(1) translateY(0); }
    50% { transform: scale(1.05) translateY(-3px); }
    100% { transform: scale(1) translateY(-3px); }
}

/* ===== ACCESSIBILITY IMPROVEMENTS ===== */
@media (prefers-reduced-motion: reduce) {
    * {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
    
    .hero-section {
        background-attachment: scroll;
    }
    
    .scroll-down {
        animation: none;
    }
}

/* ===== FOCUS STATES ===== */
.btn-hero-primary:focus,
.btn-hero-secondary:focus,
.btn-cta-primary:focus,
.btn-cta-secondary:focus,
.scroll-down:focus {
    outline: 2px solid var(--accent-gold);
    outline-offset: 2px;
}

/* ===== PRINT STYLES ===== */
@media print {
    .hero-section,
    .features-section,
    .cta-section {
        display: none;
    }
    
    .properties-section {
        padding: 0;
    }
    
    .property-card {
        break-inside: avoid;
        box-shadow: none;
        border: 1px solid #ddd;
    }
    
    .property-actions {
        display: none;
    }
}
</style>

<script>

@endsection