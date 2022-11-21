<section class="container mx-auto pt-5 justify-center z-0 w-full top-12">
    <div class="mx-auto w-full">
        <h1 class="text-3xl py-4 border-b mb-5 bg-pink-50 rounded-lg text-center w-full font-bold">TIK</h1>
    
        <div class="flex bg-pink-50 rounded-lg shadow relative w-full px-3 py-3 justify-center items-center3">

            @foreach ($kategoris as $kategori)

            <!-- Modal toggle -->
            {{-- <button
                class="flex text-whitefocus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-1 px-1 py-1 text-center h-96 w-auto"
                type="button" wire.click: data-modal-toggle="default-modal"> --}}
                <div
                    class="flex shadow rounded mr-1/2 ml-1/2 mb-2 hover:scale-150 transition duration-300 ease-in-out">
                    <a 
                    href="{{route('detail',$kategori->id)}}" class="elipsis"
                    >
                        
                    
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center rounded-lg" style="height: 200px"
                            src="{{ asset('storage/' . $kategori->gambar) }}"> 
                            {{-- src="kategori/kategori2.jpeg"> --}}
                    </div>
                    </a>
                    {{-- <div class="bg-blue-200 w-full rounded m-1">
                <span class="ml-2">Title: .....</span>
            </div> --}}
                </div>
                
            {{-- </button> --}}

            <!-- Main modal -->
            {{-- <div id="default-modal" data-modal-show="true" aria-hidden="true"
                class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="rounded-lg shadow relative">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-2 rounded-t">
                            <button type="button"
                                class="bg-transparent hover:bg-gray-200 rounded-lg text-sm p-1.5 ml-auto flex items-center dark:hover:text-white"
                                data-modal-toggle="default-modal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6">
                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                src="{{ asset('storage/' . $kategoris->gambar) }}">
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- </div> --}}

            <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
            @endforeach
        </div>

   
</div>

</section>
