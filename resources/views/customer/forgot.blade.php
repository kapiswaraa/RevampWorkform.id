<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <title>Forgot Password</title>

</head>

<body class="flex justify-center items-center h-screen" style="background-color: #F2F4F8;">
    <div class="block max-w-xl p-10 bg-white border border-gray-200 rounded-lg shadow  text-center">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
            Forgotten your password?</h5>
        <p class="font-normal text-gray-700 ">There is nothing to worry
            about, we'll send you a message to help you reset your password.</p>
        <form action="{{ route('customer.forgot') }}" method="POST">
            @csrf
            <div class="mt-7">
                <label for="email" class="block mb-2 text-sm font-medium text-start text-gray-900">Your email</label>
                <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@example.com" required>
                @if($errors->has('email'))
                <p class="text-sm text-red-600 mt-2">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <button type="submit" class="inline-block rounded bg-primary px-7 pb-2.5 pt-3 mt-7 text-sm font-medium uppercase leading-normal text-white bg-blue-700 hover:bg-blue-900 w-full" data-te-ripple-init data-te-ripple-color="light">
                Send Reset Link
            </button>
        </form>

    </div>
</body>

</html>