<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <title>Login</title>

</head>

<body>
    <section class="max-w-screen-lg h-screen mx-auto">
        <div class="h-60">
            <!-- Left column container with background-->
            <div class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-between">
                <div class="shrink-1 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-6/12">
                    <img src="/asset/login.svg" class="w-full" alt="Sample image" />
                </div>

                <!-- Right column container -->
                <div class="mb-12 md:mb-0 md:w-8/12 lg:w-5/12 xl:w-5/12">
                    <form action="{{ route('customer.login') }}" method="POST">
                        @csrf
                        <form>
                            <h1 class="text-3xl font-bold mb-20">Log In</h1>

                            <div class="relative mb-6" data-te-input-wrapper-init>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your
                                    email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@example.com" required>

                            </div>

                            <!-- Password input -->
                            <div class="relative mb-6" data-te-input-wrapper-init>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your
                                    password</label>
                                <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>

                            </div>

                            <div class="mb-6 flex items-center justify-between">
                                <!-- Remember me checkbox -->
                                <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                                    <input class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent " type="checkbox" value id="exampleCheck2" />
                                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="exampleCheck2">
                                        Remember me
                                    </label>
                                </div>

                                <!--Forgot password link-->
                                <a href="{{ route('customer.forgot')}}" class="text-blue-700">Forgot
                                    password?</a>
                            </div>

                            <!-- Login button -->
                            <div class="text-center lg:text-left">
                                <button type="submit" class="inline-block rounded bg-primary px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-white bg-blue-700 hover:bg-blue-900 w-full" data-te-ripple-init data-te-ripple-color="light">
                                    Login
                                </button>
                                @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                                @endif

                                <!-- Register link -->
                                <p class="mb-0 mt-2 pt-1 text-sm font-semibold">
                                    Don't have an account?
                                    <a href="{{route('customer.register')}}" class="text-danger transition duration-150 ease-in-out hover:text-danger-600 focus:text-danger-600 active:text-danger-700">Register</a>
                                </p>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>