
<x-app-layout>
    <x-slot name="header">
        <x-nav-links.agency></x-nav-links.agency>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-slate-200 border-b border-gray-200 ">




                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('valmaster.agency.store') }}">
                            @csrf

                            <!-- Name -->
                            {{--this section for client details--}}



                                  <div class="pt-6">
                                      <div class="grid grid-cols-4 gap-4 ">

                                          {{--job number--}}
                                          <div>
                                              <x-label for="job_number"
                                                       :value="__('JOB NUMBER')" />

                                              <x-input id="job_number"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="job_number"
                                                       :value="old('job_number')" required autofocus />
                                          </div>


                                          <!-- Select Branch -->
                                          <div>
                                              <x-label for="rent_sale"
                                                       :value="__('RENT/SALE')" />
                                              <select name="rent_sale"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="rent_sale">
                                                  <option value="SALE">Sale</option>
                                                  <option value="RENT">Rent</option>
                                              </select>
                                          </div>


                                            <!--WEB -->
                                          <div>
                                              <x-label for="web"
                                                       :value="__('WEB')" />

                                              <x-input id="web"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="web"
                                                       :value="old('web')" required autofocus />
                                          </div>

                                          <!-- AGENT IN CHARGE -->
                                          <div>
                                              <x-label for="agent_in_charge"
                                                       :value="__('AGENT IN CHARGE')" />

                                              <x-input id="agent_in_charge"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="agent_in_charge"
                                                       :value="old('agent_in_charge')" required autofocus />
                                          </div>


                                          <!-- Service Line -->
                                          <div>
                                              <x-label for="service_line"
                                                       :value="__('SERVICE LINE')" />
                                              <select name="service_line"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="service_line">
                                                  <option value="ESTATE AGENCY">Estate Agency</option>
                                                  <option value="VALUATION">Valuation</option>
                                                  <option value="PROPERTY MGT">Property MGT</option>
                                                  <option value="CONSULTANCY">Consultancy</option>
                                              </select>
                                          </div>


                                          <!-- DATE OF INSTRUCTION-->
                                          <div>
                                              <x-label for="date_of_instruction"
                                                       :value="__('DATE OF INSTRUCTION')" />

                                              <x-input id="date_of_instruction"
                                                       class="block mt-1 w-full"
                                                       type="date"
                                                       name="date_of_instruction"
                                                       :value="old('date_of_instruction')" required autofocus />
                                          </div>


                                          <!-- Client Name -->
                                          <div>
                                              <x-label for="client_name"
                                                       :value="__('CLIENT NAME')" />

                                              <x-input id="client_name"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="client_name"
                                                       :value="old('client_name')" required autofocus />
                                          </div>


                                          <!-- Client Contact Number -->
                                          <div>
                                              <x-label for="client_contact_number"
                                                       :value="__('CLIENT CONTACT NUMBER')" />

                                              <x-input id="client_contact_number"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="client_contact_number"
                                                       :value="old('client_contact_number')" required autofocus />
                                          </div>


                                          <!-- Email -->
                                          <div>
                                              <x-label for="email"
                                                       :value="__('EMAIL')" />

                                              <x-input id="email"
                                                       class="block mt-1 w-full"
                                                       type="email"
                                                       name="email"
                                                       :value="old('email')" required autofocus />
                                          </div>
                                      </div>
                                  </div>

                                {{-- Contact Person Details--}}

                                    <div class="pt-8">

                                      <div class="grid grid-cols-4 gap-4">

                                          {{-- Property Address--}}
                                              <div>
                                                  <x-label for="property_address"
                                                           :value="__('PROPERTY ADDRESS')" />

                                                  <x-input id="property_address"
                                                           class="block mt-1 w-full"
                                                           type="text"
                                                           name="property_address"
                                                           :value="old('property_address')" required autofocus />
                                              </div>

                                          {{-- Property Address--}}
                                          <div>
                                              <x-label for="google_cordinates"
                                                       :value="__('GOOGLE CORDINATES')" />

                                              <x-input id="google_cordinates"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="google_cordinates"
                                                       :value="old('google_cordinates')" required autofocus />
                                          </div>


                                          <!-- TYPE OF PROPERTY -->
                                          <div>
                                              <x-label for="type_of_property"
                                                       :value="__('TYPE OF PROPERTY')" />
                                              <select id="type_of_property"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="type_of_property">
                                                  <option value="Residential">Residential</option>
                                                  <option value="Commercial">Commercial</option>
                                                  <option value="Industrial">Industrial</option>
                                                  <option value="Bare Land">Bare Land</option>
                                              </select>
                                          </div>

                                          <!-- TYPE OF BUILDING -->
                                          <div>
                                              <x-label for="type_of_building"
                                                       :value="__('TYPE OF BUILDING')" />
                                              <select id="type_of_building"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="type_of_building">
                                                  <option value="HOUSE">HOUSE</option>
                                                  <option value="APARTMENT">APARTMENT</option>
                                                  <option value="FLATS">FLATS</option>
                                                  <option value="OFFICES">OFFICES</option>
                                                  <option value="RETAIL">RETAIL</option>
                                                  <option value="SHOWROOM">SHOWROOM</option>
                                                  <option value="WAREHOUSE">WAREHOUSE</option>
                                                  <option value="FACTORY">FACTORY</option>
                                              </select>

                                          </div>

                                               <!-- TYPE OF BUILDING 2 -->
                                          <div>
                                              <x-label for="type_of_building_2"
                                                       :value="__('TYPE OF BUILDING 2')" />
                                              <select id="type_of_building_2"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="type_of_building_2">
                                                  <option value="STAND ALONE">STAND ALONE</option>
                                                  <option value="COMPLEX">COMPLEX</option>
                                                  <option value="FLATS">FLATS</option>
                                              </select>


                                          </div>


                                          <!-- BUILDING HEIGHT -->
                                          <div>
                                              <x-label for="building_height"
                                                       :value="__('BUILDING HEIGHT')" />
                                              <select id="building_height"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="building_height">
                                                  <option value="SINGLE STORY">SINGLE STORY</option>
                                                  <option value="DOUBLE STORY">DOUBLE STORY</option>
                                                  <option value="GROUND FLOOR">GROUND FLOOR</option>
                                                  <option value="UPPER FLOOR">UPPER FLOOR</option>
                                              </select>
                                          </div>

                                          {{-- NUMBER OF BEDROOMS--}}
                                          <div>
                                              <x-label for="number_of_bedrooms"
                                                       :value="__('NUMBER OF BEDROOMS')" />

                                              <x-input id="number_of_bedrooms"
                                                       class="block mt-1 w-full"
                                                       type="number"
                                                       name="number_of_bedrooms"
                                                       :value="old('number_of_bedrooms')" required autofocus />
                                          </div>

                                          <!-- SIZE OF ROOMS -->
                                          <div>
                                              <x-label for="size_of_rooms"
                                                       :value="__('SIZE OF ROOMS')" />
                                              <select id="size_of_rooms"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="size_of_rooms">
                                                  <option value="BIG">BIG</option>
                                                  <option value="MEDIUM">MEDIUM</option>
                                                  <option value="SMALL">SMALL</option>
                                              </select>
                                          </div>

                                      </div>
                                    </div>


                                <div class="pt-8">

                                    <div class="grid grid-cols-4 gap-4">

                                        {{-- NUMBER OF BATHROOMS--}}
                                        <div>
                                            <x-label for="number_of_bathrooms"
                                                     :value="__('NUMBER OF BATHROOMS')" />

                                            <x-input id="number_of_bathrooms"
                                                     class="block mt-1 w-full"
                                                     type="number"
                                                     name="number_of_bathrooms"
                                                     :value="old('number_of_bathrooms')" required autofocus />
                                        </div>


                                        {{-- MASTER SELF CONTAINED--}}
                                        <div>
                                            <x-label for="master_self_contained"
                                                     :value="__('MASTER SELF CONTAINED')" />

                                            <x-input id="master_self_contained"
                                                     class="block mt-1 w-full"
                                                     type="text"
                                                     name="master_self_contained"
                                                     :value="old('master_self_contained')" required autofocus />
                                        </div>


                                        <!-- FURNISHED -->
                                        <div>
                                            <x-label for="furnished"
                                                     :value="__('FURNISHED')" />
                                            <select id="furnished"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="furnished">
                                                <option value="FURNISHED">FURNISHED</option>
                                                <option value="UNFURNISHED">UNFURNISHED</option>
                                            </select>
                                        </div>

                                         <!-- QUALITY OF FINISHES -->
                                        <div>
                                            <x-label for="quality_of_finishes"
                                                     :value="__('QUALITY OF FINISHES')" />
                                            <select id="quality_of_finishes"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="quality_of_finishes">
                                                <option value="ULTRA MODERN">ULTRA MODERN</option>
                                                <option value="MODERN">MODERN</option>
                                                <option value="MODERATE">MODERATE</option>
                                                <option value="OLD">OLD</option>

                                            </select>
                                        </div>


                                        {{-- LAND SIZE--}}
                                        <div>
                                            <x-label for="land_size"
                                                     :value="__('LAND SIZE')" />

                                            <x-input id="land_size"
                                                     class="block mt-1 w-full"
                                                     type="number"
                                                     name="land_size"
                                                     :value="old('land_size')" required autofocus />
                                        </div>


                                        <!-- ADDITIONAL BUILDINGS -->
                                        <div>
                                            <x-label for="additional_buildings"
                                                     :value="__('ADDITIONAL BUILDINGS')" />
                                            <select id="additional_buildings"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="additional_buildings">
                                                <option value="GUEST HOUSE">GUEST HOUSE</option>
                                                <option value="WORKERS">WORKERS</option>
                                                <option value="QUARTERS">QUARTERS</option>
                                                <option value="GARAGE">GARAGE</option>
                                            </select>
                                        </div>

                                        <!-- SWIMMING POOL -->
                                        <div>
                                            <x-label for="SWIMMING POOL"
                                                     :value="__('ADDITIONAL BUILDINGS')" />
                                            <select id="swimming_pool"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="swimming_pool">
                                                <option value="POOL">POOL</option>
                                                <option value="NO POOL">NO POOL</option>
                                            </select>
                                        </div>


                                        <!-- LAYOUT OF OFFICE SPACE -->
                                        <div>
                                            <x-label for="layout_of_office_space"
                                                     :value="__('LAYOUT OF OFFICE SPACE')" />
                                            <select id="layout_of_office_space"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="layout_of_office_space">
                                                <option value="PARTIONED">PARTIONED</option>
                                                <option value="OPEN SPACE">OPEN SPACE</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>



