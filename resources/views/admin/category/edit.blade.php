<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="col-md-4">
                <div class="card p-3">
                    <form action="{{ url('/edit_category_confirm', $category->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <h3>Edit {{ $category->cat_name }}</h3>
                            <label for="cat_name">Category Name</label>
                            <input type="text" class="form-control" name="cat_name"
                                placeholder="Enter category name" value="{{$category->cat_name}}">
                        </div>
                        <div class="mb-3">
                            <label for="user_id">User ID</label>
                            <input type="number" class="form-control" name="user_id" placeholder="Enter User ID"
                                min="1" value="{{$category->user_id}}">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <a href="{{route('AllCat')}}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>