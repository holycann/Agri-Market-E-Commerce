<?php require_once __DIR__ . '/../layout/Header.php'; ?>

<div class="container mx-auto p-4">
    <div class="flex flex-col lg:flex-row">
        <!-- Product Image and Details -->
        <div class="flex-1 flex flex-col items-center lg:items-start">
            <img alt="Table lamp, dark gray/white" class="w-64 h-64 object-contain mb-4" height="400"
                src="https://storage.googleapis.com/a1aa/image/mt7KH0Med9k2mrhv0yWmdsOA69W-k-9OBgf1cHo9M-s.jpg"
                width="300" />

            <!-- Product Navigation -->
            <div class="flex-1 flex justify-center lg:justify-start mt-4 lg:mt-0">
                <div class="flex space-x-4">
                    <div class="flex flex-col items-center">
                        <img alt="Svallet lamp" class="w-12 h-12 object-contain mb-2" height="50"
                            src="https://storage.googleapis.com/a1aa/image/D5c5urqB0YbWC9IuOBjZ6pSw3c6nZ6S6JSKHDsLifIA.jpg"
                            width="50" />
                        <p class="text-blue-600">
                            Svallet
                        </p>
                    </div>
                    <div class="flex flex-col items-center">
                        <img alt="Navling lamp" class="w-12 h-12 object-contain mb-2" height="50"
                            src="https://storage.googleapis.com/a1aa/image/_giY84qHCb4JlHHqtbcVmQFeSKk4pvdj_w2ADyvcrP4.jpg"
                            width="50" />
                        <p class="text-gray-600">
                            Navling
                        </p>
                    </div>
                    <div class="flex flex-col items-center">
                        <img alt="Forsa lamp" class="w-12 h-12 object-contain mb-2" height="50"
                            src="https://storage.googleapis.com/a1aa/image/RHUFnVF7oYBl8MBCOfjTtWtiSsNQnyWRrM-daiYFZdA.jpg"
                            width="50" />
                        <p class="text-gray-600">
                            Forsa
                        </p>
                    </div>
                    <div class="flex flex-col items-center">
                        <img alt="Tarnaby lamp" class="w-12 h-12 object-contain mb-2" height="50"
                            src="https://storage.googleapis.com/a1aa/image/od57jqQKbeRSU80i7AB5YosCJpn-nQDfRsFQJy78zCY.jpg"
                            width="50" />
                        <p class="text-gray-600">
                            Tarnaby
                        </p>
                    </div>
                    <div class="flex flex-col items-center">
                        <img alt="Barometer lamp" class="w-12 h-12 object-contain mb-2" height="50"
                            src="https://storage.googleapis.com/a1aa/image/7Vf0OLyJBK8Ds_zYUzPTNPBNna4ybM2yyQjSRmaLvOk.jpg"
                            width="50" />
                        <p class="text-gray-600">
                            Barometer
                        </p>
                    </div>
                </div>
            </div>
        </div>

        
        
        <div class="flex-1 mt-4 lg:mt-0">
            <!-- Product Description -->
            <div class="bg-white p-4 rounded shadow">
                <h1 class="text-4xl font-bold mb-2">
                    SVALLET
                </h1>
                <p class="text-gray-600 mb-4">
                    Table lamp, dark gray/white
                </p>
                <p class="text-gray-600 mb-4">
                    You can create a soft, cozy atmosphere in your home with a textile shade that spreads a diffused and
                    decorative light.
                </p>
                <p class="text-3xl font-bold mb-4">
                    49
                    <sup class="text-xl">
                        99
                    </sup>
                    €
                </p>
                <button class="bg-blue-600 text-white px-4 py-2 rounded flex items-center mb-4">
                    <i class="fas fa-shopping-cart mr-2">
                    </i>
                    Add to shopping cart
                </button>
                <button class="text-gray-600">
                    <i class="far fa-heart">
                    </i>
                </button>
            </div>

             <!-- Reviews Section -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-bold mb-4">
                    Information
                </h2>
                <div class="flex items-center mb-4">
                    <span class="text-4xl font-bold">
                        4.1
                    </span>
                    <div class="ml-2">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-500">
                            </i>
                            <i class="fas fa-star text-yellow-500">
                            </i>
                            <i class="fas fa-star text-yellow-500">
                            </i>
                            <i class="fas fa-star text-yellow-500">
                            </i>
                            <i class="fas fa-star-half-alt text-yellow-500">
                            </i>
                        </div>
                        <p class="text-gray-600">
                            Overview
                        </p>
                    </div>
                </div>
                <div class="mb-4">
                    <p class="font-bold">
                        Andrii Boichuk
                    </p>
                    <p class="text-gray-600 text-sm">
                        9 Poland, Gdansk
                    </p>
                    <p class="text-gray-800">
                        Amazing lamp, I'm happy I have bought it
                        <span class="text-yellow-500">
                            😍
                        </span>
                    </p>
                </div>
                <div>
                    <p class="font-bold">
                        Baden Wurttem
                    </p>
                    <p class="text-gray-600 text-sm">
                        9 Germany, Henningsdorf
                    </p>
                    <p class="text-gray-800">
                        I chose their desk lamp based on an incorrect image. I reported the problem and they responded
                        immediately. I'm perfectly satisfied
                        <span class="text-red-500">
                            💯
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../layout/Footer.php'; ?>