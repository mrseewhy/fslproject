<div class="mt-6">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    @if($allCaseFiles)
    @foreach ( $allCaseFiles as $case)
    {{-- <div class="p-4 bg-blue-50 border-2 border-gray-400 rounded-lg mb-4">
        <div class="grid grid-cols-1 sm:grid-cols-3 space-y-4 sm:space-x-4 sm:space-y-0">
            <div class="flex flex-col">
                <p class="mb-2 text-sm font-Lato"> Case Number: </p>
                <p class="font-bold font-Mont underline"><a wire:navigate href="{{ route('client.case-details', ['id' => $case->id]) }}">{{ $case->number }}</a></p>
            </div>
            <div class="flex flex-col">
                <p class="mb-2 text-sm font-Lato"> Case Title: </p>
                <p class="font-bold font-Mont">{{ $case->title }}</p>
            </div>
            <div class="flex flex-col">
                <p class="mb-2 text-sm font-Lato"> Summary of the Case: </p>
                <p class=" font-Lato">{!!  $case->summary !!}</p>
            </div>
        </div>

        <div class="flex flex-row justify-between items-end">
            <div>
                @if (isset($case->casefiledocuments) && !empty($case->casefiledocuments) && count($case->casefiledocuments) != 0)
                    <h3 class="mt-4 mb-1 font-semibold font-Mont text-sm">Attached Files <span class="bg-blue-700 text-white p-1 rounded-full text-xs font-light">{{ count($case->casefiledocuments) }}</span></h3>
                    <ul>
                        @foreach ($case->casefiledocuments as $file)
                            <li class="text-sm text-blue-700"><a target="_blank" title="{{ $file->document_name }}" href="{{ Storage::url($file->path) }}">{{ $file->document_name }}</a></li>
                        @endforeach
                    </ul>
                @else
                    <p class="mt-4 mb-1 font-semibold font-Mont text-sm">No Files</p>
                @endif
            </div>
            <div>
                <a wire:navigate href="{{ route('client.case-details', ['id' => $case->id]) }}">
                    <button class="bg-blue-800 text-white rounded-lg text-xs py-2 px-4">view details</button>
                </a>
            </div>
        </div>
        
    </div> --}}
    <div class="p-4 bg-blue-50 border-2 border-gray-400 rounded-lg shadow-md mb-4">
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
