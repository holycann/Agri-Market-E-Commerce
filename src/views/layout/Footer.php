</main>

<!-- Footer -->
<footer class="bg-green-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- About Section -->
            <div>
                <h3 class="text-lg font-semibold mb-4">About AgriMarket</h3>
                <p class="text-green-100">Your trusted marketplace for agricultural products, connecting farmers with
                    buyers directly.</p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="/about" class="text-green-100 hover:text-white">About Us</a></li>
                    <li><a href="/contact" class="text-green-100 hover:text-white">Contact</a></li>
                    <li><a href="/blog" class="text-green-100 hover:text-white">Blog</a></li>
                    <li><a href="/faqs" class="text-green-100 hover:text-white">FAQs</a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Categories</h3>
                <ul class="space-y-2">
                    <li><a href="/products/livestock" class="text-green-100 hover:text-white">Livestock</a></li>
                    <li><a href="/products/crops" class="text-green-100 hover:text-white">Crops</a></li>
                    <li><a href="/products/dairy" class="text-green-100 hover:text-white">Dairy Products</a></li>
                    <li><a href="/products/fish" class="text-green-100 hover:text-white">Fish & Aquaculture</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Newsletter</h3>
                <p class="text-green-100 mb-4">Subscribe to get updates on market prices and farming tips.</p>
                <form id="newsletter-form" class="space-y-4">
                    <input type="email" placeholder="Your email address"
                        class="w-full px-4 py-2 rounded bg-green-500 text-white placeholder-green-200 focus:outline-none focus:ring-2 focus:ring-white">
                    <button type="submit"
                        class="w-full bg-white text-green-600 px-4 py-2 rounded hover:bg-green-100 transition duration-200">Subscribe</button>
                </form>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-green-500 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-green-100">&copy; <?php echo date('Y'); ?> AgriMarket. All rights reserved.</p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="text-green-100 hover:text-white">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                    </svg>
                </a>
                <a href="#" class="text-green-100 hover:text-white">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z" />
                    </svg>
                </a>
                <a href="#" class="text-green-100 hover:text-white">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Dropdown user menu toggle -->
<script>
    $(document).ready(function () {
        const profilePic = $('#profile-pic');
        const dropdownMenu = $('#dropdown-menu');
        console.log("test")

        profilePic.on('click', function () {
            console.log("test")
            dropdownMenu.toggleClass('hidden');
        });
    });
</script>

<!-- Mobile Menu Toggle Script -->
<script>
    $(document).ready(function () {
        // Mobile menu toggle
        $('.mobile-menu-button').click(function () {
            $('#mobile-menu').toggleClass('hidden');
        });

        // Newsletter form validation
        $('#newsletter-form').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                }
            },
            submitHandler: function (form) {
                // Handle form submission
                Swal.fire({
                    icon: 'success',
                    title: 'Thank you!',
                    text: 'You have successfully subscribed to our newsletter.',
                    confirmButtonColor: '#059669'
                });
            }
        });
    });
</script>
</body>

</html>