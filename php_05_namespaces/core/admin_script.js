const cells = document.querySelectorAll('[data-cell]');
const winnerMessageElement = document.getElementById('winnerMessage');
let isCircleTurn = false;

const winningCombinations = [
    [0, 1, 2], // top row
    [3, 4, 5], // middle row
    [6, 7, 8], // bottom row
    [0, 3, 6], // first column
    [1, 4, 7], // second column
    [2, 5, 8], // third column
    [0, 4, 8], // diagonal
    [2, 4, 6]  // anti-diagonal
];

function startGame() {
    cells.forEach(cell => {
        cell.addEventListener('click', handleClick, { once: true });
        cell.textContent = ''; // Reset the board
    });
    winnerMessageElement.textContent = '';
    isCircleTurn = false;
}

function handleClick(e) {
    const cell = e.target;
    const currentClass = isCircleTurn ? 'O' : 'X';
    placeMark(cell, currentClass);
    if (checkWin(currentClass)) {
        endGame(false, currentClass);
    } else if (isDraw()) {
        endGame(true);
    } else {
        swapTurns();
    }
}

function placeMark(cell, mark) {
    cell.textContent = mark;
}

function swapTurns() {
    isCircleTurn = !isCircleTurn;
}

function checkWin(currentClass) {
    return winningCombinations.some(combination => {
        return combination.every(index => {
            return cells[index].textContent === currentClass;
        });
    });
}

function isDraw() {
    return [...cells].every(cell => {
        return cell.textContent === 'X' || cell.textContent === 'O';
    });
}

function endGame(draw, winner = '') {
    if (draw) {
        winnerMessageElement.textContent = `It's a Draw!`;
    } else {
        winnerMessageElement.textContent = `Player ${winner} Wins!`;
    }
    cells.forEach(cell => {
        cell.removeEventListener('click', handleClick); // Disable further clicks
    });
}

// Start the game on load
startGame();
