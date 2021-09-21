<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <br/>
        
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/create" method="post">
                        @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter title">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>

                        <textarea class="form-control" placeholder="Text(optional)" id="task-textare" name="description" rows="7"></textarea>
                      </div>
                      <button type="submit" class="btn btn-secondary">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
    <script>
        ClassicEditor
            .create( document.querySelector( '#task-textarea' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>    
    @endsection
</x-app-layout>
