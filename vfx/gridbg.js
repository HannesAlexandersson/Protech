const parent = document.currentScript.parentElement;
const height = parent.offsetHeight;
const width = parent.offsetWidth;

const bg = document.createElement('div');
parent.appendChild(bg);

parent.style.position = 'relative';
parent.style.zIndex = '0';

bg.style.position = 'absolute';
bg.style.top = '-10';
bg.style.left = '-10';

console.log(height, width);

for (let i = 0; i < height; i += 54){
	const row = document.createElement('div');
	row.style.height = '50px';
	row.style.margin = '4px 0px';

	let rWidth = 0;

	for (let i = 0; i < width; i += 54){
		rWidth += 54;

		const column = document.createElement('div');
		column.style.height = '50px';
		column.style.width = '50px';
		column.style.margin = '2px';
		column.style.display = 'inline-block';
		row.appendChild(column);

		const square = document.createElement('span');
		square.style.height = '100%';
		square.style.width = '100%';
		square.style.display = 'inline-block';
		square.style.boxShadow = '0px 0px 0px 4px rgba(0, 0, 255, 0), 0px 0px 0px 4px rgba(0, 0, 255, 0) inset';
		square.style.position = 'relative';
		square.style.zIndex = '0';

		square.addEventListener('mousemove', () => {		//Try animate directly in js, constant decrease opacity, reset on mousemove event. Also try requestAnimationFrame() stuff
			square.style.zIndex = '-1';
			square.style.animation = 'gridbgLight 2s ease-out';
		});

		square.addEventListener('animationend', () => {
			square.style.zIndex = '0';
			square.style.animation = '';
		});

		column.appendChild(square);
	}
	row.style.width = rWidth;
	bg.appendChild(row);
}



		// b.addEventListener('mousemove', () => {
		// 	b.style.animation = 'gridbgLight 2s ease-out';
		// });
		// b.addEventListener('animationend', () => {
		// 	b.style.animation = '';
		// });