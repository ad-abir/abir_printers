document.addEventListener('DOMContentLoaded', () => {
    const counterElement = document.getElementById('counter-number');
    const targetNumber = 10000000; // 10M+
    const duration = 5000; // 5 seconds
    const increment = targetNumber / (duration / 16); // 16ms per frame
    let hasStarted = false;

    function startCounter() {
        let currentNumber = 0;

        const counterInterval = setInterval(() => {
            currentNumber += increment;
            if (currentNumber >= targetNumber) {
                currentNumber = targetNumber;
                clearInterval(counterInterval);
            }
            counterElement.textContent = Math.floor(currentNumber).toLocaleString(); // Format number with commas
        }, 16);
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasStarted) {
                hasStarted = true; // Prevent the counter from restarting
                startCounter();
            }
        });
    });

    observer.observe(counterElement); // Observe the counter element
});
