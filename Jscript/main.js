var index = 1;

			function plusInd(n){
				index = index + n;
				showImage(index);
				document.write();
			}

			showImage(1); /*calling the funtion in the main program and passes an argument of n = 1 */

			function showImage(n){
				var x = document.getElementsByClassName("slideshow");/*gets the total of the slideshow images and asign the value of each slideshow to the variable x as it loops through*/
 
				if (n > x.lenght) {index = 1};
				if (n < x.lenght) {index = x.lenght};

					alert(x.lenght);
					for (var i = 0; i < x.length; i++)
					{
						x[i].style.display="none";
					}
					x[index-1].style.display="block";
			}
				autoSlide();  //calling the autoSlide funtion in the main program to perform its task

				function autoSlide(argument) {
					var x = document.getElementsByClassName("slideshow");
				if (index > x.length) {index = 1};
					for (var i = 0; i < x.length; i++)
					{
						x[i].style.display="none";
					}
					x[index-1].style.display="block";
					 index++;
					setTimeout(autoSlide,1000);	//this sets the time delay for the slidshow to play or take effect at 1 seconds
				} 


