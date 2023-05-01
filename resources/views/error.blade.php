<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-blue-900">

<div class="grid h-screen place-items-center">
    <img src="{{url('/')}}/img/left-arrow.svg" class="absolute w-12 h-12 rounded-full bg-neutral-900 cursor-pointer object-cover p-2.5 left-0 top-1/2 translate-x-1/2"
    id="arrowL">
    <div class="flex p-0.5 overflow-hidden" style="width: 600px; height: 150px;" id="slider">
        <img class="relative shrink-0 w-80 h-40 rounded-lg shadow-xl bg-white" src="https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=320&amp;h=160&amp;q=80" style="margin: 3px;">
        <img class="relative shrink-0 w-80 h-40 rounded-lg shadow-xl bg-white" src="https://images.unsplash.com/photo-1540206351-d6465b3ac5c1?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=320&amp;h=160&amp;q=80" style="margin: 3px;">
        <img class="relative shrink-0 w-80 h-40 rounded-lg shadow-xl bg-white" src="https://images.unsplash.com/photo-1622890806166-111d7f6c7c97?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=320&amp;h=160&amp;q=80" style="margin: 3px;">
        <img class="relative shrink-0 w-80 h-40 rounded-lg shadow-xl bg-white" src="https://images.unsplash.com/photo-1590523277543-a94d2e4eb00b?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=320&amp;h=160&amp;q=80" style="margin: 3px;">
        <img class="relative shrink-0 w-80 h-40 rounded-lg shadow-xl bg-white" src="https://images.unsplash.com/photo-1575424909138-46b05e5919ec?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=320&amp;h=160&amp;q=80" style="margin: 3px;">
    </div>
    <img src="{{url('/')}}/img/right-arrow.svg" class="absolute w-12 h-12 rounded-full bg-neutral-900 cursor-pointer object-cover p-2.5 right-0 top-1/2 translate-x-1/2" 
    id="arrowR">
</div>


<script>
    const prev = document.getElementById('arrowL');
    const next = document.getElementById('arrowR');
    const slider = document.getElementById('slider');

    prev.addEventListener('click', () => { slider.scrollLeft -= 300});
    next.addEventListener('click', () => { slider.scrollLeft += 300});
</script>


    <!-- Button trigger modal -->
<!--     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
    </button> -->

    <!-- Modal -->
   <!--  <div class="modal fade w-100  p-3" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe width="500" height="315" src="https://www.youtube.com/embed/yP-Qduvw9zY" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div> -->

    <!-- DONT DELETE -->
    <!--     <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <body class="antialiased">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center pt-8 sm:justify-start sm:pt-0">
                <div class="px-4 text-lg text-gray-500 border-r border-gray-400 tracking-wider">
                    404                    
                </div>

                <div class="ml-4 text-lg text-gray-500 uppercase tracking-wider">
                    Not Found                    
                </div>
            </div>
        </div>
    </div> -->
    
</body>
</html>