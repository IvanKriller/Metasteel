let counter = 1;

const counterValue = document.getElementById('counter-value');
const incrementBtn = document.getElementById('increment-btn');
const decrementBtn = document.getElementById('decrement-btn');
const resetBtn = document.querySelector('#reset');

// To increment the value of counter
incrementBtn.addEventListener('click', () => {
    counter++;
    counterValue.innerHTML = counter;
});

// To decrement the value of counter
    decrementBtn.addEventListener('click', () => {
    if (counter>1){counter--;}
    counterValue.innerHTML = counter;
    });


// To reset the counter to zero
resetBtn.addEventListener('click', reset);

function reset() {
    counter = 1;
    counterValue.innerHTML = counter;
}

total.textContent   = parseInt(product.dataset.price) * counter;