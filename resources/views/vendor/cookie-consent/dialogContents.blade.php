<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-4">
    <div class="max-w-7xl mx-auto px-6">
       <div class="p-2 rounded-lg bg-mittelgruen">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 items-center xhidden xmd:inline">
                   <p class="ml-3 mr-3 xtext-lg text-gray-900 cookie-consent__message text-white">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                </div>
                <div class="mt-2 flex-shrink-0 w-full mt-0 w-auto">
                   <button
                      class="js-cookie-consent-agree cookie-consent__agree cursor-pointer flex items-center justify-center px-4 py-3 rounded-md text-sm font-medium text-white bg-gruen hover:bg-teal-500 ">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
