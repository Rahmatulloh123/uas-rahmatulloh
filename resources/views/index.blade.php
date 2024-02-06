<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        /* Styles for body */
body {
    font-family: 'Segoe UI', sans-serif;
    margin: 0;
    padding: 0;
    background-image: url(https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg); /* Background image */
}

/* Styles for section */
.section {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(245, 11, 116, 0.394); /* Background color */
}

/* Styles for card */
.card-body {
    background-color: #ffffff; /* Card background color */
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Card shadow */
    padding: 30px;
}

/* Styles for circle image */
.circle-img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid #ffffff; /* Border color */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Image shadow */
}

/* Styles for heading */
h3 {
    color: #343a40; /* Heading color */
}

/* Styles for buttons */
.btn-primary {
    background-color: #007bff; /* Button background color */
    border-color: #007bff; /* Button border color */
    color: #ffffff; /* Button text color */
}

.btn-primary:hover {
    background-color: #0056b3; /* Button background color on hover */
    border-color: #0056b3; /* Button border color on hover */
}

        
    </style>
</head>
<body>

<section class="vh-100" style="background-color: rgba(249, 245, 247, 0.394)">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card-body p-5 text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ4Ef3V9AhuK7JDSifZ_mmPilxTsLpspDOTlJF16CXvQ&s" alt="Foto Profil" class="circle-img mb-5">
                    <h3 class="mb-5">SELAMAT DATANG</h3>
                    <h2>DI UAS WAHYUDI_MI21A</h2>
                    <a href="/register" class="btn btn-primary btn-lg btn-block px-5">Register</a>
                    <a href="/login" class="btn btn-primary btn-lg btn-block px-5">Login</a>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
