<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="w-screen h-screen bg-no-repeat bg-cover bg-right-top overflow-hidden flex items-center justify-center"
    style="background-image: url('{{ asset('img/bg-1.png') }}')">
    <div class="w-[35rem] h-fit bg-white rounded-md flex flex-col gap-8 py-12 px-8 bg-opacity-[0.85]">
        <div class="flex gap-5 justify-center items-center">
            <img class="w-16 h-20" src="{{ asset('img/lambang.jpeg') }}" alt="lambang">
            <h1 class="font-bold text-3xl">Klobur Smart <br />Village</h1>
        </div>
        <form action="{{ route('masuk') }}" role="form" method="POST">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="flex flex-col">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="17" viewBox="0 0 16 17" fill="currentColor">
                                <path
                                    d="M0 4.98438C0 4.45394 0.210714 3.94523 0.585786 3.57016C0.960859 3.19509 1.46957 2.98438 2 2.98438H14C14.5304 2.98438 15.0391 3.19509 15.4142 3.57016C15.7893 3.94523 16 4.45394 16 4.98438V12.9844C16 13.5148 15.7893 14.0235 15.4142 14.3986C15.0391 14.7737 14.5304 14.9844 14 14.9844H2C1.46957 14.9844 0.960859 14.7737 0.585786 14.3986C0.210714 14.0235 0 13.5148 0 12.9844V4.98438ZM2 3.98438C1.73478 3.98438 1.48043 4.08973 1.29289 4.27727C1.10536 4.4648 1 4.71916 1 4.98438V5.20138L8 9.40137L15 5.20138V4.98438C15 4.71916 14.8946 4.4648 14.7071 4.27727C14.5196 4.08973 14.2652 3.98438 14 3.98438H2ZM15 6.36737L10.292 9.19238L15 12.0894V6.36737ZM14.966 13.2434L9.326 9.77238L8 10.5674L6.674 9.77238L1.034 13.2424C1.09083 13.4552 1.21632 13.6433 1.39099 13.7774C1.56566 13.9116 1.77975 13.9843 2 13.9844H14C14.2201 13.9844 14.4341 13.9118 14.6088 13.7778C14.7834 13.6438 14.909 13.456 14.966 13.2434ZM1 12.0894L5.708 9.19238L1 6.36737V12.0894Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <input id="email" name="email" type="email"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full pl-10 p-2.5"
                            placeholder="Masukkan Email Anda">
                    </div>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="17" viewBox="0 0 16 17" fill="currentColor">
                                <path
                                    d="M11.3335 16.1509H4.66683C1.72683 16.1509 0.833496 15.2575 0.833496 12.3175V10.9842C0.833496 8.04421 1.72683 7.15088 4.66683 7.15088H11.3335C14.2735 7.15088 15.1668 8.04421 15.1668 10.9842V12.3175C15.1668 15.2575 14.2735 16.1509 11.3335 16.1509ZM4.66683 8.15088C2.28016 8.15088 1.8335 8.60421 1.8335 10.9842V12.3175C1.8335 14.6975 2.28016 15.1509 4.66683 15.1509H11.3335C13.7202 15.1509 14.1668 14.6975 14.1668 12.3175V10.9842C14.1668 8.60421 13.7202 8.15088 11.3335 8.15088H4.66683Z"
                                    fill="currentColor" />
                                <path
                                    d="M4 8.1512C3.72667 8.1512 3.5 7.92454 3.5 7.6512V6.31787C3.5 4.38454 3.96667 1.81787 8 1.81787C10.9867 1.81787 12.5 3.10454 12.5 5.6512C12.5 5.92454 12.2733 6.1512 12 6.1512C11.7267 6.1512 11.5 5.92454 11.5 5.6512C11.5 4.3312 11.1 2.81787 8 2.81787C5.09333 2.81787 4.5 4.21787 4.5 6.31787V7.6512C4.5 7.92454 4.27333 8.1512 4 8.1512Z"
                                    fill="currentColor" />
                                <path
                                    d="M8.00016 13.8177C6.80683 13.8177 5.8335 12.8444 5.8335 11.651C5.8335 10.4577 6.80683 9.48438 8.00016 9.48438C9.1935 9.48438 10.1668 10.4577 10.1668 11.651C10.1668 12.8444 9.1935 13.8177 8.00016 13.8177ZM8.00016 10.4844C7.36016 10.4844 6.8335 11.011 6.8335 11.651C6.8335 12.291 7.36016 12.8177 8.00016 12.8177C8.64016 12.8177 9.16683 12.291 9.16683 11.651C9.16683 11.011 8.64016 10.4844 8.00016 10.4844Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <input type="password" id="password" name="password"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full pl-10 p-2.5"
                            placeholder="Masukkan Password Anda">
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
            <button type="submit" style="background-color: #198754;" class="text-white bg-[#198754] hover:[#057a55] focus:ring-4 focus:outline-none focus:[#84e1bc] font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Masuk</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
