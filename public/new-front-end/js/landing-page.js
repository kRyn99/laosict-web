let currentCardIndex = 0;
const cards = document.querySelectorAll(".card-benefit");
const totalCards = cards.length;

function focusOnCard(index) {
  if (index < 0) {
    currentCardIndex = totalCards - 1;
  } else if (index >= totalCards) {
    currentCardIndex = 0;
  } else {
    currentCardIndex = index;
  }
  cards.forEach((card) => {
    card.style.transform = "translateX(-" + currentCardIndex +  "00%)";
  });
}

function prevCard() {
  focusOnCard(currentCardIndex - 1);
}

function nextCard() {
  focusOnCard(currentCardIndex + 1);
}

function register() {
  // Scroll to the form
  const form = document.getElementById('list-course');
  form.scrollIntoView({ behavior: 'smooth' });
}