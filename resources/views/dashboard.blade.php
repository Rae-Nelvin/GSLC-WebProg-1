@extends('layouts.guest')

@section('content')

    <div class="pt-7 px-20">
        <h1 class="text-4xl text-[#132B50]">User Lists</h1>
        <table class="mt-10 border-[#132B50] border table-auto w-full p-4">
            <thead class="border-b border-[#132B50] p-4">
                <tr>
                    <th class="p-4 text-2xl text-[#132B50]">Full Name</th>
                    <th class="text-2xl text-[#132B50]">Email</th>
                    <th class="text-2xl text-[#132B50]">Occupation</th>
                    <th class="text-2xl text-[#132B50]">Created At</th>
                </tr>
            </thead>
            <tbody class="p-4">
                @foreach ($users as $user)
                <tr>
                    <td class="p-4">{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->occupation }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection