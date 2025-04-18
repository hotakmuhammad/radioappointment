{extends file="views/layout.tpl"}

{block name="contenu"}
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="max-w-md w-full text-center">
            <h1 class="text-6xl font-bold text-red-600 mb-4">BANNED</h1>
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Account Suspended!</h2>
            <p class="text-gray-600 mb-8">Your account has been banned from the galaxy. It seems you've caused a cosmic
                disturbance! Contact the admin to appeal your ban and get back to exploring the stars.</p>
            <div class="relative mb-8">
                <div class="w-32 h-32 mx-auto animate-bounce">
                    <svg class="w-full h-full text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <p class="mt-2 text-sm text-gray-500">Warning: Banned users are sent to the asteroid mines!</p>
            </div>
            <a href="{$base_url}"
                class="inline-block bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition-colors">
                Return Home
            </a>
        </div>
    </div>
{/block}