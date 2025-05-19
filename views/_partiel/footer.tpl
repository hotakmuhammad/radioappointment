        </main>

        <footer class="bg-gray-700 text-white py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold">RadioAppointment</h3>
                    <p class="text-sm text-indigo-200">Simplifiez vos rendez-vous radiologiques.</p>
                </div>
                <div class="flex flex-col space-y-2">
                    <a href="{$base_url}page/mentions" class="text-sm hover:text-indigo-200">Mentions légales</a>
                    <a href="{$base_url}page/contact" class="text-sm hover:text-indigo-200">Contact</a>
                </div>
                <div class="flex flex-col space-y-2">
                    <a href="{$base_url}" class="text-sm hover:text-indigo-200 underline">Retour en haut</a>
                    <p class="text-sm text-indigo-200">&copy; 2025 RadioAppointment.</p>
                </div>
            </div>
        </footer>
        {block name="js_footer"}
        {/block}
        </body>

</html>