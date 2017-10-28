

class MenuScroll{

	constructor(){

		// Gobal values
		this.scrollY = 0;
		this.heightTop = 0;

		// Initializers
		this.fixedMenu();
		this.resize();
		this.initialPosition();

		// Selectors
		this.restaurant = document.getElementById('navigation-menu');
		this.about = document.getElementById('restaurant');
		this.menu = document.getElementById('navMenu');

	}


	fixedMenu(){

		this.calculation = window.addEventListener('scroll', ()=>{

			// Scroll Y
			this.scrollY = window.pageYOffset;

			if (this.heightTop <= this.scrollY){
				// If the heightTop is less than the static position from the element

				// 1.- Add the class active to the menu
				this.restaurant.classList.add('fixed_active');

			}else if (! this.heightTop < this.scrollY) {
				// If it's not less than the static position

				// 1.- Remove the class active to the menu
				this.restaurant.classList.remove('fixed_active');

			}

		});
	}


	resize(){
		// Everytime the window is resized
		this.calculation = window.addEventListener('resize', ()=>{

			this.initialPosition();
		});
	}

	initialPosition(target){

		// Select the div element
		let section = document.getElementById('restaurant');
		// Reset the heightTop value
		this.heightTop = 0;
		// Run the loop again
		while(section) {
			this.heightTop += (section.offsetTop);
			section = section.offsetParent;
		}
		// log and return it
		console.log(this.heightTop);
		return this.heightTop;
	}

}

new MenuScroll();



class activeMenus {
	constructor() {

	}
	activeMenu(divElement, navElement){

		let divHeight = divElement.offsetHeight + this.heightTop;

		console.log(this.scrollY );

			if (divHeight >= this.scrollY && divHeight > this.heightTop  ) {
				navElement.classList.add('active');
			}else {
				navElement.classList.remove('active');
			}

	}

	targetCalculateHeight(target, navElem){
		// Select the div element
		navElem
		// Reset the heightTop value
		let size = 0;
		// Run the loop again
		while(target) {
			size += (target.offsetTop);
			target = target.offsetParent;
		}
		// log and retun it
		console.log(size + ' current ');
		return this.size;

	}
}














// Mobile Menu

class MobileMenu {
	constructor() {
		this.menuIcon = document.getElementById('nav');
		this.header = document.getElementById('brand_container');
		this.menu = document.getElementById('navigation-menu');
		this.menuElement = document.querySelector('#navigation-menu');
		this.toggleMenu();
		this.reset();



		// console.log('works');

	}

	toggleMenu(){
		this.menuIcon.addEventListener('click', ()=>{
			// console.log('works');
			this.menuIcon.classList.toggle('activeX');
			this.header.classList.toggle('active');

			this.menu.classList.toggle('activeMenu');
			// menuToggle = menuToggle == "none" ? "block" : "none";

		});
	}
	reset(){

		this.menuElement.addEventListener('click', ()=>{
			let resolution = window.innerWidth;

			console.log(resolution);
			if (resolution <= 950) {
				this.menuIcon.classList.toggle('activeX');
				this.header.classList.toggle('active');
				this.menu.classList.toggle('activeMenu');
			}

			// menuToggle = menuToggle == "none" ? "block" : "none";

		});
	}
}

new MobileMenu();


class ImageCarousel {
	constructor() {
		
		let elements = document.querySelectorAll('.gallery li');

		this.array = [...elements];
		// Counter
		this.counter = 0;
		// Selectors
		this.next = document.getElementById('next');
		this.prev = document.getElementById('prev');

		this.init();

				console.log(this.counter);

	}

	nextSlide(){

		this.next.addEventListener('click', ()=>{

				if (this.counter == this.array.length - 1) {

						this.counter = 0;

						let counter = this.counter;
						let previous = this.array[counter];

						previous.classList.add('active');

						// last from array

						let lasItem = this.array.length - 1;
						let last = this.array[lasItem];
						last.classList.remove('active');


						console.log(lasItem + 'last');

						}else{

							let counter = this.counter += 1;

							let current = this.array[counter];
							current.classList.toggle('active');

							let previous = this.array[counter - 1]
							previous.classList.remove('active');

						}

				});
	}

	prevSlide(){

		this.prev.addEventListener('click', ()=>{


				let minus = this.counter;
				let item = this.array[minus]
				item.classList.remove('active');

				let minus2 = this.counter - 1;
				let itemPrev = this.array[minus2]
				itemPrev.classList.add('active');

				var current = this.counter -=  1;
				console.log(current);

		});

	}

	init(){
		this.nextSlide();
		this.prevSlide();
	}

}

new ImageCarousel();




//