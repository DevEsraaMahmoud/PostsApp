<!-- resources/views/profile/show.blade.php -->
<div class="bg-gray-100 min-h-screen p-6 flex items-center justify-center">
    <div class="container mx-auto max-w-4xl">
        <div class="bg-white shadow-lg rounded-lg p-8">
            <h1 class="text-4xl font-semibold text-gray-800 mb-8 text-center">User Profile</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="border-r border-gray-200 pr-6">
                    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Personal Information</h2>
                    <div class="text-gray-600 space-y-3">
                        <p><strong>Name:</strong> <span class="block text-xl">{{ $user->name }}</span></p>
                        <p><strong>Email:</strong> <span class="block text-xl">{{ $user->email }}</span></p>
                        <p><strong>Joined:</strong> <span class="block text-xl">{{ $user->created_at->format('M d, Y') }}</span></p>
                    </div>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Actions</h2>
                    <div class="flex flex-col space-y-3">
                        <a href="{{ route('profile.edit') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline text-center">
                            Edit Profile
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
