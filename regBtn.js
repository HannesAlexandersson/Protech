const regBtn = document.getElementById('regBtn');
const regText = document.getElementById('regText');
const regEmail = document.getElementById('regEmail');
const okBtn = document.getElementById('okBtn');

let regBtnAnim = false;

regBtn.addEventListener('click', () =>{
	if (regBtnAnim) return;

	regBtnAnim = true;

	regBtn.style.cursor = 'default';

	regText.style.animation = 'regTextGone 0.1s ease-out';

	setTimeout(() =>{
		regText.style.display = 'none';

		regEmail.style.display = 'inline';
		regEmail.style.animation = 'regEmailShow 0.1s ease-out';

		regBtn.classList.remove('regBtnT');
		regBtn.style.animation = 'regBtnBig 0.1s ease-out forwards';

		okBtn.style.display = 'inline';
		okBtn.style.animation = 'regEmailShow 0.1s ease-out forwards';
	}, 100);
});

okBtn.addEventListener('click', () =>{
	regEmail.style.animation = 'regTextGone 0.1s ease-out forwards';
	okBtn.style.animation = 'regTextGone 0.1s ease-out forwards';
	regBtn.style.animation = 'regBtnSmol 0.1s ease-out forwards';
	setTimeout(() =>{
		regEmail.style.display = 'none';
		okBtn.style.display = 'none';

		regText.textContent = "Tack!"
		regText.style.display = 'inline';
		regText.style.animation = 'regEmailShow 0.1s ease-out forwards';
	}, 100);
});