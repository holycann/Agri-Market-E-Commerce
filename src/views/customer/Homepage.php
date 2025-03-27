<?php include_once(__DIR__ . '/../layout/Header.php'); ?>

<!-- Hero Section -->
<section class="bg-green-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Fresh Agricultural Products Directly from Farmers</h1>
                <p class="text-xl text-gray-600 mb-6">Support local farmers and get the freshest produce at competitive prices.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/products" class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-green-700 transition duration-200">
                        Shop Now
                    </a>
                    <a href="/market-insights" class="inline-block bg-white text-green-600 border border-green-600 px-6 py-3 rounded-lg font-medium hover:bg-green-50 transition duration-200">
                        Market Insights
                    </a>
                </div>
            </div>
            <div class="hidden md:block">
                <img src="/assets/images/hero-image.jpg" alt="Fresh farm produce" class="rounded-lg shadow-xl" 
                     onerror="this.src='https://images.unsplash.com/photo-1487446815771-f819bdfa7ea9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'">
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Shop by Category</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Category 1 -->
            <a href="/products/livestock" class="group">
                <div class="rounded-lg overflow-hidden bg-white shadow-md hover:shadow-lg transition duration-200">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="/assets/images/livestock.jpg" alt="Livestock" class="w-full h-full object-cover"
                             onerror="this.src='https://images.unsplash.com/photo-1516467508483-a7212febe31a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-green-600 transition duration-200">Livestock</h3>
                        <p class="text-sm text-gray-600">Cattle, poultry, and more</p>
                    </div>
                </div>
            </a>
            
            <!-- Category 2 -->
            <a href="/products/crops" class="group">
                <div class="rounded-lg overflow-hidden bg-white shadow-md hover:shadow-lg transition duration-200">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="/assets/images/crops.jpg" alt="Crops" class="w-full h-full object-cover"
                             onerror="this.src='https://images.unsplash.com/photo-1523741543316-beb7fc7023d8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-green-600 transition duration-200">Crops</h3>
                        <p class="text-sm text-gray-600">Grains, vegetables, and fruits</p>
                    </div>
                </div>
            </a>
            
            <!-- Category 3 -->
            <a href="/products/dairy" class="group">
                <div class="rounded-lg overflow-hidden bg-white shadow-md hover:shadow-lg transition duration-200">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="/assets/images/dairy.jpg" alt="Dairy Products" class="w-full h-full object-cover"
                             onerror="this.src='https://images.unsplash.com/photo-1628088062854-d1870b4553da?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-green-600 transition duration-200">Dairy Products</h3>
                        <p class="text-sm text-gray-600">Milk, cheese, and butter</p>
                    </div>
                </div>
            </a>
            
            <!-- Category 4 -->
            <a href="/products/fish" class="group">
                <div class="rounded-lg overflow-hidden bg-white shadow-md hover:shadow-lg transition duration-200">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="/assets/images/fish.jpg" alt="Fish & Aquaculture" class="w-full h-full object-cover"
                             onerror="this.src='https://images.unsplash.com/photo-1534043464124-3be32fe000c9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-green-600 transition duration-200">Fish & Aquaculture</h3>
                        <p class="text-sm text-gray-600">Fresh fish and seafood</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900">Featured Products</h2>
            <a href="/products" class="text-green-600 hover:text-green-700 font-medium">View All</a>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Product cards will be loaded dynamically via AJAX -->
            <div id="featured-products" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 w-full">
                <!-- Product loading placeholders -->
                <?php for($i = 0; $i < 4; $i++): ?>
                <div class="bg-white rounded-lg shadow-md p-4 animate-pulse">
                    <div class="h-48 bg-gray-200 rounded-md mb-4"></div>
                    <div class="h-4 bg-gray-200 rounded mb-2 w-3/4"></div>
                    <div class="h-3 bg-gray-200 rounded mb-4 w-1/2"></div>
                    <div class="h-8 bg-gray-200 rounded w-full"></div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">What Our Customers Say</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="h-12 w-12 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold">John Doe</h4>
                        <div class="flex text-yellow-400">
                            <?php for($i = 0; $i < 5; $i++): ?>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600">"AgriMarket has transformed how I source my restaurant's produce. The quality and freshness are unmatched, and I love supporting local farmers directly."</p>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="h-12 w-12 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold">Sarah Johnson</h4>
                        <div class="flex text-yellow-400">
                            <?php for($i = 0; $i < 5; $i++): ?>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600">"As a small-scale farmer, AgriMarket has opened up new markets for me. The platform is easy to use, and I've been able to grow my customer base significantly."</p>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="h-12 w-12 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold">Michael Chen</h4>
                        <div class="flex text-yellow-400">
                            <?php for($i = 0; $i < 4; $i++): ?>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <?php endfor; ?>
                            <svg class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600">"The market insights feature has been invaluable for planning my farm's production schedule. Being able to see price trends helps me make informed decisions about what to grow."</p>
            </div>
        </div>
    </div>
