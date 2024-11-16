<x-layout>

    <div class="px-10">
        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
            <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Task Name:</dt>
                <dd class="text-lg font-semibold">{{ $task->title }}</dd>
            </div>
            <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Task Description:</dt>
                <dd class="text-lg font-semibold">{{ $task->description }}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Task Status:</dt>
                <dd class="text-lg font-semibold">{{ $task->status }}</dd>
            </div>
        </dl>
    </div>

</x-layout>
