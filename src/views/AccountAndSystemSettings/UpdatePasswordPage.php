<?php require_once __DIR__ . '/../layout/Header.php'; ?>

<div class="flex flex-col lg:flex-row min-h-screen">
    <!-- Sidebar -->
    <?php require_once __DIR__ . '/Sidebar.php'; ?>

    <!-- Main Content -->
    <div class="w-full lg:w-3/4 p-6">
        <h2 class="text-2xl font-semibold mb-6">Update Password</h2>

        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <p class="text-gray-600 mb-6"><?= $data['name'] ?>, your new password must be different from any of your
                previous
                passwords.</p>
            <form id="update-password-form" data-validation="update-password"
                action="<?= BASE_URL ?>/api/user/update-password" method="POST">
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="new-password">Old Password</label>
                    <div class="relative">
                        <input type="password" id="old-password" placeholder="Enter Password" name="old-password"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500">
                            <div class="cursor-pointer" onclick="togglePasswordVisibility('old-password')">
                                <i class="fas fa-eye"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="new-password">New Password</label>
                    <div class="relative">
                        <input type="password" id="new-password" placeholder="Enter Password" name="new-password"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500">
                            <div class="cursor-pointer" onclick="togglePasswordVisibility('new-password')">
                                <i class="fas fa-eye"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="confirm-password">Confirm Password</label>
                    <div class="relative">
                        <input type="password" id="confirm-password" placeholder="Enter Password"
                            name="confirm-password"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500">
                            <div class="cursor-pointer" onclick="togglePasswordVisibility('confirm-password')">
                                <i class="fas fa-eye"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Reset
                    Password</button>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        formSubmission('update-password-form');
    });
</script>

<script>
    function togglePasswordVisibility(inputId) {
        const input = document.getElementById(inputId);
        const icon = input.nextElementSibling.querySelector('i');
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>

<?php require_once __DIR__ . '/../layout/Header.php'; ?>