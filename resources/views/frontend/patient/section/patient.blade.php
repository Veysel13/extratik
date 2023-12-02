<div data-popover id="popover-patient-profile-{{$patient->id_card}}" role="tooltip"
     class="absolute z-10 invisible inline-block w-96 ml-5 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
    <div class="p-3">
        <div class="flex items-center justify-between mb-2">
            <a href="#">
                <img class="w-10 h-10 rounded-full" src="{{$patient->image}}" alt="Jese Leos">
            </a>
            <div>
                <p class="text-base font-semibold leading-none text-gray-900 dark:text-white">
                    <a href="{{route('patients.view',$patient->id_card)}}">{{$patient->full_name}}</a>
                </p>
                <p class="mb-3 text-sm font-normal">
                    <a href="{{route('patients.view',$patient->id_card)}}"
                       class="hover:underline">{{$patient->gender}}</a>
                </p>
            </div>
        </div>

        <div class="flex flex-col">
            <!-- My contact -->
            <div class="py-1 sm:order-none order-3">
                <h5 class="text-lg font-poppins font-bold text-top-color">Contact</h5>
                <div class="border-2 w-20 border-top-color my-1"></div>

                <div class="grid grid-cols-2">
                    <div class="flex items-center my-2">
                        <a class="w-6 text-gray-700 hover:text-orange-600">
                            <svg class="h-5 w-5 text-blue-500" width="24" height="24" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"/>
                                <circle cx="12" cy="11" r="3"/>
                                <path
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 0 1 -2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z"/>
                            </svg>
                        </a>
                        <div class="ml-2 truncate">{{$patient->address}}</div>
                    </div>
                    <div class="flex items-center my-2">
                        <a class="w-6 text-gray-700 hover:text-orange-600"
                           aria-label="Visit TrendyMinds YouTube" href="" target="_blank">
                            <svg class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>

                        </a>
                        <div>{{$patient->post_code}}</div>
                    </div>
                    <div class="flex items-center my-2">
                        <a class="w-6 text-gray-700 hover:text-orange-600"
                           aria-label="Visit TrendyMinds Facebook" href="" target="_blank">
                            <svg class="h-5 w-5 text-blue-500" width="24" height="24" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"/>
                                <path
                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"/>
                                <path d="M15 7a2 2 0 0 1 2 2"/>
                                <path d="M15 3a6 6 0 0 1 6 6"/>
                            </svg>
                        </a>
                        <div>{{$patient->contact_number_one}}</div>
                    </div>
                    <div class="flex items-center my-2">
                        <a class="w-6 text-gray-700 hover:text-orange-600"
                           aria-label="Visit TrendyMinds Twitter" href="" target="_blank">
                            <svg class="h-5 w-5 text-blue-500" width="24" height="24" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"/>
                                <path
                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"/>
                                <path d="M15 7a2 2 0 0 1 2 2"/>
                                <path d="M15 3a6 6 0 0 1 6 6"/>
                            </svg>
                        </a>
                        <div>{{$patient->contact_number_two}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-popper-arrow></div>
</div>
