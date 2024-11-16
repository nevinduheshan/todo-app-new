<x-layout>

    <section class="bg-gray-50 dark:bg-gray-900 py-3 sm:py-5">
        <div class="px-4 mx-auto max-w-screen-2xl lg:px-12">
            <h1>Tasks</h1>
            <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                <div
                    class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">

                    <div
                        class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
                        <a href="{{ Route('tasks.create') }}" type="button"
                            class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Create New Task
                        </a>
                    </div>

                    <form method="GET" action=" {{ Route('tasks.index') }}">
                        <select name="status" onchange="this.form.submit()">
                            <option value="">All</option>
                            <option value="Pending" {{ request('status') == 'Pending' ? 'selected' : '' }}>Pending
                            </option>
                            <option value ="In Progress" {{ request('status') == 'In progress' ? 'selected' : '' }}>In
                                Progress</option>
                            <option value="Completed" {{ request('status') == 'Completed' ? 'selected' : '' }}>Completed
                            </option>
                        </select>
                    </form>

                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>

                                <th scope="col" class="px-4 py-3">Title</th>
                                <th scope="col" class="px-4 py-3">Description</th>
                                <th scope="col" class="px-4 py-3">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">

                                    <th scope="row"
                                        class="flex items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $task->title }}
                                    </th>
                                    <td class="px-4 py-2">
                                        {{ $task->description }}
                                    </td>
                                    <td class="px-4 py-2">
                                        <span
                                            class="bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300">{{ $task->status }}</span>
                                    </td>

                                    <td class="py-5">
                                        <a href="{{ Route('tasks.edit', $task) }}"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                            Edit
                                        </a>
                                        <form id="delete-form-{{ $task->id }}"
                                            action="{{ route('tasks.destroy', $task) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="confirmDelete({{ $task->id }})"
                                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                Delete
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="mt-4 flex justify-between items-center p-4 space-y-3 md:flex-row md:items-center md:space-y-0">
                    <div>
                        <span class="text-gray-600 text-sm">
                            Showing {{ $tasks->firstItem() }} to {{ $tasks->lastItem() }} of {{ $tasks->total() }} tasks
                        </span>
                    </div>

                    <div>
                        {{ $tasks->links('pagination::simple-tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function confirmDelete(taskId) {
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this task!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    // Submit the form corresponding to the task
                    document.getElementById(`delete-form-${taskId}`).submit();
                }
            });
        }
    </script>

</x-layout>
