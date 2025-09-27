<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Simple Grid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
{{-- 简单筛选 --}}
{{--<form method="GET" class="mb-3 d-flex" style="gap:10px;">--}}
{{--    <input type="text" name="id" class="form-control w-auto" placeholder="按ID搜索" value="{{ request('id') }}">--}}
{{--    <button class="btn btn-primary">搜索</button>--}}
{{--    <a href="{{ url('/simple-grid') }}" class="btn btn-secondary">重置</a>--}}
{{--</form>--}}

{{-- 表格 --}}
<table class="table table-bordered table-hover">
    <thead class="table-light">
    <tr>
        <th>ID</th>
        <th>姓名</th>
        <th>邮箱</th>
        <th>手机</th>
        <th>诉求</th>
        <th>创建时间</th>
        <th>更新时间</th>
    </tr>
    </thead>
    <tbody>
    @forelse($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->demand }}</td>
            <td>{{ $customer->created_at }}</td>
            <td>{{ $customer->updated_at }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="6" class="text-center">暂无数据</td>
        </tr>
    @endforelse
    </tbody>
</table>

{{-- 分页 --}}
<div>
    {{ $customers->withQueryString()->links() }}
</div>
</body>
</html>
