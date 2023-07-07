
function main() {

    const btn = document.getElementById('btn');
    const input = document.getElementById('number');

    btn.addEventListener('click', () => {
        // validate input
        const number = input.value;
        if (number === '') {
            alert('Please enter a number');
            return;
        } else if (isNaN(number)) {
            alert('Please enter a valid number');
            return;
        } else if (number < 0) {
            alert('Please enter a positive number');
            return;
        } else if (number % 1 !== 0) {
            alert('Please enter an integer');
            return;
        } else if (number > 100) {
            alert('Please enter a number less than 100');
            return;
        } else {

            // clear previous results
            const ps = document.querySelectorAll('div');
            for (let i = 0; i < ps.length; i++) {
                ps[i].remove();
            }

            const p = document.createElement('div');
            p.textContent = 1;
            document.body.appendChild(p);

            for (let i = 1; i <= number; i++) {
                if (number % i != 0) {
                    const p = document.createElement('div');
                    p.textContent = i;
                    document.body.appendChild(p);
                }
            }

            const p2 = document.createElement('div');
            p2.textContent = number;
            document.body.appendChild(p2);
        }
    });
}

window.onload = main;