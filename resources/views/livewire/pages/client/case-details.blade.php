<div class="space-y-4">
    
    {{-- <button wire:click.prevent="goBack">Go Back</button> --}}
    <div class="mb-12 mt-4" x-data>
        <a class="bg-blue-800 text-white rounded-lg px-4 py-2 text-sm" 
           x-on:click="window.history.back()" 
           href="javascript:void(0)">Go Back</a>
    </div>
    
    {{-- The best athlete wants his opponent at his best. --}}
    {{-- {{ $case }} --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 space-y-4 sm:space-y-0 sm:space-x-4">
    <div>
        <p class="font-bold font-Mont text-sm"> Case Number</p>
        <p class="font-lg font-lato text-blue-900 font-semibold">{{ $case->number }}</p>
    </div>
    <div>
        <p class="font-bold font-Mont text-sm"> Case Title</p>
        <p class="font-lg font-lato text-blue-900 font-semibold">{{ $case->title }}</p>
    </div>
</div>
    <div>
        <p class="font-bold font-Mont text-sm"> Summary of Case</p>
        <p class="font-lg font-lato text-blue-900 font-semibold">{!!  $case->summary !!}</p>
    </div>
    <div>
        <p class="font-bold font-Mont text-sm"> Details of Case</p>
        <p class="font-lg font-lato text-blue-900 font-semibold">{!!  $case->description !!}</p>
    </div>
   
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
</div>
