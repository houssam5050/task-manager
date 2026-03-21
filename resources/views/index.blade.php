<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager · Home</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f5f7fb, #e9eff5);
            color: #1f2d3d;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 2rem;
        }

        /* HERO */
        .hero {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 2rem;
            margin-top: 2rem;
        }

        .hero-text {
            flex: 1;
        }

        .hero-text h1 {
            font-size: 3rem;
            font-weight: 800;
            background: linear-gradient(135deg, #1d267d, #5c469c);
            -webkit-background-clip: text;
            color: transparent;
        }

        .hero-text p {
            font-size: 1.3rem;
            margin: 1rem 0;
            color: #3b4c63;
        }

        .hero-box {
            flex: 1;
            height: 260px;
            border-radius: 20px;
            background: linear-gradient(135deg, #7f9cf5, #5a67d8);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .hero-box img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }


        .section-title {
            font-size: 2rem;
            margin-top: 3rem;
            font-weight: 700;
        }


        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .card {
            background: white;
            border-radius: 20px;
            padding: 1.5rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            transition: 0.2s;
        }

        .card:hover {
            transform: translateY(-8px);
        }

        .card i {
            font-size: 2rem;
            color: #5c469c;
            margin-bottom: 1rem;
        }

        .card h3 {
            margin-bottom: 0.5rem;
        }

        .images {
            display: flex;
            gap: 1rem;
            margin-top: 3rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .img-box {
            width: 150px;
            height: 120px;
            background: #c3dafe;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .cta {
            margin-top: 3rem;
            text-align: center;
        }

        /* BUTTON STYLE */
        .cta-btn {
            display: inline-block;
            background: linear-gradient(135deg, #5c469c, #7f9cf5);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-size: 1.4rem;
            font-weight: 600;
            text-decoration: none;
            box-shadow: 0 10px 25px rgba(92, 70, 156, 0.4);
            transition: all 0.25s ease;
        }

        /* ICON SPACE */
        .cta-btn i {
            margin-right: 8px;
        }

        /* HOVER EFFECT */
        .cta-btn:hover {
            transform: translateY(-4px) scale(1.03);
            box-shadow: 0 15px 35px rgba(92, 70, 156, 0.6);
            background: linear-gradient(135deg, #4c3a87, #667eea);
        }

        /* CLICK EFFECT */
        .cta-btn:active {
            transform: scale(0.98);
        }

        .images .img-box img {
            width: 100%;
            height: 100%;
            border-radius: 15px;
        }


        @media (max-width: 768px) {

            body {
                font-size: 15px;
            }

            /* Container spacing */
            .container,
            .intro-container,
            .login-container,
            .register-container {
                padding: 1rem !important;
            }

            /* HERO SECTION */
            .hero {
                flex-direction: column;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 2rem !important;
            }

            .hero-description {
                font-size: 1.1rem !important;
                padding-left: 1rem;
            }

            /* CARDS */
            .card-grid,
            .cards {
                grid-template-columns: 1fr !important;
                gap: 1rem;
            }

            .card {
                padding: 1.2rem;
            }

            /* NAVBAR */
            .navbar-improved .navbar-brand {
                font-size: 1.3rem;
            }

            .navbar-improved .navbar-nav {
                text-align: center;
            }

            /* FORMS (login/register) */
            .login-card,
            .register-card {
                padding: 1.5rem;
                border-radius: 15px;
            }

            .form-group input {
                padding: 0.6rem;
            }

            /* BUTTONS */
            .login-btn,
            .register-btn {
                padding: 0.7rem;
                font-size: 0.95rem;
            }

            /* IMAGES / BOXES */
            .hero-box {
                height: 180px;
                font-size: 1.2rem;
            }

            .img-box {
                width: 100px;
                height: 90px;
                font-size: 1.5rem;
            }

            /* FOOTER */
            .footer-container {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <x-navbar></x-navbar>

    <div class="container">


        <div class="hero">
            <div class="hero-text">
                <h1>Task Manager</h1>
                <p><strong>Good place to manage your life</strong></p>
                <p>Control your life details — every task, every plan, every goal.</p>
            </div>

            <div class="hero-box">
                <img src="https://edutrainings.eu/wp-content/uploads/2021/11/life-management.png">
            </div>
        </div>


        <div class="section-title">
            Why choose Task Manager?
        </div>

        <div class="cards">

            <div class="card">
                <i class="fas fa-brain"></i>
                <h3>Mental Clarity</h3>
                <p>Stop thinking about everything. Save your tasks and focus on what matters.</p>
            </div>

            <div class="card">
                <i class="fas fa-clock"></i>
                <h3>Manage Time</h3>
                <p>Organize your day and never miss important tasks again.</p>
            </div>

            <div class="card">
                <i class="fas fa-sliders-h"></i>
                <h3>Total Control</h3>
                <p>Control every detail of your life with simple and powerful tools.</p>
            </div>

            <div class="card">
                <i class="fas fa-check-circle"></i>
                <h3>Achieve Goals</h3>
                <p>Turn your plans into achievements step by step.</p>
            </div>

        </div>

        <div class="images">
            <div class="img-box">
                <img src="data:image/jpeg;base64,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">
            </div>
            <div class="img-box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGES_S2t05fyy6wcFVKbgy8XjVyju768mUOA&s">
            </div>
            <div class="img-box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQW5N8-Hek5aIw1_vaPLWqUPl5ccwRyPJ_hKQ&s">
            </div>
            <div class="img-box">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUTExMWFhUVFhUVFRUXFRUVFRUXFRUXFhUVFRUYHiggGBolGxcVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OFxAQGi0dHR0rLS0tLSstLSstLS0tLS0rLS0tLS0tLSstKy0rKzc3Ky0tLS0tMC0tKy0tKzc3NysrLf/AABEIALcBEwMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAADBAIFAAEGBwj/xABHEAABAwEEBwUFBAcHAwUAAAABAAIRAwQhMUEFBhJRYXGRIoGhsfATFDLB0VKS4fEHI0JicoKyFUNzk6Kj0hYzUyREs8Li/8QAGQEAAwEBAQAAAAAAAAAAAAAAAAECAwQF/8QAIxEAAgEDBQEBAAMAAAAAAAAAAAECAxESBBMhMUFRFCJSYf/aAAwDAQACEQMRAD8A6NljMhFdZYXRe6hoQhR3r3f03PM/MkUTLNKDXssLqG0G4xel7bZZFyUdRyN6fg5gMTDGSmqtjcMihspwuh1FJGKg0B9kjU2JhtKURlFYyqGigI1qCFTpq6NmkYFAFiM33cwUo1law3TdygtNG9CpU710to0c2R2m8ST8kClYRNwaYzkeUreOpWJDou4jZaF+CY90JOCubJSj9k9U04DcuWeoeRvGkrHL2rRhiR0VbUsRB/NdhWrD7PmlGQ43jzW1PUyS5JnRi3wc9SsYzKepWUAZ9FaiiycEYURipnqGwVKxU+5ShjRkq9FYjBvkpCqJ7Tb+RUb8kVtxZT09DT6KL/YM5R1VwbSBg1KVrQ84CPFJVqjKcIIqa+hS3MJGtY4zCsqznHE+CVfTJXVTnL1nNPHxFZUpIXuytTQQ3U10Kr8MHErvd1E2dWBYoGmtFNkuIi+hC22inSyVEUVW4Q4gxTO6Fo0Hb002gits6zdSw8blcbMnrFoF9SD8LTmrbRWi9o7RFww4rpm0gAuSvrnHiJ1UNGpfykc6zQFICImM96xdH7MLFw/qqfWd354fEEcxQLE0ApGmFx5G1hM00KqxPOpQhOYmpiaKavRkpR9nV66zqDrLK3jWsYOncqaVKEyKIKZ9zR2WZEqqYRgLUgUxfxR22dHFLgsJTNVETqMkYA8wEt7iPstHcFalvNQIPoIVRorFC1KyjcOim6i1NUwpOChzdx4orXUWkqJsg48pViWLYYNyrdYsUINsQH5qLrLu+SsdlCe0z+CFUYsUVz7MRmFhoO3d6sC31CG6+6FaqMTiiuNN2NyBVBGJHmrM0W/Z8UrVpgZBawmZyRWOoTn4LQotzKaqhLuC6YtswdkRdZ6R/aKUr0GDAko70EhbQuvTOTXwSc1R9mnTSWezW2ZlgKCiiMopltIo7KKUqg1TF2UU9ZbLKLRs6eoWdctSsdFOlyHs8AQExCjTpQihq4JPk7kgXseJWI+ysU5DsFAUgUPbUTUWdgDqJaEAV1IVkWYXCQtFqwVVLbUiIli1sIm0sJRyMiApgLYCkAkBDZWtlGhaLUXGQaFhCmAsIQAIhZCJC8z18122tqz2V92FSs0472UyMt7u4b0mwsekELWyuE1D119rs2e0u/WYU6h/vNzXH7fHPnj3pTTuIGWqD2KbqkIbqw4q0mK6AVGwUrWpk4kjwTjyMylqp4reBnJCNWmgOoynXNJ9BD2HfkumMjFwuIPs53KDaEnBWWwfqomm44QrVRk7SETT4KdIQm/dKm/otii4YodRDVN/DdID9po6JptmpnC5LtcQj03TwWErm6SDNsgyKO2nCA1nEozSsZX+miQQBSAUGlTBWbKNwtrUrEgKz25W/bpdbAXTZHPkw4cttJ3oTQitUtgGY4pimUuxHptWMi4jDQpAKDUQFZmhIBSAWgpKRmBbhYFtIZqFohSWIuAlpTR4r03UnOe1rrnbDtlxGbZjA5rxPXXRVOyWp1GlOw1rD2jJlwk3r3iF4j+kt06RrDc2kP8AbafmkwNfo/0DRtlaoyttbLae2Nl2yZ22i8969js1HYY1gc5waI2nnacQMJOZ4ry79EZ/9XUG+g7/AOSmvVnJxEwL2oTgjOCiWLVSJsLOpobqaaJCE6qFrGTFiKuahkJg1FEhapixFXBR2UyWqJaryJwAkneVNrHG+9GpNCYD1Mp26KVMUZRKIJGITG2o7YU53LwNNKKEMOU5UNlYkwFslDLlolSOwTaWIW0sT4CzAmksFNNbC2Kay3SNsXFNTbTRtkLcJblxYEGsRGtWwpBTkGJJqI1DCmEXCwRqmFBqmEmUiSxYtqRmLS2sQBpeF/pAfOkbR/EwdKTAvdV4DrhW2tIWj/GcB/Kdn5IAuf0Vui2xvpVB4tPyXrpC8V/RraI0lSG8VW/7bz8l7Y5OIAXIZCM5QcEsrDSAOaguphMOUHJqq0PATdSKjemTKGZV77DbF3OKgSUwUNPfDbIB5RQ5agLbWKXXLVNkmklS2VgMLTnqN80VMltLRqIRK0AlvD2wu2sL0N9RrcSBxJA80jaNOWdmNZnIHa/plQ9Sl2xNRXbHjVWKhfrTZp+J33CsU/sh9RnuUv7I62VuULaWbarIvEMCtygba2Hp5E4BwVIOS4epByMhYDAcpByA1yI0oyJcQ7SpgoIKmCtE7kWCgqSGCtyiwE1qVGVkosBKV846xA1LXWM3PrVSDjcXuIK+gdJ2jYpOcMYIbzNw+vcvEtNaOcx20BeLwi3ArlbqLX9npSzAnCqWE/xMezzcF9Ckr5j2306zaw+JlRtQZXsIcPJfSNht7K1JlZhGzUa17b8nCY+Sm9hjJKiXIT7WwYuCA/SNP7XgsnUj9KukMkqDklU0qwYAnolKum4wZ1d+CylXgvR7kV6WrghlUNbT9TJrfE/NIVdPVt7RyA+YWL1UES9TBHVEoZO+5cZW0pVdjUPUjySFV5OLp53/ADWT1nxEPWxXSO5qW+k3GowfzBJVtYbO39ueQJ8cFxNTn8vNL1Fk9XN9GT18vEjr62t9IfCx7ug+qr62uTv2aQHNxPlC5p8bz1QX7Poyp36j9MZa2q/bF3aNbbQcHNbyb/yVdaNO13fFVfH8WyPCAkQ4ZA96g6pyHepcpPtmMq9R9yZN1q2s54ySoF/PyUTU9YrRJ3HyU2Msrmy88fXetqF+711WJ2Fc7huvD86Le55HyRWa876HSp/+Vwgdy8FIOWu9U+nUtZV+nfDXdudE/wCYP+KINdmf+J33h9FwDSjU2g5BG/U+lLW1fp3rNcmH+6d94JijrQ139077w+i4Wm1oxARfeshs+u9L9FT6V+up6zvxrGz7B+8Poi0tYA7Bn+r8FwtmbN52eg+qsaVrAuaB4KlqKn0pamTOzZpcbh1/BMM0hwC5mxh0TBPIT8lYUZxJA5keWK6adWozRTbLxtsUvelUNrAXl08h8ypi1Dd1M/guqLmyuS195KhUtcYmPPoFWutXH5JarVmVor+sdiGldIF54DAfMqlqWQVjsiJO9N2srWhxNYcnLdNWEcXp7V7ZcW5iMt4lPan6wOsjfd6wcaUkscBJpkmSCM2k33Xgk4zd0unmA1Tyb5fgqV1jBOCiUU0M6qjbKVcTTe13AHtd7DDh0S1opwuXfZdnAJmjpWq27a2gMndoeOHcuGppb9MlwuWT3kIDrRxWC3sf8TS072m77rv+SG6g13w1AeBOwejiAe4lcU9PUj/phKEkDq1/XoJapXHFZaaRYYdtN3SInlKWeW+iuZ8dmDbNuqD0fol3VOI8Vj3jgl32gb0GbZp5JzPQfNQgxn3lDfaT6lCdaccOKqzIuFceIHeolvNLvtJ9YILqzji7oqUWFxo024nxPyWnEcEmagkdqcsUKtUbfl64p4iHfajf0hDfaOE8PxSbrQ3eeUeSym5xwbdvJz4qsAGnWnh5LEqaLjff0hYjFCLSlZKjvhZUI4NJ8gjNsFTNuz/ibFP+qFzHtajz23ud/E5z/MlN2ckC4xyAXd+OPrO9aRes6GnYo+KpRH87XeDJRDUot/vW/wAtN5/qDVzxJOJKkC0XxPMhWtHT9LWmgi+94oYl1R3JrGeO07yUm6Tot+Gk4n96pP8AS1vmufdbQMAB0W6T3vVrT0l4aKjBeHRM0w84UqTRyc4/63EKzslvqASXRwa1rf6QFQWOkBjerWzXqsIrpFqMV4XFnqueZc4nmSfNPivkMFVCtAgKXvAaFRRbOtOSw2lUotUqRr4IAuX2nBadae0qqvXwWqte8fRAFnUfN29G0E39af4D5hVbqy06rOHgU07CG9aAW1gRmwHxKrqFeccVqo+cTPGZSrhfcqyCw+4ylqlLFRZVRdpFwFw6PxRLioVQEAuhS0MO6s9ohryBuxb3tNxStau0/FTH8hLD3gy08gAiiqCl6wWcoRl2rilCMu0AfZ2u+CsBN8PbsHltXt6kJetYqrRtOBj7QjYPJ4kHqp1aaXZaH0zLHOaf3SR1hYy0sH1wc8tLF9cAatKYwHf63+CG+iciB3Jt+lZ/7lNj+MbD/vMgfeBQnVqDsHOYd1Qbbf8AMpif9C55aaouuTmlpprrkVdS3uM9OSHsti8EzjPQps2apBLAKgGdIirEfaDb294CQdbTIyxnhhPmsnCS7MJRa7COaAfhnn4hbmMhF8b70L2jsT9MZnuw6KAqmbz+PH1vSsyRgVsw1Z7Uxlw9c0q+oQb8Djwi+71ko+1bmZmY67uiMQGi/h4rEqLe0XQQsRg/g7CralyJ7VIbS06svaPZLA2l2SgZOJ8UmKyLTdemMes1EuIABJOAF5PcF12idVKrxtVHNpNF5m8+BgXcUxq3ZKbWg04IIB2pBknI7r7o4966n3ZtRns3gOa6LiSDccjjKzbArrBobR8w+1Tye1rfAHzVlpGx6OotkOe9xEgU6gdPEmCAOa5TTFhFKuKNIufIbDcXAmexIF5uGWBXXauavilD6sOqYhuLWf8AJ3gEAa0Fqwav6ysXMYfgZdtkZFxIu6X8FXax2ezUnezpOe54+IlzS1v7tzb3eSd1n1tgmlQN+D6gwbva07+P5jmtD2B9oqBoMNEFztwnxOMJgW2reiDaX5im343f/VvHyVrrFoay2ZgO1UL3XMaXt73Hs4D6BXlnqUrLR+zTpicr5z4uJ6qm0BZza6ptdcdmYpMPww04neAZ5mSkBWWPQFevDoDGRc503/wtxPgrmrq1ZqTQa9cjm5lMHkDJT2t+mjZ6UtjbcdlnAxJdGcDxIXmtotJf2nOJccSTJPVAHe0dG6OcIbaB/nNnxCobJZTWquZQBc2TBccG4AvIECVz1GovTNVLM2nZ2EYvAe479q8eEBMBSlqgwCatU3XnZhoH8zp63IR0Xo7D3iD/AIzPpCDr7a3TTpz2S0uO5xmL98DLiuMnikB0jtH2f3ttFtRzqbwO2HNJ2nAwNoCCLgO9dB/0rZwJL6oAk3uZAEXn4V55TrkEOBvBBHAgyPJepULcKlNrxMOa13VswmBSu0LYD/7r/eo/Rc1aNGg2gUWVGuBcA2oCHCCbiSDjGS6f+wLIDgb7/wDuEd0ZfgktMavUhTLqBIe3tAF8yBiMccxyQAd+qNBo7T6h4ywDibhd1VZW0dYTc21QciX0yPIT1zWtH643BtcE5bbb/vNHy6IVWhY6xJaGlxvhj9l0m+9t3kgZRe7g1hSc9re2Gl2IAJ+Ibx9V0VXU+gJl1Qnm0HoGqlterjf7uoRwfe37wgzhkUOnpq1WQNbVbt0/2XAyAAcni6L80WA1btC2QyGWkBwm5zmG/cYAi9cpa6BYS0xI3EEHiCLiF11XSFitMueGtccS6WHltC495lJWjQFF19OoRxlr2m/KMsM800ByjjBnMYEXEckz/a9QxtkVQMqrQ8/f+MdzgmLboSqz4SHjhcYH7pVPWkEhwg7iLx9ENJ9ktJ9j9S0UX4h9I72kVaf3HkOA/nKibM9x/VVaVTc3a9nUPDYqQXH+GVVudCg5yzdCD8MZaeD8sWlZjqZ2ajS0nJzS0iM4OKC57QAAb8eFw/JAo6UqsGy2odn7BAez7jwW+C3/AGjTd/3KAF0bVFxpmIi9jg5p7g1YPSvxnPLSSXTGRaGHIZYwsQKbLIRJtNRpMnZNCSL8CWuI6FYo/MyPzzKfbJR7NRc+5o+nVApPAxEjnCuqGkmDIi7CAAI5L0D0TdLQriBBv3QYyuGO9WNk1bqk3lg4yeuHq5BZplt3ZcbjwnhOSYbrFUFzWgY3/Eb8bjd4FS2xnU6D0c2zS4vvI7RPZYBM+eZP45btatkFlHtOMj2kHZHBo/a5+a4+rbHVINRxcREA4STkBd0WUakGRklYD1DVrRxoj2rzNZ3ae43xmWg5nf8AgrPTBquouZRIa9wAvJBg4wd+PVcnY9c6cA1GkEASW9oSMxfuyWV9dKRvDXuvOTRByzSsBqxar1Cf1rmsGez2nHlkOcrqG1qFkpAXMYJvxLnb97nXDDyXDWjXGoZFNrW8Xds4zcLgOipa1tfUcXVHFxuvJv7hkOCdgOk09rE60GB2abfhbmSLpccz5Lv9X7Q32VINPZ9myOPZHznxXjntPocvRxVxoDWJ9n7EbTJnZJIIi/suvgdyGgPQtZ7CLS0Da2Swy11xEm7ZcPpuXKf9LWj7VPntHqbkzU1zpH4mvad3ZcMTxEnjxUna4UQIAeTF1zR3TtJcgU+lNGvs4ZtFpL9qAJjsxmefgu01T0sKtFrf26Y2XDgPhN3C7mFwGm9N+3LCGlgbtXTJM34YDDilbJb3UyHNfsuGBGPIzimB67pHRzLUwNdcW3teMWmBN2Y4clyFr1Pri5r2OF5mSOoj5oGj9eXNP61gdxaY4SWm7DirYa60XA9moAf3W3TjBDvokBRWvV2rTpue4t7AkhpJJEwSLoj5BX+p9v2qBYTfTJg/uuvGV2LuirLXrnSgtDHOBEQ4huUHM4qg0Hpf3eo4wS0iCJE3GRfvF4nimB2etOiveQ3ZID2nEi6CO0JF+IblvXPN1Vqzc9mWboi68nZTDtdGf+N879tvregP1yaCIpu6iLsL5vQhitt1frU2uqbTHBokhpJcBOOEDfyQbNoE16QeyqAb2lrmmA4XxtTgRBwzCdOuzAbqb+IkRE4G/DHjeqWz6aFGo91JsU3H4HGIicCMMfJADbdF2yjcx+GW0XNux7Meu9WFe0XGRAF7wb8ZuiOEQkna1sIG2x2V7XA4GcLrvokrXrFSv2dsYXbLRx2Tf+60cY43CArtMWZtOHMuFwIulpkjO+LlunowuaH0qgOZB2muaYvBiUnpTTRqjYAuBF5+KJuabrrwOiQsludSdLYnAg/CcvmfFUI6SzMtDHAOIc2RMkuIAzBietxlE0lZ2PGy4A435i/IwqdusUAdgg5kEEkRfAWxp6kb+1eTk3DuN+SBldpKxOpG+9pz+RSBfkrXSGlw9uyGm/MkHj65qncRh4oEY4obnLRcoFyYEw4bj4fRYhk+rlpAEWuKYpmEqw/km2QMd09yQg9OcgQM0yLgPr5pZpjhHnx6IocYknwuzwlAxthOZvw5QjNkDv8AqlRUAM9Iy7+Kn7Y8zPj9EgGX1biOXHehtdPmZxwy9ZpdzyePTmfmsYeUevp4FMBwPGXfl07vmtufHDygwN3qEp7Sd2Zi4AExl3KTHyeMJAOGr5buhRaVUbvp+eKRB4c4GSnTqY5nL896AHXVb475JUGVrsCd/DgfDolnEzdjhw44KLH3Ec5GUnvnNADZqYccOhwPej0z4yc1Xtq8sh549y6zV7QDa9EVHOc0EkT2YuMGD1xhAFO1qK18fL13q40toelSpOeKhJlsAwMYBv33+S5/a43DO6/xQAWv6x9bkoakHfmYwgD11U31rvx9cUu9/gb4nwQAUvHjEXbt6hWqTeJ5xFxE/RKh4BxA6mfH1ctl8H4hfN/TDdj4IA26pHMbzHEi/d8loVccR18fBQDd0+d85Xb0FxJ/LAkeskAMPdwF8yL8/wAig1TfdhHdvChtAjG/Cd9wy3ob+HjHK9OwGVakY37/AJyl6gHdlvu4c0y8yL8cIA8vDJLOfHIxiPUoAFOET3x63KL3RwW6lxuJykXH8kMi6/L1kmBva9TitB/PqoHcR3jKeHchCMkAHc/1+CgXIZctF3QoAwlYh7XJYmInTKapOn16yWLEgCtPFH2o5x8p3rFiQE2OiIwM+GOCiat13Td3rFiANB3diT08sUQPMTfuOHDHfisWIA0X34zNwuzE3ozDngMrt0CfEdVixAzTanQzdffGPkeqIHmR0yOHyjyWLECM2gATxjPEx8ispPJEjiOIjHx81pYgCbhgJIxwyzEL0HU60gWVlxN7jIiB+sdNx9dy2sSYyWslqmyvzvbgNkDZe3Kb8lwTrSAfwxuW1iEIj7Xr+GCjXfskSeW+8cOR/FYsQMEasy4ct2JJ9clAvIMYZfavmLtwv4rFiYGnOkm4XX4bpv8AO5CfdfHPcBw8FixAGPMRugdOPehF3rvw8R1W1iYEdrADLKPxxQRUkTxxiDPr5rFiAIueAYk+sj4IdRpm8Xm/uhYsQAJ7ovywHeo7F+N5OHTNYsQBB4j0EOpcsWIAEXhYsWJgf//Z">
            </div>
        </div>

        <div class="cta">
            @if(session('user'))
            <a href="/page" class="cta-btn">
                <i class="fas fa-tasks"></i> Go to your dashboard
            </a>
            @else
            <a href="/login" class="cta-btn">
                <i class="fas fa-rocket"></i> Start Now
            </a>
            @endif
        </div>

    </div>
    <x-footer></x-footer>
</body>

</html>