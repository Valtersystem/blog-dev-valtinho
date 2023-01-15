<x-app-layout> 
    <div class="mx-auto max-w-5xl px-2 sm:px-6 lg:px-8 py-8 text-white">
        
        <h1 class=" uppercase text-center text-3xl font-bold mb-8">Categoria: {{$category->name}}</h1>

        @foreach ($posts as $post)
           <x-card-post :$post />
        @endforeach
            
        <div class="mt-4">
            {{$posts->links()}}
        </div>

    </div>
</x-app-layout>