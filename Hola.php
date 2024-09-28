<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Feliz Cumpleaños!</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #ff9a9e, #fad0c4, #fbc2eb, #a18cd1);
            font-family: 'Comic Sans MS', cursive, sans-serif;
            overflow: hidden;
        }

        .container {
            text-align: center;
            width: 90%;
            max-width: 800px;
            position: relative;
            z-index: 1;
        }

        h1 {
            font-size: 3.5rem;
            color: #fff;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .slideshow {
            width: 100%;
            height: 0;
            padding-bottom: 75%;
            position: relative;
            border: 5px solid #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .slideshow img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slideshow img.active {
            opacity: 1;
        }

        .note-button {
            display: inline-block;
            padding: 15px 30px;
            margin-top: 30px;
            background-color: #ff6f61;
            color: #fff;
            border-radius: 50px;
            text-decoration: none;
            font-size: 1.4rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            animation: pulse 2s infinite;
        }

        .note-button:hover {
            background-color: #ff9f40;
            transform: scale(1.05);
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .bubble {
            position: absolute;
            bottom: -50px;
            border-radius: 50%;
            opacity: 0.7;
            animation: rise 10s infinite;
        }

        @keyframes rise {
            0% { transform: translateY(0) rotate(0deg); }
            100% { transform: translateY(-1000px) rotate(720deg); opacity: 0; }
        }

        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #f0f;
            animation: confetti-fall 5s linear infinite;
        }

        @keyframes confetti-fall {
            0% { transform: translateY(-100%) rotate(0deg); }
            100% { transform: translateY(1000%) rotate(360deg); }
        }

        .balloon {
            position: absolute;
            width: 30px;
            height: 40px;
            background-color: #ff0;
            border-radius: 50% 50% 50% 50% / 40% 40% 60% 60%;
            animation: float 15s ease-in-out infinite;
        }

        .balloon::before {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 20px;
            background-color: #000;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-50px); }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>¡Feliz Cumpleaños!</h1>

        <div class="slideshow">
            <img src="f1.jpeg" alt="Recuerdo 1" class="active">
            <img src="f2.jpeg" alt="Recuerdo 2">
            <img src="f3.jpeg" alt="Recuerdo 3">
            <img src="f4.jpeg" alt="Recuerdo 4">
            <img src="f5.jpeg" alt="Recuerdo 5">
            <img src="f6.jpeg" alt="Recuerdo 6">
            <!-- <img src="f7.jpeg" alt="Recuerdo 7"> -->
        </div>

        <a href="#" class="note-button">¡Que tengas un gran día!</a>
    </div>

    <script>
        // Función para crear burbujas
        function createBubbles() {
            const colors = ['#ff9a9e', '#fad0c4', '#fbc2eb', '#a18cd1', '#ff6f61', '#ff9f40'];
            for (let i = 0; i < 50; i++) {
                const bubble = document.createElement('div');
                bubble.classList.add('bubble');
                bubble.style.left = `${Math.random() * 100}%`;
                bubble.style.width = `${Math.random() * 30 + 10}px`;
                bubble.style.height = bubble.style.width;
                bubble.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                bubble.style.animationDuration = `${Math.random() * 5 + 5}s`;
                bubble.style.animationDelay = `${Math.random() * 5}s`;
                document.body.appendChild(bubble);
            }
        }
        function createConfetti() {
            const colors = ['#ff9a9e', '#fad0c4', '#fbc2eb', '#a18cd1', '#ff6f61', '#ff9f40'];
            for (let i = 0; i < 100; i++) {
                const confetti = document.createElement('div');
                confetti.classList.add('confetti');
                confetti.style.left = `${Math.random() * 100}%`;
                confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                confetti.style.animationDuration = `${Math.random() * 3 + 2}s`;
                confetti.style.animationDelay = `${Math.random() * 5}s`;
                document.body.appendChild(confetti);
            }
        }
        function createBalloons() {
            const colors = ['#ff9a9e', '#fad0c4', '#fbc2eb', '#a18cd1', '#ff6f61', '#ff9f40'];
            for (let i = 0; i < 10; i++) {
                const balloon = document.createElement('div');
                balloon.classList.add('balloon');
                balloon.style.left = `${Math.random() * 100}%`;
                balloon.style.bottom = `${Math.random() * 50}%`;
                balloon.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                balloon.style.animationDuration = `${Math.random() * 5 + 10}s`;
                balloon.style.animationDelay = `${Math.random() * 5}s`;
                document.body.appendChild(balloon);
            }
        }
        let currentIndex = 0;
        const images = document.querySelectorAll('.slideshow img');

        function changePage() {
            images[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.add('active');
        }

        setInterval(changePage, 3000);

        createBubbles();
        createConfetti();
        createBalloons();
    </script>
</body>

</html>
