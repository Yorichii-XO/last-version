<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="icon" href="{{ asset('assets/img/fiduciaire.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Exo:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/48adce65bb.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
    <style>
        .custom-toggler {
            border: 1px solid #fff;
            padding: 8px 12px;
            border-radius: 4px;
            background-color: transparent;
            color: #fff;
        }

        .custom-toggler:focus {
            box-shadow: none; /* Remove focus outline */
        }

        .custom-toggler-icon {
            border: 1px solid #fff;
            border-radius: 4px;
            width: 24px;
            height: 3px;
            background-color: #fff;
            display: block;
            margin: 4px 0;
        }

        @media (min-width: 992px) {
            .custom-toggler {
                display: none;
             
            }
            
        }
        @media (max-width: 991px) {
            /* Add space between list items in mobile view */
            .navbar-nav {
                margin-top: 10px; /* Adjust the spacing as needed */
            }

            .navbar-nav .nav-item1 {
                margin-bottom: 10px; /* Adjust the spacing as needed */
            }
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img
                src="https://www.nettoyage-casablanca-maroc.com/accueil…NBEST-NETTOYAGE-SOCIETE-NETTOYAGE-CASABLANCA.webp"
                alt="">
            <a class="navbar-brand" href="/">WinBest</a>

            <button class="custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="custom-toggler-icon"></span>
                <span class="custom-toggler-icon"></span>
                <span class="custom-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item1">
                        <a class="nav-link1 active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item1">
                        <a class="nav-link2" href="/Login">Login</a>
                    </li>
                    <li class="nav-item1">
                        <a class="nav-link2" href="/SignUp">Sign up</a>
                    </li>
                  
                   
                </ul>
            </div>
        </div>
    </nav>

</body>

</html>
