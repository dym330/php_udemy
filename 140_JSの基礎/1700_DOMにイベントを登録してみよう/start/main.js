const btn = document.querySelector('#btn');

const hello = () => {
  btn.style.color = 'red';
};

function hello1() {
  btn.style.fontSize = "24px";
}

btn.addEventListener('click', hello);
btn.addEventListener('click', hello1);