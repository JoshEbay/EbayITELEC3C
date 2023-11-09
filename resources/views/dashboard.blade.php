<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Created At</th>
    </tr>
  </thead>
  
  <tbody>

    @foreach ($users as $user)
    <tr>
      <th scope="row">1</th>

      <td>{{$user->name}}

      </td>
      <td>{{$user->email}}</td>
      <td>{{$user->created_at}}</td>
    </tr>

    @endforeach
  </tbody>
</table>
            </div>
        </div>
    </div>
</x-app-layout>
