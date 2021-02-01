<div class="w-screen h-screen">
    <div class="tinker flex h-full w-full">

        <div class="w-1/2 editor">
            <livewire:editor/>
        </div>

        <div class="w-1/2">
            <livewire:output/>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 w-screen bg-gray-400 z-10 px-5 flex space-x-3 font-mono text-sm">
        <div class="flex items-center cursor-pointer" wire:click="toggleAddProject">
            <x-icons.folder-open class="w-5 h-5" />
        </div>
        <div>
            @lang('Project'): {{ $this->project->name }} | @lang('Path'): {{ $this->project->path }}
        </div>
    </div>

    @if ($showAddProject)
        <div class="absolute top-1/2 -mt-48 left-0 w-full h-96 flex justify-center z-10">
            <div class="w-1/2 bg-white p-5">
                <livewire:select-folder />
            </div>
        </div>
    @endif
</div>
