@extends('frontend.layout.default')
@push('header')
@endpush

@section('content')
    <div class="bg-gray-100 p-4 dark:text-gray-100">
        <div class="border-1 shadow-lg shadow-gray-700 rounded-lg">
            <!-- top content -->
            <div class="flex rounded-t-lg bg-top-color sm:px-2 w-full">
                <div class="h-40 w-40 overflow-hidden sm:rounded-full sm:relative sm:p-0 top-10 left-5 p-3">
                    <img style="height: 160px;width: 160px" src="https://ui-avatars.com/api/?background=00a4bd&color=FFF&length=1&name={{$patient->full_name}}"/>
                </div>

                <div class="w-2/3 sm:text-center pl-5 mt-10 text-start">
                    <p class="font-poppins font-bold text-heading sm:text-4xl text-2xl">
                        {{$patient->full_name}}
                    </p>
                    <p class="text-heading">{{$patient->date_of_birth}}</p>
                </div>
            </div>

            <!-- main content -->
            <div class="p-5">

                <div class="flex flex-col sm:flex-row sm:mt-10">

                    <div class="flex flex-col sm:w-1/3">
                        <!-- My contact -->
                        <div class="py-3 sm:order-none order-3">
                            <h2 class="text-lg font-poppins font-bold text-top-color">Contact</h2>
                            <div class="border-2 w-20 border-top-color my-3"></div>

                            <div>
                                <div class="flex items-center my-2">
                                    <a class="w-6 text-gray-700 hover:text-orange-600">
                                        <svg class="h-5 w-5 text-blue-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="11" r="3" />  <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 0 1 -2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z" /></svg>
                                    </a>
                                    <div class="ml-2 truncate">{{$patient->address}}</div>
                                </div>
                                <div class="flex items-center my-2">
                                    <a class="w-6 text-gray-700 hover:text-orange-600"
                                       aria-label="Visit TrendyMinds YouTube" href="" target="_blank">
                                        <svg class="h-5 w-5 text-blue-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                        </svg>

                                    </a>
                                    <div>{{$patient->post_code}}</div>
                                </div>
                                <div class="flex items-center my-2">
                                    <a class="w-6 text-gray-700 hover:text-orange-600"
                                       aria-label="Visit TrendyMinds Facebook" href="" target="_blank">
                                        <svg class="h-5 w-5 text-blue-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />  <path d="M15 7a2 2 0 0 1 2 2" />  <path d="M15 3a6 6 0 0 1 6 6" /></svg>
                                    </a>
                                    <div>{{$patient->contact_number_one}}</div>
                                </div>
                                <div class="flex items-center my-2">
                                    <a class="w-6 text-gray-700 hover:text-orange-600"
                                       aria-label="Visit TrendyMinds Twitter" href="" target="_blank">
                                        <svg class="h-5 w-5 text-blue-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />  <path d="M15 7a2 2 0 0 1 2 2" />  <path d="M15 3a6 6 0 0 1 6 6" /></svg>
                                    </a>
                                    <div>{{$patient->contact_number_two}}</div>
                                </div>
                            </div>
                        </div>

                        <!-- About me -->
                        <div class="py-3 mr-2">
                            <h2 class="text-lg font-poppins font-bold text-top-color">Patients About</h2>
                            <div class="border-2 w-20 border-top-color my-3 "></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>

                    </div>

                    <div class="flex flex-col sm:w-2/3 order-first sm:order-none sm:-mt-10">

                        <div class="px-6 py-4">
                            <div class="flex gap-2">
                                @if($patient->nextOfKins->count()>0)
                                    <a href="{{route('sections',$patient->id_card)}}"
                                       data-modal-title="Next Of Kins"
                                       data-section="nextOfKins"
                                       class="inline-flex items-center gap-1 rounded-full bg-gray-50 px-2 py-1 text-xs font-semibold text-blue-600 ajaxEditForm">
                                        Next Of Kins +{{$patient->nextOfKins->count()}}
                                    </a>
                                @endif
                                @if($patient->conditions->count()>0)
                                    <a href="{{route('sections',$patient->id_card)}}"
                                       data-modal-title="Conditions"
                                       data-section="conditions"
                                       class="inline-flex items-center gap-1 rounded-full bg-gray-50 px-2 py-1 text-xs font-semibold text-blue-600 ajaxEditForm">
                                        Conditions +{{$patient->conditions->count()}}
                                    </a>
                                @endif
                                @if($patient->alergies->count()>0)
                                    <a href="{{route('sections',$patient->id_card)}}"
                                       data-modal-title="Alergies"
                                       data-section="alergies"
                                       class="inline-flex items-center gap-1 rounded-full bg-gray-50 px-2 py-1 text-xs font-semibold text-blue-600 ajaxEditForm">
                                        Alergies +{{$patient->alergies->count()}}
                                    </a>
                                @endif
                                @if($patient->medications->count()>0)
                                    <a href="{{route('sections',$patient->id_card)}}"
                                       data-modal-title="Medications"
                                       data-section="medications"
                                       class="inline-flex items-center gap-1 rounded-full bg-gray-50 px-2 py-1 text-xs font-semibold text-blue-600 ajaxEditForm">
                                        Medications +{{$patient->medications->count()}}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <!-- Professional Experience -->
                        <div class="py-3">
                            <h2 class="text-lg font-poppins font-bold text-top-color flex">Next Of Kins
                                <svg class="ml-4 h-6 w-6 text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </h2>

                            <div class="border-2 w-20 border-top-color my-3"></div>

                            <div class="flex flex-col">
                                <div class="flex flex-col">
                                    @include('frontend.patient.section.nextOfKins',['nextOfKins'=>$patient->nextOfKins])
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2">
                            <div class="py-3 p-2">
                                <h2 class="text-lg font-poppins font-bold text-top-color flex">Conditions
                                    <svg class="ml-4 h-6 w-6 text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </h2>
                                <div class="border-2 w-20 border-top-color my-3"></div>
                                <div class="flex flex-col">
                                    <div class="flex flex-col">
                                        @include('frontend.patient.section.conditions',['conditions'=>$patient->conditions])
                                    </div>
                                </div>

                            </div>
                            <div class="py-3">
                                <h2 class="text-lg font-poppins font-bold text-top-color flex">Alergies
                                    <svg class="ml-4 h-6 w-6 text-gray-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2" />  <line x1="12" y1="8" x2="12" y2="12" />  <line x1="12" y1="16" x2="12.01" y2="16" /></svg>
                                </h2>
                                <div class="border-2 w-20 border-top-color my-3"></div>
                                <div class="flex flex-col">
                                    <div class="flex flex-col">
                                        @include('frontend.patient.section.alergies',['alergies'=>$patient->alergies])
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="py-3">
                            <h2 class="text-lg font-poppins font-bold text-top-color flex">Medication
                                <svg class="ml-4 h-6 w-6 text-gray-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M16 4l3 3l-12.35 12.35a1.5 1.5 0 0 1 -3 -3l12.35 -12.35" />  <line x1="10" y1="10" x2="16" y2="10" />  <path d="M19 15l1.5 1.6a2 2 0 1 1 -3 0l1.5 -1.6" /></svg>
                            </h2>
                            <div class="border-2 w-20 border-top-color my-3"></div>
                            <div class="flex flex-col">
                                <div class="flex flex-col">
                                    @include('frontend.patient.section.medications',['medications'=>$patient->medications])
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection

@push('footer')
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'top-color': 'rgb(6 50 88)',
                        'heading': '#fcfbfc',
                    }
                }
            }
        }
    </script>
@endpush
