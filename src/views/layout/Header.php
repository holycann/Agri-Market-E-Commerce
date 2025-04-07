<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriMarket - Your Agricultural Marketplace</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- jQuery Validation -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Custom CSS -->
    <style>
        /* Add any custom styles here */
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-green-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="<?= BASE_ENDPOINT ?>/" class="text-2xl font-bold">AgriMarket</a>
                </div>
                
                <!-- Navigation Links -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="<?= BASE_ENDPOINT ?>/" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-green-700">Home</a>
                        <a href="<?= BASE_ENDPOINT ?>/products" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-green-700">Products</a>
                        <a href="<?= BASE_ENDPOINT ?>/vendors" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-green-700">Vendors</a>
                        <a href="<?= BASE_ENDPOINT ?>/market-insights" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-green-700">Market Insights</a>
                    </div>
                </div>
                
                <!-- Right Navigation -->
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <!-- Search -->
                        <div class="relative">
                            <input type="text" class="bg-green-500 text-white placeholder-green-200 rounded-full px-4 py-1 focus:outline-none focus:ring-2 focus:ring-white" placeholder="Search products...">
                        </div>
                        
                        <!-- Cart -->
                        <a href="<?= BASE_ENDPOINT ?>/cart" class="ml-4 relative">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <span id="cart-count" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full text-xs w-5 h-5 flex items-center justify-center">0</span>
                        </a>
                        
                        <!-- User Menu -->
                        <div class="ml-4 relative" id="user-menu">
                            <button class="flex items-center">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="<?= ASSETS_URL ?>/images/default-avatar.png" alt="User avatar">
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md hover:bg-green-700 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="<?= BASE_ENDPOINT ?>/" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-green-700">Home</a>
                <a href="<?= BASE_ENDPOINT ?>/products" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-green-700">Products</a>
                <a href="<?= BASE_ENDPOINT ?>/vendors" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-green-700">Vendors</a>
                <a href="<?= BASE_ENDPOINT ?>/market-insights" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-green-700">Market Insights</a>
            </div>
        </div>
    </nav>
    
    <!-- Main Content Container -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">