<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body class="relative">
<nav class="bg-main-0 py-10 text-white font-navbar font-medium">
      <div
        id="navitems"
        class="max-w-7xl mx-auto items-center grid grid-cols-9"
      >
        <a href="" class="justify-self-center relative hover:text-signup-0">
          Home
        </a>
        <a href="" class="justify-self-center relative hover:text-signup-0"
          >About</a
        >
        <a href="" class="justify-self-center relative hover:text-signup-0"
          >Council & Topic</a
        >
        <a href="" class="justify-self-center relative hover:text-signup-0"
          >Schedule</a
        >
        <div class="justify-self-center">
          <img class="h-20" src="{{URL::asset('images/unknown.png')}}" alt="" />
        </div>

        <a href="" class="justify-self-center relative hover:text-signup-0"
          >Registration</a
        >
        <a href="" class="justify-self-center relative hover:text-signup-0"
          >Merchandise</a
        >

        <div
          id="navitems"
          class="justify-self-center flex gap-4 items-center text-sm col-span-2"
        >
          <a href="" class="justify-self-start relative hover:text-signup-0"
            >Log In</a
          >
          <div class="text-xs"><h2>or</h2></div>
          <button
            type="button"
            class="
              bg-signup-0
              px-10
              py-1
              text-white
              font-bold font-navbar
              rounded-full
              hover:bg-buttonactive-0
            "
          >
            Sign Up
          </button>
        </div>
      </div>
    </nav>
    @yield('content')
</body>
</html>