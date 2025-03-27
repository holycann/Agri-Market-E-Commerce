<?php require_once __DIR__ . '/../../layout/vendor/VendorHeader.php'; ?>

<div class="bg-gray-50 min-h-screen">
    <!-- Vendor Dashboard Header -->
    <div class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <h1 class="text-2xl font-bold text-gray-900">Vendor Dashboard</h1>
            <p class="text-gray-600">Manage your agricultural products and track your sales</p>
        </div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Sidebar Navigation -->
            <div class="w-full md:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Vendor Menu</h2>
                    <nav class="space-y-2">
                        <a href="/vendor/dashboard" class="flex items-center px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-md">
                            <svg class="mr-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                            Dashboard
                        </a>
                        <a href="/vendor/products" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-md">
                            <svg class="mr-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                            Products
                        </a>
                        <a href="/vendor/orders" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-md">
                            <svg class="mr-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                            Orders
                        </a>
                        <a href="/vendor/analytics" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-md">
                            <svg class="mr-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            Analytics
                        </a>
                        <a href="/vendor/settings" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-md">
                            <svg class="mr-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Settings
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Main Content -->
            <div class="w-full md:w-3/4 space-y-6">
                <!-- Stats Overview -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center">
                            <div class="bg-green-100 rounded-full p-3 mr-4">
                                <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-600">Total Revenue</p>
                                <p class="text-xl font-bold text-gray-800">$<span id="total-revenue">0.00</span></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center">
                            <div class="bg-blue-100 rounded-full p-3 mr-4">
                                <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-600">Total Orders</p>
                                <p class="text-xl font-bold text-gray-800"><span id="total-orders">0</span></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center">
                            <div class="bg-purple-100 rounded-full p-3 mr-4">
                                <svg class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-600">Total Products</p>
                                <p class="text-xl font-bold text-gray-800"><span id="total-products">0</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sales Overview Chart -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Sales Overview</h2>
                    <div class="h-80">
                        <canvas id="sales-chart"></canvas>
                    </div>
                </div>

                <!-- Recent Orders -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold text-gray-800">Recent Orders</h2>
                        <a href="/vendor/orders" class="text-green-600 hover:text-green-700 text-sm font-medium">View All</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="recent-orders" class="bg-white divide-y divide-gray-200">
                                <!-- Orders will be loaded dynamically -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Top Products -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold text-gray-800">Top Products</h2>
                        <a href="/vendor/products" class="text-green-600 hover:text-green-700 text-sm font-medium">View All Products</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sales</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="top-products" class="bg-white divide-y divide-gray-200">
                                <!-- Products will be loaded dynamically -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Load vendor dashboard data
    loadDashboardData();
    
    // Initialize sales chart
    const salesCtx = document.getElementById('sales-chart').getContext('2d');
    const salesChart = new Chart(salesCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Sales Revenue',
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                borderColor: 'rgb(34, 197, 94)',
                backgroundColor: 'rgba(34, 197, 94, 0.1)',
                tension: 0.3
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Monthly Sales Revenue'
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Revenue (USD)'
                    }
                }
            }
        }
    });

    function loadDashboardData() {
        $.ajax({
            url: '/api/vendor/dashboard',
            type: 'GET',
            success: function(response) {
                if (response.success) {
                    const data = response.data;
                    
                    // Update stats
                    $('#total-revenue').text(data.totalRevenue.toFixed(2));
                    $('#total-orders').text(data.totalOrders);
                    $('#total-products').text(data.totalProducts);
                    
                    // Update sales chart
                    salesChart.data.datasets[0].data = data.monthlySales;
                    salesChart.update();
                    
                    // Load recent orders
                    loadRecentOrders(data.recentOrders);
                    
                    // Load top products
                    loadTopProducts(data.topProducts);
                }
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Failed to load dashboard data',
                    confirmButtonColor: '#059669'
                });
            }
        });
    }
    
    function loadRecentOrders(orders) {
        const tbody = $('#recent-orders');
        tbody.empty();
        
        if (orders.length === 0) {
            tbody.append(`
                <tr>
                    <td colspan="6" class="px-6 py-4 text-center text-sm text-gray-500">No recent orders found</td>
                </tr>
            `);
            return;
        }
        
        orders.forEach(order => {
            const statusClass = getStatusClass(order.status);
            tbody.append(`
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#${order.id}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${order.customer}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${order.date}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${statusClass}">
                            ${order.status}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$${order.total.toFixed(2)}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="/vendor/orders/${order.id}" class="text-green-600 hover:text-green-900 mr-3">View</a>
                        <button data-id="${order.id}" class="update-status-btn text-blue-600 hover:text-blue-900">Update Status</button>
                    </td>
                </tr>
            `);
        });
        
        // Add event listeners for update status buttons
        $('.update-status-btn').click(function() {
            const orderId = $(this).data('id');
            showUpdateStatusModal(orderId);
        });
    }
    
    function loadTopProducts(products) {
        const tbody = $('#top-products');
        tbody.empty();
        
        if (products.length === 0) {
            tbody.append(`
                <tr>
                    <td colspan="6" class="px-6 py-4 text-center text-sm text-gray-500">No products found</td>
                </tr>
            `);
            return;
        }
        
        products.forEach(product => {
            const stockClass = product.stock > 0 ? 'text-green-600' : 'text-red-600';
            
            tbody.append(`
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-md object-cover" src="${product.image}" alt="${product.name}">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">${product.name}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${product.category}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$${product.price.toFixed(2)}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${product.sales}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm ${stockClass}">${product.stock}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="/vendor/products/edit/${product.id}" class="text-green-600 hover:text-green-900 mr-3">Edit</a>
                    </td>
                </tr>
            `);
        });
    }
    
    function getStatusClass(status) {
        switch(status.toLowerCase()) {
            case 'completed':
                return 'bg-green-100 text-green-800';
            case 'processing':
                return 'bg-blue-100 text-blue-800';
            case 'shipping':
                return 'bg-yellow-100 text-yellow-800';
            case 'cancelled':
                return 'bg-red-100 text-red-800';
            default:
                return 'bg-gray-100 text-gray-800';
        }
    }
    
    function showUpdateStatusModal(orderId) {
        Swal.fire({
            title: 'Update Order Status',
            input: 'select',
            inputOptions: {
                'processing': 'Processing',
                'shipping': 'Shipping',
                'completed': 'Completed',
                'cancelled': 'Cancelled'
            },
            inputPlaceholder: 'Select a status',
            showCancelButton: true,
            confirmButtonText: 'Update',
            confirmButtonColor: '#059669',
            cancelButtonText: 'Cancel',
            showLoaderOnConfirm: true,
            preConfirm: (status) => {
                return $.ajax({
                    url: `/api/vendor/orders/${orderId}/status`,
                    type: 'PUT',
                    data: { status: status },
                    success: function(response) {
                        return response;
                    },
                    error: function() {
                        Swal.showValidationMessage('Failed to update order status');
                    }
                });
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.isConfirmed && result.value.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Status Updated',
                    text: 'Order status has been updated successfully',
                    confirmButtonColor: '#059669'
                }).then(() => {
                    loadDashboardData();
                });
            }
        });
    }
});
</script>

<?php require_once __DIR__ . '/../../layout/user/UserFooter.php'; ?>
