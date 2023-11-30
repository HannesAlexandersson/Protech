const regBtn = document.getElementById('regBtn');
const regText = document.getElementById('regText');
const regEmail = document.getElementById('regEmail');
const okBtn = document.getElementById('okBtn');

const regBtnFt = document.getElementById('regBtnFt');
const regTextFt = document.getElementById('regTextFt');
const regEmailFt = document.getElementById('regEmailFt');
const okBtnFt = document.getElementById('okBtnFt');

let regBtnAnim = false;
let regBtnAnimFt = false;

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

regBtnFt.addEventListener('click', () =>{
	if (regBtnAnimFt) return;

	regBtnAnimFt = true;

	regBtnFt.style.cursor = 'default';

	regTextFt.style.animation = 'regTextGoneFt 0.1s ease-out';

	setTimeout(() =>{
		regTextFt.style.display = 'none';

		regEmailFt.style.display = 'inline';
		regEmailFt.style.animation = 'regEmailShowFt 0.1s ease-out';

		regBtnFt.classList.remove('regBtnTFt');
		regBtnFt.style.animation = 'regBtnBigFt 0.1s ease-out forwards';

		okBtnFt.style.display = 'inline';
		okBtnFt.style.animation = 'regEmailShowFt 0.1s ease-out forwards';
	}, 100);
});

okBtnFt.addEventListener('click', () =>{
	regEmailFt.style.animation = 'regTextGoneFt 0.1s ease-out forwards';
	okBtnFt.style.animation = 'regTextGoneFt 0.1s ease-out forwards';
	regBtnFt.style.animation = 'regBtnSmolFt 0.1s ease-out forwards';
	setTimeout(() =>{
		regEmailFt.style.display = 'none';
		okBtnFt.style.display = 'none';

		regTextFt.textContent = "Tack!"
		regTextFt.style.display = 'inline';
		regTextFt.style.animation = 'regEmailShowFt 0.1s ease-out forwards';
	}, 100);
});