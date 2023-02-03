const addCard = document.getElementsByName('addCard');
const totalDustCost = document.getElementById('totalDustCost');
const reset = document.getElementById('reset');
let dust = 0;

function printTotalDustCost() {
  totalDustCost.innerHTML = `Total Dust Needed: <strong>${dust}</strong>`;
}

function addDustCost(cost) {
  dust += cost;
  printTotalDustCost();
}

function resetTotalDustCost() {
  if (dust === 0) {
    return;
  } else {
    dust = 0;
    printTotalDustCost();
  }
}

addCard.forEach((button) => {
  button.addEventListener('click', () => {
    switch (button.id) {
      case 'common':
        addDustCost(40);
        break;
      case 'rare':
        addDustCost(100);
        break;
      case 'epic':
        addDustCost(400);
        break;
      case 'legendary':
        addDustCost(1600);
        break;
      default:
    }
  });
});

reset.addEventListener('click', resetTotalDustCost);