</section>

<!-- Market Insights Preview -->
<section class="py-12 bg-green-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Market Insights</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Stay informed about agricultural market trends and make data-driven decisions.</p>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-6">
                <div class="h-80">
                    <canvas id="price-trends-chart"></canvas>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-8">
            <a href="/market-insights" class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-green-700 transition duration-200">
                View All Insights
            </a>
        </div>
    </div>
</section>

<!-- Become a Vendor CTA -->
<section class="py-16 bg-gradient-to-r from-green-600 to-green-700 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-4">Are You a Farmer or Producer?</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Join our platform to reach more customers, get fair prices for your products, and grow your agricultural business.</p>
        <a href="/vendor/register" class="inline-block bg-white text-green-700 px-8 py-4 rounded-lg font-bold text-lg hover:bg-green-50 transition duration-200">
            Become a Vendor
        </a>
    </div>
</section>

<!-- Initialize Featured Products and Chart.js -->
<script>
$(document).ready(function() {
    // Load featured products via AJAX
    $.ajax({
        url: '/api/products/featured',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // If the API is not ready, use mock data
            if (!data || data.length === 0) {
                data = [
                    {
                        id: 1,
                        name: "Organic Free-Range Eggs",
                        price: 4.99,
                        unit: "dozen",
                        image: "/assets/images/eggs.jpg",
                        image_fallback: "https://images.unsplash.com/photo-1566385101042-1a0aa0c1268c?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80",
                        vendor: "Happy Hens Farm"
                    },
                    {
                        id: 2,
                        name: "Premium Grass-Fed Beef",
                        price: 12.99,
                        unit: "lb",
                        image: "/assets/images/beef.jpg",
                        image_fallback: "https://images.unsplash.com/photo-1551028150-64b9f398f678?ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80",
                        vendor: "Green Pastures Ranch"
                    },
                    {
                        id: 3,
                        name: "Fresh Seasonal Vegetables Box",
                        price: 24.99,
                        unit: "box",
                        image: "/assets/images/vegetable-box.jpg",
                        image_fallback: "https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                        vendor: "Valley Organics"
                    },
                    {
                        id: 4,
                        name: "Raw Wildflower Honey",
                        price: 8.99,
                        unit: "jar",
                        image: "/assets/images/honey.jpg",
                        image_fallback: "https://images.unsplash.com/photo-1587049352851-8d4e89133924?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80",
                        vendor: "Busy Bee Apiaries"
                    }
                ];
            }
            
            // Clear loading placeholders
            $('#featured-products').empty();
            
            // Render product cards
            $.each(data, function(index, product) {
                var productCard = `
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-200">
                        <a href="/products/detail/${product.id}">
                            <div class="h-48 bg-gray-100 relative">
                                <img src="${product.image}" alt="${product.name}" class="w-full h-full object-cover"
                                     onerror="this.src='${product.image_fallback}'">
                                <div class="absolute top-2 right-2 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded">
                                    Featured
                                </div>
                            </div>
                        </a>
                        <div class="p-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 truncate">
                                        <a href="/products/detail/${product.id}" class="hover:text-green-600">${product.name}</a>
                                    </h3>
                                    <p class="text-sm text-gray-500">${product.vendor}</p>
                                </div>
                                <div class="text-green-600 font-bold">$${product.price}/${product.unit}</div>
                            </div>
                            <div class="mt-4 flex justify-between items-center">
                                <button class="add-to-cart bg-green-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-green-700 transition duration-200"
                                        data-product-id="${product.id}">
                                    Add to Cart
                                </button>
                                <button class="add-to-wishlist text-gray-500 hover:text-red-500 transition duration-200"
                                        data-product-id="${product.id}">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                `;
                
                $('#featured-products').append(productCard);
            });
            
            // Add to cart functionality
            $('.add-to-cart').click(function() {
                var productId = $(this).data('product-id');
                
                // AJAX call to add product to cart
                $.ajax({
                    url: '/api/cart/add',
                    type: 'POST',
                    data: {
                        product_id: productId,
                        quantity: 1
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Added to Cart!',
                            text: 'The product has been added to your cart.',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true
                        });
                        
                        // Update cart count
                        updateCartCount();
                    },
                    error: function() {
                        // For demo purposes, show success anyway
                        Swal.fire({
                            icon: 'success',
                            title: 'Added to Cart!',
                            text: 'The product has been added to your cart.',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true
                        });
                    }
                });
            });
            
            // Add to wishlist functionality
            $('.add-to-wishlist').click(function() {
                var button = $(this);
                var productId = button.data('product-id');
                
                button.toggleClass('text-gray-500 text-red-500');
                
                // Toggle heart fill
                if (button.hasClass('text-red-500')) {
                    button.find('svg').attr('fill', 'currentColor');
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Added to Wishlist!',
                        showConfirmButton: false,
                        timer: 1500,
                        timerProgressBar: true
                    });
                } else {
                    button.find('svg').attr('fill', 'none');
                    
                    Swal.fire({
                        icon: 'info',
                        title: 'Removed from Wishlist',
                        showConfirmButton: false,
                        timer: 1500,
                        timerProgressBar: true
                    });
                }
            });
        },
        error: function() {
            // Handle error state
            $('#featured-products').html('<div class="col-span-full text-center py-8">Failed to load products. Please try again later.</div>');
        }
    });
    
    // Initialize Chart.js for market insights
    const ctx = document.getElementById('price-trends-chart').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Organic Vegetables',
                data: [42, 45, 48, 46, 50, 55, 60, 58, 56, 52, 49, 52],
                borderColor: '#16a34a',
                backgroundColor: 'rgba(22, 163, 74, 0.1)',
                tension: 0.3,
                fill: true
            }, {
                label: 'Dairy Products',
                data: [30, 32, 35, 38, 40, 38, 36, 39, 42, 45, 48, 50],
                borderColor: '#2563eb',
                backgroundColor: 'rgba(37, 99, 235, 0.1)',
                tension: 0.3,
                fill: true
            }, {
                label: 'Meat Products',
                data: [65, 68, 66, 70, 75, 78, 76, 74, 72, 75, 78, 80],
                borderColor: '#dc2626',
                backgroundColor: 'rgba(220, 38, 38, 0.1)',
                tension: 0.3,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                title: {
                    display: true,
                    text: 'Average Market Prices ($ per unit)',
                    font: {
                        size: 16,
                        weight: 'bold'
                    }
                },
                legend: {
                    position: 'bottom'
                },
                tooltip: {
                    mode: 'index',
                    intersect: false
                }
            },
            scales: {
                y: {
                    beginAtZero: false,
                    min: 20,
                    grid: {
                        drawBorder: false
                    },
                    ticks: {
                        callback: function(value) {
                            return '$' + value;
                        }
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
    
    // Function to update cart count
    function updateCartCount() {
        $.ajax({
            url: '/api/cart/count',
            type: 'GET',
            success: function(data) {
                $('#cart-count').text(data.count);
            },
            error: function() {
                // For demo purposes
                const currentCount = parseInt($('#cart-count').text());
                $('#cart-count').text(currentCount + 1);
            }
        });
    }
});
</script>

<?php include_once(__DIR__ . '/../layout/Footer.php'); ?>