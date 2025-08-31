<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Notice</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-purple-400 via-pink-500 to-blue-600 min-h-screen p-4 flex items-center justify-center">
    <div class="container mx-auto max-w-2xl">
        <div class="card bg-gray-900 bg-opacity-60 shadow-2xl backdrop-blur-md p-8">
            <h1 class="text-3xl font-bold text-white mb-6">Create New Notice</h1>
            @if($errors->any())
                <div role="alert" class="alert alert-error mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>Please correct the errors below.</span>
                </div>
            @endif
            <form action="{{ route('notices.store') }}" method="POST">
                @csrf
                <div class="form-control mb-4">
                    <label for="title" class="label">
                        <span class="label-text text-white text-lg">Notice Title</span>
                    </label>
                    <input type="text" name="title" id="title" class="input input-bordered w-full bg-gray-800 text-white border-gray-700" value="{{ old('title') }}" />
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-control mb-4">
                    <label for="notice_date" class="label">
                        <span class="label-text text-white text-lg">Notice Date</span>
                    </label>
                    <input type="date" name="notice_date" id="notice_date" class="input input-bordered w-full bg-gray-800 text-white border-gray-700" value="{{ old('notice_date') }}" />
                    @error('notice_date')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-control mb-6">
                    <label for="description" class="label">
                        <span class="label-text text-white text-lg">Description</span>
                    </label>
                    <textarea name="description" id="description" class="textarea textarea-bordered h-48 w-full bg-gray-800 text-white border-gray-700" >{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-between">
                    <a href="{{ route('notices.index') }}" class="btn btn-ghost text-white">Cancel</a>
                    <button type="submit" class="btn btn-primary shadow-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
