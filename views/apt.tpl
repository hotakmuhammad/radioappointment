{* {extends file="views/layout.tpl"} *}

{* {include file="views/_partiel/header.tpl"} *}
{* {block name="contenu"} *}

<section class="">
<div class="container mx-auto px-4">

    <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-lg p-6">
        <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">
            Appointments details</h1>
        <dl class="space-y-6">
        {* {if ( isset($user.user_id) && $user.user_id != '' ) } *}
            <div class="flex items-center justify-between border-b border-gray-200 pb-4">
                <dt class="text-sm font-medium text-gray-600">Nom</dt>
                <dd class="text-lg text-gray-900">{$objApt->getUserName()}</dd>
            </div>

            <div class="flex items-center justify-between border-b border-gray-200 pb-4">
                <dt class="text-sm font-medium text-gray-600">Prénom</dt>
                <dd class="text-lg text-gray-900">{$objApt->getUserFirstname()}</dd>
            </div>
		{* {/if} *}
            <div class="flex items-center justify-between border-b border-gray-200 pb-4">
                <dt class="text-sm font-medium text-gray-600">Appointment</dt>
                <dd class="text-lg text-gray-900">{$objApt->getAppointment()}</dd>
            </div>

            <div class="flex items-center justify-between">
                <dt class="text-sm font-medium text-gray-600">Date</dt>
                <dd  class="text-lg text-gray-900">{$objApt->getDateFr()}</dd>
            </div>
            <div class="flex items-center justify-between">
                <dt class="text-sm font-medium text-gray-600">Time</dt>
                <dd  class="text-lg text-gray-900">{$objApt->getTime()}</dd>
            </div>

            <div class="flex items-center justify-between">
                <dt class="text-sm font-medium text-gray-600">Status</dt>
                <dd  class="text-lg text-gray-900">{$objApt->getStatus()}</dd>
            </div>
        </dl>
    </div>

</div>
</section>
{* {/block} *}