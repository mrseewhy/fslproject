<div>
    {{-- Success is as dangerous as failure. --}}
    Contract terms and conditions goes here
    <form wire:submit.prevent="agreementSigned" >
        <h2 class="text-lg font-bold mb-4">Contract Agreement</h2>
    
        <div class="flex items-center mb-4">
            <span class="relative inline-block w-6 mr-8 align-middle select-none">
                <input 
                    wire:model='signed'
                    name="signed"
                    type="checkbox" 
                    class="absolute block w-2 h-2 p-4 appearance-none bg-white border border-gray-300 rounded focus:outline-none focus:ring-indigo-500 checked:bg-indigo-500"
                    aria-label="I agree to this contract terms and conditions">
            
                <span class="block w-4 h-4 bg-white border border-gray-300 rounded shadow-inner"></span>
            </span>
            
            <label class="text-sm text-gray-900 font-semibold">
                I agree to this contract terms and conditions for the case <span class="text-blue-800 font-bold">{{ $case->title }} </span>with number <span class="text-blue-800 font-bold">{{ $case->number }}</span>

                
            </label>
            
            @error('signed')
                <div class="text-red-500 text-xs">{{ $message }}</div>
            @enderror
        </div>
    
        <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded mt-4">
            Submit
        </button>
    </form>
</div>
