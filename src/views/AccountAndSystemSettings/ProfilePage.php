<?php require_once __DIR__ . '/../layout/Header.php'; ?>

<div class="flex flex-col lg:flex-row min-h-screen">
    <!-- Sidebar -->
    <?php require_once __DIR__ . '/Sidebar.php'; ?>

    <!-- Main Content -->
    <div class="w-full lg:w-3/4 p-6">
        <h2 class="text-2xl font-semibold mb-6">My Profile</h2>
        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <img alt="Profile picture of Rafiqul Rahman" class="w-16 h-16 rounded-full mr-4" height="100"
                        src="https://storage.googleapis.com/a1aa/image/fhdaknZibCEeet32zZgI5hU7cE99B0p_3ZtOEKNcwEc.jpg"
                        width="100" />
                    <div>
                        <h3 class="text-xl font-semibold"><?= $data['name'] ?></h3>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-semibold">Personal Information</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="text-gray-600">First Name</p>
                    <p class="font-semibold"><?= $data['first_name'] ?? '' ?></p>
                </div>
                <div>
                    <p class="text-gray-600">Last Name</p>
                    <p class="font-semibold"><?= $data['last_name'] ?? '' ?></p>
                </div>
                <div>
                    <p class="text-gray-600">Email address</p>
                    <p class="font-semibold"><?= $data['email'] ?? '' ?></p>
                </div>
                <div>
                    <p class="text-gray-600">Phone</p>
                    <p class="font-semibold"><?= $data['phone'] ?? '' ?></p>
                </div>
                <div>
                    <p class="text-gray-600">Address</p>
                    <p class="font-semibold"><?= $data['address'] ?? '' ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../layout/Footer.php'; ?>