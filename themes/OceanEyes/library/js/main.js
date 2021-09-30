var slideIndex = 0;
var x = document.getElementsByClassName( 'fp-slide-box' );
carousel();
function carousel() {
	for (var i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	if (slideIndex >= x.length) {slideIndex = 0}
	x[slideIndex].style.display = "flex";

	if (slideIndex === 0) {

		document.getElementById( 'slidetext-1a' ).style.display = "block";
		setTimeout(function(){
			document.getElementById( 'slidetext-1b' ).style.display = "block";
		},500);
		setTimeout(function(){
			var block = document.querySelectorAll( '#slidetext-1c, #slidetext-1d, #slidetext-1e' );
			for (var j = 0; j < block.length; j++) {
				block[j].style.display = "block";
			}
		},1000)
		setTimeout(function(){
			document.getElementById( 'slidetext-1f' ).style.display = "block";
		},1500)
		setTimeout(function(){
			document.getElementById( 'slidetext-1g' ).style.display = "block";
		},2000)
	

	} else if (slideIndex === 1) {
		document.getElementById( 'slidetext-2a' ).style.display = "block";
		setTimeout(function(){
			document.getElementById( 'slidetext-2b' ).style.display = "block";
		},500);
		setTimeout(function(){
			var block = document.querySelectorAll( '#slidetext-2c, #slidetext-2d, #slidetext-2e' );
			for (var i = 0; i < block.length; i++) {
				block[i].style.display = "block";
			}
		},1000)
		setTimeout(function(){
			document.getElementById( 'slidetext-2f' ).style.display = "block";
		},1500)
		setTimeout(function(){
			document.getElementById( 'slidetext-2g' ).style.display = "block";
		},2000)
	} else if (slideIndex === 2) {
		document.getElementById( 'slidetext-3a' ).style.display = "block";
		setTimeout(function(){
			document.getElementById( 'slidetext-3b' ).style.display = "block";
		},500);
		setTimeout(function(){
			var block = document.querySelectorAll( '#slidetext-3c, #slidetext-3d, #slidetext-3e' );
			for (var i = 0; i < block.length; i++) {
				block[i].style.display = "block";
			}
		},1000)
		setTimeout(function(){
			document.getElementById( 'slidetext-3f' ).style.display = "block";
		},1500)
		setTimeout(function(){
			document.getElementById( 'slidetext-3g' ).style.display = "block";
		},2000)
	}
	slideIndex++;
	setTimeout(carousel, 7000);
}
/*slide screen height*/
var height_adjust = window.innerHeight;
document.getElementById( 'fp-slide-wrap' ).style.height = height_adjust + 'px';

const arrow1 = document.getElementById( 'fp-arrow-1' );
const arrow3 = document.getElementById( 'fp-arrow-3' );
const arrow4 = document.getElementById( 'fp-arrow-4' );
setTimeout(function() {
	arrow1.classList.add( 'arrow-show' );
},1000);
setTimeout(function() {
	arrow3.classList.add( 'arrow-show' );
},1500);
setTimeout(function() {
	arrow4.classList.add( 'arrow-show' );
},2500)

function isInViewport(element) {
	const rect = element.getBoundingClientRect();
	return( rect.top - window.innerHeight + 100 < 0 );
}
const box = document.getElementById( 'fp-intro-wrap' );
const latest_box = document.getElementById( 'latest-1' );
const category_box = document.getElementsByClassName( 'fp-category-each-outer' );
document.addEventListener( 'scroll', function() {
	/*front page latest box*/
	if ( isInViewport( latest_box ) ){latest_box.style.display = "block";}
	/*front page intro*/
	if ( isInViewport( box ) ){box.classList.add( "show-wrap" );}
	/*front page category boxes*/
	for (var i = 0; i < category_box.length; i++){
		if ( isInViewport( category_box[i] ) ) {category_box[i].classList.add( "show-wrap-2" );}
	}
})






