<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">タスク一覧</h1>
        <table class="w-full border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2">タイトル</th>
                    <th class="p-2">ステータス</th>
                    <th class="p-2">期限</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($tasks as $task)
                    <tr class="border-t">
                        <td class="p-2">{{ $task->title }}</td>
                        <td class="p-2">{{ $task->status }}</td>
                        <td class="p-2">{{ $task->due_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>