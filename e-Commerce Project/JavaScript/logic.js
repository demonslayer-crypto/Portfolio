const f = document.getElementById('search');
const q = document.getElementById('btn');
const flipkart = '//www.flipkart.com/';
const site = 'myCart.com';

function submitted(event) {
  // event.preventDefault();
  const url = flipkart + f.value;
  const win = window.open(url, '_self');
  win.focus();
}

f.addEventListener('submit', submitted);

// https://www.flipkart.com/search?q=pant%20shirt&otracker=search&otracker1=search&marketplace=FLIPKART&as-show=on&as=off
// https://www.google.com/search?client=firefox-b-d&q=pant+shirt+flipkart


// https://www.google.com/search?client=firefox-b-d&q+flipkart+f.value

// "parent.open('https://www.flipkart.com/'+ document.getElementById('search').value)";
