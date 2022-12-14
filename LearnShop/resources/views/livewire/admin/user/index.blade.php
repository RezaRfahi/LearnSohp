<div>
    <x-slot name="title">
        <h1 class="m-0 text-dark">مدیریت کاربران</h1>
    </x-slot>
    <div class="container">
        <div class="col-sm-12 mb-2">
            <button wire:click="addUserRedirect" class="btn btn-info " target="__blank">افزودن کاربر</button>
        </div>
        <hr>
        <x-input-text  wire:model.debounce.500ms="search" name="search" value="{{old('search')}}"
                       class="w-1/2 mb-2" placeholder="جستجو..."/>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">نام</th>
                <th scope="col">ایمیل</th>
                <th scope="col">شماره تلفن</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr>
                    <td>
                        <div class="image">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" />
                        </div>
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>
                        <button wire:click="showUser({{$user}})" class="btn-outline-success m-3">ویرایش</button>
                        <button wire:click="deleteUser({{$user->id}})" class="btn-outline-danger m-3">حذف</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td> هیچ موردی یافت نشد</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        <div class="d-flex">
            {!! $users->links() !!}
        </div>
    </div>
</div>
