{{-- <div>
    {{-- The best athlete wants his opponent at his best. 
    <form wire:submit='submitCaseFile' method="POST" enctype="multipart/form-data" >
        @csrf
    
        <h2 class="text-2xl font-bold mb-4">Create a New Case File</h2>
    
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
            <input wire:model='title' type="text" id="title" name="title" value="{{ old('title') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('title') border-red-500 @enderror">
            @error('title')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="summary" class="block text-gray-700 text-sm font-bold mb-2">Summary:</label>
            <textarea wire:model='summary' id="summary" name="summary" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('summary') border-red-500 @enderror">{{ old('summary') }}</textarea>
            @error('summary')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>
            @enderror
        </div>
    
        <div  class="mb-4">
            
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description: </label>
            <div wire:ignore >
                <textarea wire:model='description' id="description" name="description" class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
            </div>

            @error('description')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>
            @enderror
        </div>
       
    
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
    </form>
</div> --}}






{{-- <div>
    <form wire:submit.prevent="submitCaseFile" class="space-y-6">
        @if (session()->has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('message') }}
            </div>
        @endif

        <!-- Title Input -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" 
                   wire:model="title" 
                   id="title" 
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('title') 
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
         <!-- Summary Input -->
         <div>
            <label for="summary" class="block text-sm font-medium text-gray-700">Summary</label>
            <div wire:ignore>
                <textarea wire:model="summary" 
                      id="summary" 
                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                      x-data 
                      x-init=" $('#summary').summernote({
                            placeholder: 'Enter Summary',
                            tabsize: 2,
                            toolbar: [
                                ['style', ['style']],
                                ['font', ['bold', 'underline', 'clear']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['table', ['table']],
                                ['insert', ['link', 'picture', 'video']],
                                ['view', ['fullscreen', 'codeview', 'help']]
                            ],
                            
                            callbacks: {
                                    onChange: function(contents, $editable) {
                                        @this.set('summary', contents)
                                    }
                                }


                            }); "></textarea>
            </div>
                      @error('summary') 
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Description Input -->
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <div wire:ignore>
                <textarea wire:model="description" 
                          id="description" 
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                          x-data 
                          x-init=" $('#description').summernote({
                                placeholder: 'Please enter detailed description',
                                tabsize: 2,
                                height: 120,
                                toolbar: [
                                    ['style', ['style']],
                                    ['font', ['bold', 'underline', 'clear']],
                                    ['color', ['color']],
                                    ['para', ['ul', 'ol', 'paragraph']],
                                    ['table', ['table']],
                                    ['insert', ['link', 'picture', 'video']],
                                    ['view', ['fullscreen', 'codeview', 'help']]
                                ],
                                
                                callbacks: {
                                        onChange: function(contents, $editable) {
                                            @this.set('description', contents)
                                        }
                                    }


                                }); ">
                </textarea>
            </div>
            @error('description') 
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>


        <!-- File Uploads -->
        <div class="space-y-4" x-data="{ dragging: false }">
            @foreach($fileInputs as $index => $input)
                <div class="relative"
                     x-on:dragover.prevent="dragging = true"
                     x-on:dragleave.prevent="dragging = false"
                     x-on:drop.prevent="dragging = false">
                    
                    <div class="flex items-center space-x-4">
                        <div class="flex-1">
                            
                            <label 
                                class="relative block p-4 border-2 border-dashed rounded-lg cursor-pointer"
                                :class="{ 'border-gray-300 bg-gray-50': !dragging, 'border-blue-400 bg-blue-50': dragging }">
                                
                                <input type="file"
                                    wire:model="files.{{ $index }}"
                                    class="absolute inset-0 opacity-0 w-full h-full cursor-pointer"
                                    id="file-{{ $input['id'] }}">
                                
                                <div class="text-center">
                                    <span class="text-gray-600">
                                        Drop files here or click to upload
                                    </span>
                                    
                                    @if ($files && isset($files[$index]))
                                        <p class="mt-2 text-sm text-green-600">
                                            Selected: {{ $files[$index]->getClientOriginalName() }}
                                        </p>
                                    @endif
                                </div>
                            </label>
                            
                            @error('files.' . $index)
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        
                    </div>

                        @if (count($fileInputs) > 1)
                            <button type="button"
                                wire:click="removeFileInput({{ $index }})"
                                class="p-2 text-red-500 hover:text-red-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex space-x-4">
            <button type="button"
                wire:click="addFileInput"
                class="px-4 py-2 text-sm font-medium text-blue-600 bg-blue-100 rounded-md hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Add Another File
            </button>

            <button type="submit"
                class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Submit Case File
            </button>
        </div>
    </form>
</div> --}}

<div>
    <form wire:submit.prevent="submitCaseFile" class="space-y-6">
        @if (session()->has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('message') }}
            </div>
        @endif

        <!-- Title Input -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" 
                   wire:model="title" 
                   id="title" 
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('title') 
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Summary Input -->
        <div>
            <label for="summary" class="block text-sm font-medium text-gray-700">Summary</label>
            <div wire:ignore>
                <textarea wire:model="summary" 
                          id="summary" 
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                          x-data 
                          x-init="$('#summary').summernote({
                                placeholder: 'Enter Summary',
                                tabsize: 2,
                                toolbar: [
                                    ['style', ['style']],
                                    ['font', ['bold', 'underline', 'clear']],
                                    ['color', ['color']],
                                    ['para', ['ul', 'ol', 'paragraph']],
                                    ['table', ['table']],
                                    ['insert', ['link', 'picture', 'video']],
                                    ['view', ['fullscreen', 'codeview', 'help']]
                                ],
                                callbacks: {
                                    onChange: function(contents, $editable) {
                                        @this.set('summary', contents)
                                    }
                                }
                            });"></textarea>
            </div>
            @error('summary') 
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Description Input -->
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <div wire:ignore>
                <textarea wire:model="description" 
                          id="description" 
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                          x-data 
                          x-init="$('#description').summernote({
                                placeholder: 'Please enter detailed description',
                                tabsize: 2,
                                height: 120,
                                toolbar: [
                                    ['style', ['style']],
                                    ['font', ['bold', 'underline', 'clear']],
                                    ['color', ['color']],
                                    ['para', ['ul', 'ol', 'paragraph']],
                                    ['table', ['table']],
                                    ['insert', ['link', 'picture', 'video']],
                                    ['view', ['fullscreen', 'codeview', 'help']]
                                ],
                                callbacks: {
                                    onChange: function(contents, $editable) {
                                        @this.set('description', contents)
                                    }
                                }
                            });"></textarea>
            </div>
            @error('description') 
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- File Uploads -->
        <div class="space-y-4" x-data="{ dragging: false, canAddFile: @entangle('canAddFile') }">
            @foreach($fileInputs as $index => $input)
                <div class="relative"
                     x-on:dragover.prevent="dragging = true"
                     x-on:dragleave.prevent="dragging = false"
                     x-on:drop.prevent="dragging = false">

                    <div class="flex items-center space-x-4">
                        <!-- Document Name Input -->
                        <div class="flex-1">
                            <label for="document-name-{{ $index }}" class="block text-sm font-medium text-gray-700">Document Name</label>
                            <input type="text"
                                   wire:model="documentNames.{{ $index }}"
                                   id="document-name-{{ $index }}"
                                   placeholder="Enter document name"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            @error('documentNames.' . $index)
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- File Input -->
                        <div class="flex-1">
                            <label 
                                class="relative block p-4 border-2 border-dashed rounded-lg cursor-pointer"
                                :class="{ 'border-gray-300 bg-gray-50': !dragging, 'border-blue-400 bg-blue-50': dragging }">
                                <input type="file"
                                       wire:model="files.{{ $index }}"
                                       class="absolute inset-0 opacity-0 w-full h-full cursor-pointer"
                                       id="file-{{ $input['id'] }}">
                                <div class="text-center">
                                    <span class="text-gray-600">
                                        Drop files here or click to upload
                                    </span>
                                    @if ($files && isset($files[$index]))
                                        <p class="mt-2 text-sm text-green-600">
                                            Selected: {{ $files[$index]->getClientOriginalName() }}
                                        </p>
                                    @endif
                                </div>
                            </label>
                            @error('files.' . $index)
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Remove Button -->
                        @if (count($fileInputs) > 1)
                            <button type="button"
                                    wire:click="removeFileInput({{ $index }})"
                                    class="p-2 text-red-500 hover:text-red-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Action Buttons -->
        <div class="flex space-x-4">
            <button type="button"
                    wire:click="addFileInput"
                    :disabled="!canAddFile"
                    class="px-4 py-2 text-sm font-medium text-blue-600 bg-blue-100 rounded-md hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-500 disabled:opacity-50">
                Add Another File
            </button>

            <button type="submit"
                    class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Submit Case File
            </button>
        </div>
    </form>
</div>