{{--this is a date and Time Section        --}}

                                <div class="pt-6">
                                    <div class="grid grid-cols-5 gap-4">

                                        <!-- PARKING -->
                                        <div>
                                            <x-label for="parking"
                                                     :value="__('PARKING')" />
                                            <select id="parking"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="parking">
                                                <option value="PLENTY">PLENTY</option>
                                                <option value="MODERATE">MODERATE</option>
                                                <option value="LITTLE">LITTLE</option>
                                                <option value="NO PARKING">NO PARKING</option>
                                            </select>
                                        </div>

                                         <!-- PETS -->
                                        <div>
                                            <x-label for="pets"
                                                     :value="__('PETS')" />
                                            <select id="pets"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="pets">
                                                <option value="PET FRIENDLY">PET FRIENDLY</option>
                                                <option value="NO PET">NO PET</option>
                                            </select>
                                        </div>

                                        <!-- ELECTRICITY / WATER -->
                                        <div>
                                            <x-label for="electricity"
                                                     :value="__('ELECTRICITY')" />
                                            <select id="electricity"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="electricity">
                                                <option value="BACKUP POWER">BACKUP POWER</option>
                                                <option value="NO BACKUP POWER">NO BACKUP POWER</option>
                                            </select>

                                            <x-label for="water"
                                                     :value="__('WATER')" />
                                            <select id="water"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="water">
                                                <option value="BOREHOLE">BOREHOLE</option>
                                                <option value="COUNCIL WATER">COUNCIL WATER</option>
                                                <option value="WELL">WELL</option>
                                                <option value="COMMUNAL WATER">COMMUNAL WATER</option>
                                                <option value="NO WATER">NO WATER</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="pt-6">
                                    <div class="grid grid-cols-3 gap-4">

                                        <!-- surrounding and facilities -->
                                        <div>
                                            <x-label for="surroundings"
                                                     :value="__('SURROUNDINGS')" />
                                            <select id="surroundings"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="surroundings">
                                                <option value="GARDENS">GARDENS</option>
                                                <option value="PRIVATE BACKYARD">PRIVATE BACKYARD</option>
                                                <option value="NO BACKYARD">NO BACKYARD</option>
                                            </select>

                                            <!-- surrounding facilities 1-->
                                            <x-label for="surroundings_facilities_1"
                                                     :value="__('SURROUNDING FACILITIES 1')" />
                                            <select id="surroundings_facilities_1"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="surroundings_facilities_1">
                                                <option value="NEARBY SOCIAL AMENITIES">NEARBY SOCIAL AMENITIES</option>
                                                <option value="NO NEARBY SOCIAL AMENITIES">NO NEARBY SOCIAL AMENITIES</option>
                                            </select>

                                            <!-- surrounding facilities 2-->
                                            <x-label for="surroundings_facilities_2"
                                                     :value="__('SURROUNDING FACILITIES 2')" />
                                            <select id="surroundings_facilities_2"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="surroundings_facilities_2">
                                                <option value="SHOPPING MALL">SHOPPING MALL</option>
                                                <option value="SHOPPING CENTRE">SHOPPING CENTRE</option>
                                                <option value="STAND ALONE SHOP">STAND ALONE SHOP</option>
                                            </select>

                                            <!-- surrounding facilities 3-->
                                            <x-label for="surroundings_facilities_3"
                                                     :value="__('SURROUNDING FACILITIES 3')" />
                                            <select id="surroundings_facilities_3"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="surroundings_facilities_3">
                                                <option value="SCHOOL">SCHOOL</option>
                                                <option value="NO SCHOOL">NO SCHOOL</option>
                                            </select>

                                            <!-- surrounding facilities 4 -->
                                            <x-label for="surroundings_facilities_4"
                                                     :value="__('SURROUNDING FACILITIES 4')" />
                                            <select id="surroundings_facilities_4"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="surroundings_facilities_4">
                                                <option value="OFFICE BUILDINGS">OFFICE BUILDINGS</option>
                                                <option value="NO OFFICE BUILDINGS">NO OFFICE BUILDINGS</option>
                                            </select>

                                            <!-- surrounding facilities 5-->
                                            <x-label for="surroundings_facilities_5"
                                                     :value="__('SURROUNDING FACILITIES 5')" />
                                            <select id="surroundings_facilities_5"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="surroundings_facilities_5">
                                                <option value="BUS STATION">BUS STATION</option>
                                                <option value="NO BUS STATION">NO BUS STATION</option>
                                                <option value="TAXI RANK">TAXI RANK</option>
                                                <option value="NO TAXI RANK">NO TAXI RANK</option>
                                            </select>
                                        </div>

                                        <div>
                                            {{-- RENT PRICE / SALE PRICE MARKET VALUE--}}
                                            <div>
                                                <x-label for="rent_price_k"
                                                         :value="__('RENT PRICE (K)')" />

                                                <x-input id="rent_price_k"
                                                         class="block mt-1 w-full"
                                                         type="number"
                                                         name="rent_price_k"
                                                         :value="old('rent_price_k')" required autofocus />

                                                <x-label for="sale_price_market_value_k"
                                                         :value="__('SALE PRICE MARKET VALUE (K)')" />

                                                <x-input id="sale_price_market_value_k"
                                                         class="block mt-1 w-full"
                                                         type="number"
                                                         name="sale_price_market_value_k"
                                                         :value="old('sale_price_market_value_k')" required autofocus />
                                            </div>

                                        </div>


                                        <div>
                                            {{-- RENT PRICE / SALE PRICE MARKET VALUE--}}
                                            <div>
                                                <x-label for="rent_price_usd"
                                                         :value="__('RENT PRICE ($)')" />

                                                <x-input id="rent_price_usd"
                                                         class="block mt-1 w-full"
                                                         type="number"
                                                         name="rent_price_usd"
                                                         :value="old('rent_price_usd')" required autofocus />

                                                <x-label for="sale_price_market_value_usd"
                                                         :value="__('SALE PRICE MARKET VALUE ($)')" />

                                                <x-input id="sale_price_market_value_usd"
                                                         class="block mt-1 w-full"
                                                         type="number"
                                                         name="sale_price_market_value_usd"
                                                         :value="old('sale_price_market_value_usd')" required autofocus />
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <!-- Add Button-->
                                <div class="flex items-center justify-end mt-4">

                                    <x-button class="cursor-pointer ml-4">
                                        {{ __('ADD') }}
                                    </x-button>
                                </div>
                            </form>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>