<section class="container mx-auto pt-5 justify-center z-0 w-full top-12">

    <h1 class="mx-auto text-3xl py-4 border-b mb-5 bg-purple-200 rounded-lg text-center w-auto font-bold">DETAIL
        DOKUMEN</h1>

        <div class="flex rounded-lg shadow w-full px-3 py-3 text-center items-center justify-center">
            <div class="p-2 hover:bg-gray-200 rounded text-center items-center justify-center">
                <button type="button"
                    class="bg-transparent hover:bg-yellow-200 rounded-lg text-sm p-1.5 ml-auto flex items-center dark:hover:text-white"
                    data-modal-toggle="default-modal">
                    <a href="/galeri">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </button>
                <img alt="paket" class="block object-cover object-center w-auto h-100 rounded-lg text-center items-center justify-center"
                    src="{{ asset('storage/' . $galeris->gambar) }}" style="height: 700px">

            </div>

        </div>

</section>