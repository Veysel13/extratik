@extends('frontend.layout.default')
@push('header')


@endpush

@section('content')

    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
        <div class="my-2 flex sm:flex-row flex-col m-2 float-right">

            <div class="block relative">
                    <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                            <path
                                d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                            </path>
                        </svg>
                    </span>
                <input id="searchInput" placeholder="Search" class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
            </div>
        </div>
        <table id="patientsTable" class="w-full border-collapse bg-white text-left text-sm text-gray-500">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900 tracking-wider">Name</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Adress</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Contact</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Section</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            @foreach($patients as $patient)
                <tr class="hover:bg-gray-50">
                    <th class="flex gap-3 px-4 py-4 font-normal text-gray-900" data-popover-target="popover-patient-profile-{{$patient->id_card}}">
                        <div class="relative h-10 w-10">
                            <img
                                class="h-full w-full rounded-full object-cover object-center"
                                src="{{$patient->image}}"
                                alt=""/>

                        </div>
                        <div class="text-sm">
                            <div class="font-medium text-gray-700">{{$patient->full_name}}</div>
                            <div class="text-gray-400">{{$patient->gender}}</div>
                        </div>
                        @include('frontend.patient.section.patient',['patient'=>$patient])
                    </th>
                    <td class="px-4 py-4">
                        @if($patient->address)
                           <div class="flex">
                               <svg class="h-5 w-5 text-green-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="11" r="3" />  <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 0 1 -2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z" /></svg>

                               <span
                                   class="inline-flex ml-1 items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                             <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                             {{$patient->address}}
                             </span>
                           </div>
                        @endif
                    </td>
                    <td class="px-4 py-4">
                        <div class="flex">
                            <svg class="h-5 w-5 text-gray-500 mr-2"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />  <path d="M15 7a2 2 0 0 1 2 2" />  <path d="M15 3a6 6 0 0 1 6 6" /></svg>
                            {{$patient->contact_number_one}}
                        </div>

                    </td>
                    <td class="px-4 py-4">
                        <div class="grid grid-cols-2 gap-2">
                            @if($patient->nextOfKins->count()>0)
                                <a href="{{route('sections',$patient->id_card)}}"
                                   data-modal-title="Next Of Kins"
                                   data-section="nextOfKins"
                                   class="text-center inline-block items-center gap-1 rounded-full bg-gray-50 px-2 py-1 text-xs font-semibold text-blue-600 ajaxEditForm">
                                  Next Of Kins +{{$patient->nextOfKins->count()}}
                                </a>
                            @endif
                            @if($patient->conditions->count()>0)
                                <a href="{{route('sections',$patient->id_card)}}"
                                      data-modal-title="Conditions"
                                      data-section="conditions"
                                      class="text-center items-center gap-1 rounded-full bg-gray-50 px-2 py-1 text-xs font-semibold text-blue-600 ajaxEditForm">
                                  Conditions +{{$patient->conditions->count()}}
                                </a>
                            @endif
                            @if($patient->alergies->count()>0)
                                <a href="{{route('sections',$patient->id_card)}}"
                                      data-modal-title="Alergies"
                                      data-section="alergies"
                                      class="text-center inline-block items-center gap-1 rounded-full bg-gray-50 px-2 py-1 text-xs font-semibold text-blue-600 ajaxEditForm">
                                  Alergies +{{$patient->alergies->count()}}
                                </a>
                            @endif
                            @if($patient->medications->count()>0)
                                <a href="{{route('sections',$patient->id_card)}}"
                                      data-modal-title="Medications"
                                      data-section="medications"
                                      class="text-center inline-block items-center gap-1 rounded-full bg-gray-50 px-2 py-1 text-xs font-semibold text-blue-600 ajaxEditForm">
                                  Medications +{{$patient->medications->count()}}
                                </a>
                            @endif
                        </div>
                    </td>
                    <td class="px-4 py-4">
                        <div class="flex justify-end gap-4">
                            <a x-data="{ tooltip: 'Edite' }" href="{{route('patients.view',$patient->id_card)}}">
                                <svg class="h-5 w-5 text-blue-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />  <circle cx="12" cy="12" r="3" /></svg>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection

@push('footer')

@endpush
