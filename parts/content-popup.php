<div id="popup">
    <div class="popup__wrapper">
        <h1>Site em desenvolvimento!</h1>
        <!-- <button id="close-btn" class="hero__content--button">Fechar</button> -->
        <button id="confetti-btn" class="hero__content--button">Clique aqui</button>
    </div>
</div>
<style>
    #popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, 0.9);
        padding: 20px;
        border: 1px solid black;
        z-index: 9999;
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #popup h1 {
        font-size: 30px;
    }

    #close-btn {
        cursor: pointer;
        color: black;
    }

    .popup__wrapper {
        width: 30%;
        height: 30%;
        border-radius: 10px;
        padding: 20px;
        background-color: rgba(255, 255, 255, .5);

        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 20px;
    }

    @keyframes confetti {
        0% {
            transform: translateY(-120%) rotate(0deg);
        }

        100% {
            transform: translateY(100vh) rotate(200deg);
        }
    }

    .confetti {
        position: absolute;
        top: 0;
        left: 0;
        width: 10px;
        height: 10px;
        border-radius: 10px;
        background: linear-gradient(to bottom right, #fdd835, #ff9800);
        animation-name: confetti;
        animation-duration: 5s;
        animation-iteration-count: infinite;
        animation-timing-function: ease-out;
        opacity: 1;
        z-index: 9999;
    }
</style>

<!-- <script>
    document.getElementById("close-btn").addEventListener("click", function() {
        document.getElementById("popup").style.display = "none";
    });
</script> -->

<script>
     function createConfetti() {
     const colors = ['#f44336', '#e91e63', '#9c27b0', '#673ab7', '#3f51b5', '#2196f3', '#03a9f4', '#00bcd4', '#009688', '#4caf50', '#8bc34a', '#cddc39', '#ffeb3b', '#ffc107', '#ff9800', '#ff5722'];
     const tamanho = [0, 10];

     for (let i = 0; i < 200; i++) {
         const confetti = document.createElement('div');
         confetti.classList.add('confetti');
         confetti.style.background = colors[Math.floor(Math.random() * colors.length)];
         confetti.style.borderRadius = tamanho[Math.floor(Math.random() * tamanho.length)];
         confetti.style.left = Math.random() * 100 + '%';
         confetti.style.animationDelay = Math.random() * i / 10 + 's';
         document.body.appendChild(confetti);
     }
     confettiBtn.style = "display: none;"
 }

 const confettiBtn = document.getElementById('confetti-btn');
 confettiBtn.addEventListener('click', createConfetti);


</script>