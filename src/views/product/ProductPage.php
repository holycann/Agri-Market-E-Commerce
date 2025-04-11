<?php require_once __DIR__ . '/../layout/Header.php'; ?>

<div class="container mx-auto p-4">
    <div class="flex flex-col md:flex-row">
        <!-- Sidebar -->
        <div class="w-full md:w-1/4 p-4 bg-white rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-4">
                Category
            </h2>
            <ul class="space-y-2">
                <li>
                    <input class="mr-2" id="allProduct" name="category" type="radio" />
                    <label class="cursor-pointer" for="allProduct">
                        All Product
                    </label>
                </li>
                <li>
                    <input class="mr-2" id="forHome" name="category" type="radio" />
                    <label class="cursor-pointer" for="forHome">
                        For Home
                    </label>
                </li>
                <li>
                    <input class="mr-2" id="forOffice" name="category" type="radio" />
                    <label class="cursor-pointer" for="forOffice">
                        For Office
                    </label>
                </li>
                <li>
                    <input class="mr-2" id="forKids" name="category" type="radio" />
                    <label class="cursor-pointer" for="forKids">
                        For Kids
                    </label>
                </li>
                <li>
                    <input class="mr-2" id="forTravel" name="category" type="radio" />
                    <label class="cursor-pointer" for="forTravel">
                        For Travel
                    </label>
                </li>
                <li>
                    <input class="mr-2" id="onDiscount" name="category" type="radio" />
                    <label class="cursor-pointer" for="onDiscount">
                        On Discount
                    </label>
                </li>
            </ul>
        </div>
        <!-- Main Content -->
        <div class="w-full md:w-3/4 p-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Product Card -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <a href="<?= BASE_ENDPOINT ?>/products/1">
                        <div class="flex justify-between items-center mb-4">
                            <span class="bg-gray-200 text-gray-800 text-xs font-semibold px-2 py-1 rounded">
                                Other
                            </span>
                            <i class="fas fa-heart text-gray-400"></i>
                        </div>
                        <img alt="Phone Holder Saki" class="w-full h-40 object-cover mb-4" height="200"
                            src="https://placehold.co/200x200" width="200" />
                        <h3 class="text-lg font-semibold mb-2">
                            Phone Holder Saki
                        </h3>
                        <p class="text-gray-500 text-sm mb-2">
                            1000 orders from 5 stores
                        </p>
                    </a>
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-xl font-bold">
                            $28.90
                        </span>
                        <span class="text-gray-500 text-sm line-through">
                            $30.00
                        </span>
                    </div>
                    <div class="flex justify-between">
                        <button class="bg-gray-200 text-gray-800 text-sm font-semibold px-4 py-2 rounded add-to-chart">
                            Add to Chart
                        </button>
                        <button class="bg-black text-white text-sm font-semibold px-4 py-2 rounded">
                            Buy Now
                        </button>
                    </div>
                </div>
                <!-- Repeat other product cards similarly -->
            </div>
            <!-- Pagination -->
            <div class="flex justify-between items-center mt-4">
                <button class="text-gray-500 text-sm">
                    Previous
                </button>
                <div class="flex space-x-2">
                    <button class="bg-gray-200 text-gray-800 text-sm font-semibold px-3 py-1 rounded">
                        1
                    </button>
                    <button class="bg-gray-200 text-gray-800 text-sm font-semibold px-3 py-1 rounded">
                        2
                    </button>
                    <button class="bg-gray-200 text-gray-800 text-sm font-semibold px-3 py-1 rounded">
                        3
                    </button>
                    <button class="bg-gray-200 text-gray-800 text-sm font-semibold px-3 py-1 rounded">
                        4
                    </button>
                    <button class="bg-gray-200 text-gray-800 text-sm font-semibold px-3 py-1 rounded">
                        5
                    </button>
                </div>
                <button class="text-gray-500 text-sm">
                    Next
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('.add-to-chart').forEach(button => {
        button.addEventListener('click', function () {
            const originalText = this.textContent;
            this.textContent = 'Adding to Chart...';
            this.disabled = true;
            setTimeout(() => {
                this.textContent = 'Success Add to Chart';
                this.classList.remove('bg-gray-200', 'text-gray-800');
                this.classList.add('bg-green-500', 'text-white');
                setTimeout(() => {
                    this.textContent = originalText;
                    this.classList.remove('bg-green-500', 'text-white');
                    this.classList.add('bg-gray-200', 'text-gray-800');
                    this.disabled = false;
                }, 2000);
            }, 2000);
        });
    });
</script>

<?php require_once __DIR__ . '/../layout/Footer.php'; ?>