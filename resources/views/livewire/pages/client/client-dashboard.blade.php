<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="w-full ">
        <!-- Cards container -->
        <div class="flex flex-wrap  w-full">
          <!-- Card 1 -->
          <div class="bg-blue-950 text-white rounded-lg shadow-lg p-4 w-full sm:w-1/2 md:w-1/3 xl:w-1/4 mb-4 mx-4 border-2 border-blue-300">
            <div class="flex flex-col items-center mb-4">
              <h3 class="text-lg font-bold text-gray-100 font-Lato">All Cases</h3>
              <h2 class="font-Mont mt-2 text-3xl font-bold text-blue-900 p-5 rounded-full bg-blue-200 w-20 h-20 flex items-center justify-center">
                {{ Auth::user()->caseFiles->count() }}
              </h2>            
            </div>
            <p class="text-gray-100 text-sm font-Lato text-center">number of cases you have submitted</p>
            <p class="text-center mt-6 text-sm "> <a wire:navigate href="/client/all-case-files" class="bg-blue-200 border-2 border-blue-100 rounded-lg text-black px-4 py-2"> View All Cases</a> </p>
          </div>
          
          <!-- Card 2 -->
          {{-- <div class="bg-white rounded-lg shadow-md p-4 w-full sm:w-1/2 md:w-1/3 xl:w-1/4 mb-4 mx-4">
            <div class="flex flex-col items-center mb-4">
              <h3 class="text-lg font-bold text-gray-600">Total Revenue</h3>
              <h2 class="text-3xl font-bold text-gray-900">$2,456</h2>
            </div>
            <p class="text-gray-600">This is the content of card 2.</p>
          </div> --}}
          
          <!-- Card 3 -->
          {{-- <div class="bg-white rounded-lg shadow-md p-4 w-full sm:w-1/2 md:w-1/3 xl:w-1/4 mb-4 mx-4">
            <div class="flex flex-col items-center mb-4">
              <h3 class="text-lg font-bold text-gray-600">Conversion Rate</h3>
              <h2 class="text-3xl font-bold text-gray-900">56%</h2>
            </div>
            <p class="text-gray-600">This is the content of card 3.</p>
          </div> --}}
        </div>
      </div>

      <div class="px-5 mt-12">
        <h3 class="text-3xl font-Mont font-bold mb-4"> Latest Cases </h3>
        @if($allcases)
        @foreach ( $allcases as $case)
        <div class="p-4 bg-blue-50 border-2 border-gray-400 rounded-lg shadow-md mb-4 ">
            <!-- Case details -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
              <div class="flex flex-col">
                <p class="text-sm font-Lato mb-1 text-gray-600">Case Number:</p>
                <p class="font-bold font-Mont underline text-blue-800">
                  <a wire:navigate href="{{ route('client.case-details', ['id' => $case->id]) }}">{{ $case->number }}</a>
                </p>
              </div>
              <div class="flex flex-col">
                <p class="text-sm font-Lato mb-1 text-gray-600">Case Title:</p>
                <p class="font-bold font-Mont text-gray-900">{{ $case->title }}</p>
              </div>
              <div class="flex flex-col">
                <p class="text-sm font-Lato mb-1 text-gray-600">Summary of the Case:</p>
                <p class="font-Lato text-gray-800">{!! $case->summary !!}</p>
              </div>
            </div>
          
            <!-- Attached files and view details -->
            <div class="flex flex-row justify-between items-end mt-4">
              <div>
                @if($case->casefiledocuments->count() > 0)
                  <h3 class="font-semibold font-Mont text-sm text-blue-800">
                    Attached Files
                    <span class="bg-blue-700 text-white p-1 rounded-full text-xs font-light">{{ $case->casefiledocuments->count() }}</span>
                  </h3>
                  <ul>
                    @foreach($case->casefiledocuments as $file)
                      <li class="text-sm text-blue-800 mb-1">
                        <a target="_blank" title="{{ $file->document_name }}" href="{{ Storage::url($file->path) }}">{{ $file->document_name }}</a>
                      </li>
                    @endforeach
                  </ul>
                @else
                  <p class="font-semibold font-Mont text-sm text-gray-600">No Files</p>
                @endif
              </div>
              <div>
                <a wire:navigate href="{{ route('client.case-details', ['id' => $case->id]) }}">
                  <button class="bg-blue-800 text-white rounded-lg text-xs py-2 px-4 hover:bg-blue-900 transition duration-300 ease-in-out">View Details</button>
                </a>
              </div>
            </div>
          </div>
        @endforeach
        @else
          <p>No Case Files</p>
        @endif
      </div>

     
</div>
