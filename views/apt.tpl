{* {extends file="views/layout.tpl"} *}

{* {include file="views/_partiel/header.tpl"} *}
{* {block name="contenu"} *}

<section class="">
<div class="container mx-auto px-4">

    <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-lg p-6">
        <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">
            Appointments details</h1>
        <dl class="space-y-6">

            <div class="flex items-center justify-between border-b border-gray-200 pb-4">
                <dt class="text-sm font-medium text-gray-600">Nom</dt>
                <dd class="text-lg text-gray-900">{$objUser->getName}</dd>
            </div>

            <div class="flex items-center justify-between border-b border-gray-200 pb-4">
                <dt class="text-sm font-medium text-gray-600">Prénom</dt>
                <dd class="text-lg text-gray-900">Muhammad Shahid</dd>
            </div>

            <div class="flex items-center justify-between border-b border-gray-200 pb-4">
                <dt class="text-sm font-medium text-gray-600">Appointment</dt>
                <dd class="text-lg text-gray-900">HEAD MRI</dd>
            </div>

            <div class="flex items-center justify-between">
                <dt class="text-sm font-medium text-gray-600">Date</dt>
                <dd  class="text-lg text-gray-900">12/08/2025</dd>
            </div>
        </dl>
    </div>

</div>
</section>
{* {/block} *}