<?php require_once __DIR__ . '/../layout/Header.php'; ?>

<div class="flex flex-col lg:flex-row min-h-screen">
    <!-- Sidebar -->
    <?php require_once __DIR__ . '/Sidebar.php'; ?>

    <!-- Main Content -->
    <div class="w-full lg:w-3/4 p-6">
        <h2 class="text-2xl font-semibold mb-6">Update Profile</h2>

        <form action="">
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <div class="profile-pic-container">
                    <img alt="Profile picture of Rafiqur Rahman" class="w-16 h-16 rounded-full mr-4" height="100"
                        src="https://storage.googleapis.com/a1aa/image/sV7sFoavNc4cWBlHQ23C2fRft2USQVd332_zn2eqAVA.jpg"
                        width="100" />
                    <i class="fas fa-edit edit-icon text-green-500 text-xl">
                    </i>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-semibold">Personal Information</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="text-gray-600">First Name</label>
                        <input class="w-full p-2 border border-gray-300 rounded" name="first_name"
                            placeholder="Please Input Your First Name" type="text" value="Rafiqul" />
                    </div>
                    <div>
                        <label class="text-gray-600">Last Name</label>
                        <input class="w-full p-2 border border-gray-300 rounded" name="last_name"
                            placeholder="Please Input Your Last Name" type="text" value="Rahman" />
                    </div>
                    <div>
                        <label class="text-gray-600">Email address</label>
                        <input class="w-full p-2 border border-gray-300 rounded" placeholder="Please Input Your Email"
                            name="email" type="email" value="rafiqulrahman51@gmail.com" />
                    </div>
                    <div>

                        <label class="text-gray-600">Phone Number</label>
                        <input class="w-full p-2 border border-gray-300 rounded" name="phone"
                            placeholder="Please Input Your Phone Number" type="text" value="+62 345 346 46" />
                    </div>
                </div>
                <div>
                    <label class="text-gray-600">Address</label>
                    <textarea class="w-full p-2 border border-gray-300 rounded" placeholder="Please Input Your Address"
                        name="address" rows="4">Jauh Pake Helm</textarea>
                </div>
                <button class="bg-blue-500 text-white px-4 py-2 rounded w-full mt-4">Save Changes</button>
            </div>
        </form>
        <!-- <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-semibold">Address</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="text-gray-600">Country</p>
                    <p class="font-semibold">United Kingdom</p>
                </div>
                <div>
                    <p class="text-gray-600">City/State</p>
                    <p class="font-semibold">Leeds, East London</p>
                </div>
                <div>
                    <p class="text-gray-600">Postal Code</p>
                    <p class="font-semibold">ERT 2354</p>
                </div>
                <div>
                    <p class="text-gray-600">TAX ID</p>
                    <p class="font-semibold">AS45645756</p>
                </div>
            </div>
        </div> -->
    </div>
</div>

<?php require_once __DIR__ . '/../layout/Footer.php'; ?>