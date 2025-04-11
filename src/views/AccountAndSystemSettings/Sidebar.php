<!-- Sidebar -->
<div class="hidden lg:block w-full lg:w-1/4 bg-white p-6">
    <h2 class="text-xl font-semibold mb-6">Settings</h2>
    <div>
        <h3 class="text-lg font-semibold mb-2">Account</h3>
        <ul class="mb-6">
            <li class="mb-4">
                <a class="text-green-500 font-semibold hover:bg-green-100 p-2 rounded"
                    href="<?= BASE_ENDPOINT ?>/settings/profile">My Profile</a>
            </li>
            <li class="mb-4">
                <a class="text-gray-600 hover:bg-green-100 p-2 rounded"
                    href="<?= BASE_ENDPOINT ?>/settings/update-profile">Update Profile</a>
            </li>
            <li class="mb-4">
                <a class="text-gray-600 hover:bg-green-100 p-2 rounded" href="<?= BASE_ENDPOINT ?>/settings/update-password">Update Password</a>
            </li>
        </ul>
        <h3 class="text-lg font-semibold mb-2">System</h3>
        <ul>
            <!-- <li class="mb-4">
                <a class="text-gray-600 hover:bg-green-100 p-2 rounded" href="#">Notifications</a>
            </li>
            <li class="mb-4">
                <a class="text-gray-600 hover:bg-green-100 p-2 rounded" href="#">Billing</a>
            </li>
            <li class="mb-4">
                <a class="text-gray-600 hover:bg-green-100 p-2 rounded" href="#">Data Export</a>
            </li> -->
            <li class="mb-4">
                <a class="text-red-500 hover:bg-red-100 p-2 rounded" href="#">Delete Account</a>
            </li>
        </ul>
    </div>
</div>

<!-- Mobile Menu Button -->
<button class="fixed bottom-5 right-5 bg-green-500 text-white p-4 rounded-full shadow-lg lg:hidden"
    onclick="toggleMenu()">
    <i class="fas fa-cog"></i>
</button>

<!-- Mobile Menu Items -->
<div id="mobile-menu" class="hidden fixed bottom-20 right-5 space-y-2">
    <div class="relative group">
        <div
            class="absolute bottom-full mb-2 hidden group-hover:block bg-gray-800 text-white text-xs rounded py-1 px-2">
            Account
        </div>
        <button class="bg-white p-4 rounded-full shadow-lg text-green-500" onclick="toggleSubMenu('account-menu')">
            <i class="fas fa-user"></i>
        </button>
        <div id="account-menu" class="hidden flex space-x-2 mt-2">
            <div class="relative group">
                <div
                    class="absolute bottom-full mb-2 hidden group-hover:block bg-gray-800 text-white text-xs rounded py-1 px-2">
                    My Profile
                </div>
                <a class="bg-white p-4 rounded-full shadow-lg text-green-500" href="#"><i class="fas fa-user"></i></a>
            </div>
            <div class="relative group">
                <div
                    class="absolute bottom-full mb-2 hidden group-hover:block bg-gray-800 text-white text-xs rounded py-1 px-2">
                    Security
                </div>
                <a class="bg-white p-4 rounded-full shadow-lg text-gray-600" href="#"><i
                        class="fas fa-shield-alt"></i></a>
            </div>
            <div class="relative group">
                <div
                    class="absolute bottom-full mb-2 hidden group-hover:block bg-gray-800 text-white text-xs rounded py-1 px-2">
                    Teams
                </div>
                <a class="bg-white p-4 rounded-full shadow-lg text-gray-600" href="#"><i class="fas fa-users"></i></a>
            </div>
            <div class="relative group">
                <div
                    class="absolute bottom-full mb-2 hidden group-hover:block bg-gray-800 text-white text-xs rounded py-1 px-2">
                    Team Member
                </div>
                <a class="bg-white p-4 rounded-full shadow-lg text-gray-600" href="#"><i
                        class="fas fa-user-friends"></i></a>
            </div>
        </div>
    </div>
    <div class="relative group">
        <div
            class="absolute bottom-full mb-2 hidden group-hover:block bg-gray-800 text-white text-xs rounded py-1 px-2">
            System
        </div>
        <button class="bg-white p-4 rounded-full shadow-lg text-gray-600" onclick="toggleSubMenu('system-menu')">
            <i class="fas fa-cogs"></i>
        </button>
        <div id="system-menu" class="hidden flex space-x-2 mt-2">
            <div class="relative group">
                <div
                    class="absolute bottom-full mb-2 hidden group-hover:block bg-gray-800 text-white text-xs rounded py-1 px-2">
                    Notifications
                </div>
                <a class="bg-white p-4 rounded-full shadow-lg text-gray-600" href="#"><i class="fas fa-bell"></i></a>
            </div>
            <div class="relative group">
                <div
                    class="absolute bottom-full mb-2 hidden group-hover:block bg-gray-800 text-white text-xs rounded py-1 px-2">
                    Billing
                </div>
                <a class="bg-white p-4 rounded-full shadow-lg text-gray-600" href="#"><i
                        class="fas fa-credit-card"></i></a>
            </div>
            <div class="relative group">
                <div
                    class="absolute bottom-full mb-2 hidden group-hover:block bg-gray-800 text-white text-xs rounded py-1 px-2">
                    Data Export
                </div>
                <a class="bg-white p-4 rounded-full shadow-lg text-gray-600" href="#"><i
                        class="fas fa-file-export"></i></a>
            </div>
            <div class="relative group">
                <div
                    class="absolute bottom-full mb-2 hidden group-hover:block bg-gray-800 text-white text-xs rounded py-1 px-2">
                    Delete Account
                </div>
                <a class="bg-white p-4 rounded-full shadow-lg text-red-500" href="#"><i
                        class="fas fa-trash-alt"></i></a>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleMenu() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    }

    function toggleSubMenu(id) {
        const subMenu = document.getElementById(id);
        subMenu.classList.toggle('hidden');
    }
</script>