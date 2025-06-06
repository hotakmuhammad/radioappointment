<section class="mt-12"> 
    <div class="container mx-auto px-4">

        <div class="max-w-2xl mx-auto bg-white rounded-xl ">

            <dl class="space-y-6 border-b border-gray-600 ">

                    <div class="flex items-center justify-between border-b border-gray-200 pb-1">
                        <dt class="text-sm font-medium text-gray-600">Nom</dt>
                        <dd class="text-lg text-gray-900">{$objApt->getUserName()}</dd>
                    </div>

                    <div class="flex items-center justify-between border-b border-gray-200 pb-1">
                        <dt class="text-sm font-medium text-gray-600">Prénom</dt>
                        <dd class="text-lg text-gray-900">{$objApt->getUserFirstname()}</dd>
                    </div>

                <div class="flex items-center justify-between border-b border-gray-200 pb-1">
                    <dt class="text-sm font-medium text-gray-600">Appointment</dt>
                    <dd class="text-lg text-gray-900">{$objApt->getAppointment()}</dd>
                </div>

                <div class="flex items-center justify-between border-b border-gray-200 ">
                    <dt class="text-sm font-medium text-gray-600">Date</dt>
                    <dd class="text-lg text-gray-900">{$objApt->getDateFr()}</dd>
                </div>
                <div class="flex items-center justify-between border-b border-gray-200 ">
                    <dt class="text-sm font-medium text-gray-600">Time</dt>
                    <dd class="text-lg text-gray-900">{$objApt->getTime()}</dd>
                </div>

                <div class="flex mb-8 items-center justify-between">
                    <dt class="text-sm font-medium text-gray-600">Status</dt>
                    <dd class="text-lg text-gray-900">{$objApt->getStatus()}</dd>
                </div>
                <div class="flex mb-8 items-center justify-between">
                    <dt class="text-lg m-4 text-gray-600">
                        <a href="{$base_url}appointment/edit_apt?id={$objApt->getId()}" class="inline-block px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">
                             Remplacer
                        </a>
                    </dt>
                    <dd class="text-lg m-4 text-red-900">
                        <a href="{$base_url}appointment/delete_apt?id={$objApt->getId()}" class="inline-block px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700" style="background-color: #dc2626;">
                            Annuler
                        </a>
                    </dd>
                </div>
            </dl>
        </div>

    </div>
</section>
