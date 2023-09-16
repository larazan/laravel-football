<div>
    <div> {{ $role->name }} </div>
    <div class="w-full m-2 flex flex-wrap ">
        @if ($role->permissions)
            @foreach ($role->permissions as $role_permission)
                <div 
                    wire:click="detachPermission({{ $role_permission->id }})" 
                    class="flex mr-2 mt-2 rounded px-2 py-1 text-white text-xs bg-gray-800 hover:bg-red-500 cursor-pointer"
                >{{ $role_permission->name }}</div>
            @endforeach
        @endif
        <div class="flex mr-2 mt-2 rounded px-2 py-1 text-white text-xs bg-gray-800 hover:bg-red-500 cursor-pointer">edit-something</div>
    </div>
    <input wire:model="queryPermission" type="text" class="rounded w-full" placeholder="Search Permission">
    @if (!empty($queryPermission))
        <div class="w-full">
            @if (!empty($permissions))
                @foreach ($permissions as $permission)
                    <div 
                        wire:click="addPermission({{ $permission->name }})"
                        class="w-full p-2 m-2 bg-green-300 hover:bg-green-400 cursor-pointer"
                    >
                        {{ $permission->name }}</div>
                @endforeach
            @endif
        </div>
    @endif
</div>
