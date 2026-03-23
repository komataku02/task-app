<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <div class=flex justify-between items-center mb-4>
            <h1 class="text-2xl font-bold mb-4">タスク一覧</h1>
            <a href="{{ route('tasks.create') }}" class="px-4 py-2 bg-blue-600 text-blue-700 rounded hover:bg:blue-700">
                タスク作成
            </a>
        </div>

        @if (session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif
        <table class="w-full border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2">タイトル</th>
                    <th class="p-2">ステータス</th>
                    <th class="p-2">期限</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($tasks as $task)
                    <tr class="border-t">
                        <td class="p-2">{{ $task->title }}</td>
                        <td class="p-2">{{ $task->status ?? '-' }}</td>
                        <td class="p-2">{{ $task->due_date ?? '-'}}</td>
                    </tr>
                @empty
                <tr class="border-t">
                    <td colspan="3" class="p-4 text-center text-gray-500">
                        タスクはまだありません
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>