<?php require_once __DIR__ . '/../../layout/vendor/VendorHeader.php'; ?>

<div class="bg-gray-50 min-h-screen">
    <!-- Page Header -->
    <div class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Products Management</h1>
                    <p class="text-gray-600">Manage your agricultural products inventory</p>
                </div>
                <button id="add-product-btn" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-200 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                    Add New Product
                </button>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Quick Stats -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center">
                    <div class="bg-green-100 rounded-full p-3 mr-4">
                        <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600">Total Products</p>
                        <p class="text-xl font-bold text-gray-800" id="total-products">0</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center">
                    <div class="bg-yellow-100 rounded-full p-3 mr-4">
                        <svg class="h-6 w-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600">Low Stock</p>
                        <p class="text-xl font-bold text-gray-800" id="low-stock">0</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center">
                    <div class="bg-red-100 rounded-full p-3 mr-4">
                        <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600">Out of Stock</p>
                        <p class="text-xl font-bold text-gray-800" id="out-of-stock">0</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center">
                    <div class="bg-blue-100 rounded-full p-3 mr-4">
                        <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600">Top Sellers</p>
                        <p class="text-xl font-bold text-gray-800" id="top-sellers">0</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filters and Search -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
                <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
                    <select id="category-filter" class="border rounded-lg px-4 py-2 focus:ring-green-500 focus:border-green-500">
                        <option value="">All Categories</option>
                        <option value="livestock">Livestock</option>
                        <option value="crops">Crops</option>
                        <option value="dairy">Dairy Products</option>
                        <option value="fish">Fish & Aquaculture</option>
                    </select>
                    
                    <select id="stock-filter" class="border rounded-lg px-4 py-2 focus:ring-green-500 focus:border-green-500">
                        <option value="">All Stock Status</option>
                        <option value="in-stock">In Stock</option>
                        <option value="low-stock">Low Stock</option>
                        <option value="out-of-stock">Out of Stock</option>
                    </select>
                    
                    <select id="sort-by" class="border rounded-lg px-4 py-2 focus:ring-green-500 focus:border-green-500">
                        <option value="newest">Newest First</option>
                        <option value="oldest">Oldest First</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="stock-low">Stock: Low to High</option>
                    </select>
                </div>
                
                <div class="relative w-full md:w-64">
                    <input type="text" id="search-products" class="w-full pl-10 pr-4 py-2 border rounded-lg focus:ring-green-500 focus:border-green-500" placeholder="Search products...">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products Table -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200" id="products-table">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200" id="products-list">
                        <!-- Products will be loaded here dynamically -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add/Edit Product Modal -->
<div id="product-modal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 overflow-y-auto">
    <!-- Modal content will be loaded dynamically -->
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function() {
    // Load initial data
    loadProducts();
    updateStats();
    
    // Initialize filters
    $('#category-filter, #stock-filter, #sort-by').change(function() {
        loadProducts();
    });
    
    // Search with debounce
    let searchTimeout;
    $('#search-products').on('input', function() {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(function() {
            loadProducts();
        }, 500);
    });
    
    // Add Product button click
    $('#add-product-btn').click(function() {
        showProductModal();
    });
});

// Load products function
function loadProducts() {
    const category = $('#category-filter').val();
    const stockStatus = $('#stock-filter').val();
    const sortBy = $('#sort-by').val();
    const search = $('#search-products').val();
    
    $.ajax({
        url: '/api/vendor/products',
        type: 'GET',
        data: {
            category: category,
            stock_status: stockStatus,
            sort_by: sortBy,
            search: search
        },
        success: function(response) {
            renderProducts(response.products);
        },
        error: function() {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Failed to load products. Please try again.'
            });
        }
    });
}

// Update dashboard stats
function updateStats() {
    $.ajax({
        url: '/api/vendor/product-stats',
        type: 'GET',
        success: function(response) {
            $('#total-products').text(response.total || 0);
            $('#low-stock').text(response.low_stock || 0);
            $('#out-of-stock').text(response.out_of_stock || 0);
            $('#top-sellers').text(response.top_sellers || 0);
        }
    });
}

// Render products to table
function renderProducts(products) {
    const tbody = $('#products-list');
    tbody.empty();
    
    if (products.length === 0) {
        tbody.append(`
            <tr>
                <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                    No products found
                </td>
            </tr>
        `);
        return;
    }
    
    products.forEach(function(product) {
        const row = `
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full object-cover" 
                                 src="${product.image || 'https://via.placeholder.com/40'}" 
                                 alt="${product.name}">
                        </div>
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">${product.name}</div>
                            <div class="text-sm text-gray-500">#${product.sku}</div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">${product.category}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">$${product.price}</div>
                    ${product.sale_price ? `
                        <div class="text-xs text-red-500">Sale: $${product.sale_price}</div>
                    ` : ''}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">${product.stock}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                        ${getStatusClass(product.status)}">
                        ${product.status}
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <button class="text-green-600 hover:text-green-900 mr-3" 
                            onclick="editProduct(${product.id})">Edit</button>
                    <button class="text-red-600 hover:text-red-900" 
                            onclick="deleteProduct(${product.id})">Delete</button>
                </td>
            </tr>
        `;
        tbody.append(row);
    });
}

// Get status class for badge
function getStatusClass(status) {
    switch(status.toLowerCase()) {
        case 'active':
            return 'bg-green-100 text-green-800';
        case 'draft':
            return 'bg-gray-100 text-gray-800';
        case 'out of stock':
            return 'bg-red-100 text-red-800';
        default:
            return 'bg-gray-100 text-gray-800';
    }
}

// Show product modal
function showProductModal(productId = null) {
    const modal = $('#product-modal');
    modal.removeClass('hidden');
    
    // Load modal content
    $.ajax({
        url: '/api/vendor/product-form',
        type: 'GET',
        data: { id: productId },
        success: function(response) {
            modal.html(response);
        }
    });
}

// Delete product
function deleteProduct(productId) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#EF4444',
        cancelButtonColor: '#6B7280',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: `/api/vendor/products/${productId}`,
                type: 'DELETE',
                success: function() {
                    Swal.fire(
                        'Deleted!',
                        'Product has been deleted.',
                        'success'
                    );
                    loadProducts();
                    updateStats();
                },
                error: function() {
                    Swal.fire(
                        'Error!',
                        'Failed to delete product.',
                        'error'
                    );
                }
            });
        }
    });
}
</script>

<?php require_once __DIR__ . '/../../layout/vendor/VendorFooter.php'; ?>
